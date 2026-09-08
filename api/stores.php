<?php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$stores = [
    [
        'name' => 'The White',
        'topUrl' => 'https://www.cityheaven.net/hyogo/A2801/A280101/the_white/',
        'girlUrl' => 'https://fuzoku.jp/fukuharawhite/girllist/'
    ],
    [
        'name' => 'KOBE GOLD',
        'topUrl' => 'https://www.cityheaven.net/hyogo/A2801/A280102/kobe_gold/',
        'girlUrl' => 'https://fuzoku.jp/kobegoldff/girllist/'
    ],
    [
        'name' => 'モンテクラブ',
        'topUrl' => 'https://www.cityheaven.net/hyogo/A2801/A280102/monte/',
        'girlUrl' => 'https://fuzoku.jp/soapsakura/girllist/'
    ],
    [
        'name' => 'プラチナ本館',
        'topUrl' => 'https://www.cityheaven.net/fukui/A1801/A180101/hot-heaven/',
        'girlUrl' => 'https://fuzoku.jp/hot2009/girllist/'
    ],
    [
        'name' => 'プラチナ別館',
        'topUrl' => 'https://www.cityheaven.net/fukui/A1801/A180101/hien_b/',
        'girlUrl' => 'https://fuzoku.jp/hot2009/girllist/'
    ],
    [
        'name' => 'ホワイト宮殿',
        'topUrl' => 'https://www.cityheaven.net/shiga/A2501/A250101/ogoto_otemachi/',
        'girlUrl' => 'https://fuzoku.jp/ogotoogoto/girllist/'
    ],
    [
        'name' => 'パリス宮殿',
        'topUrl' => 'https://www.cityheaven.net/shiga/A2501/A250101/ogoto_men/',
        'girlUrl' => 'https://fuzoku.jp/mensspa/girllist/'
    ],
    [
        'name' => 'ダイヤモンド宮殿',
        'topUrl' => 'https://www.cityheaven.net/kumamoto/A4301/A430101/marin_premium_k/',
        'girlUrl' => 'https://fuzoku.jp/Diamondkyuden/girllist/'
    ],
    [
        'name' => 'ダイヤモンド宮殿別館',
        'topUrl' => 'https://www.cityheaven.net/kumamoto/A4301/A430101/churippu_girls/',
        'girlUrl' => 'https://fuzoku.jp/Diamondkyuden/girllist/'
    ]
];


/*
 * City HeavenのHTMLを取得
 */
function fetchHtml($url)
{
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_USERAGENT =>
            'Mozilla/5.0 (Windows NT 10.0; Win64; x64) ' .
            'AppleWebKit/537.36 (KHTML, like Gecko) ' .
            'Chrome/140.0 Safari/537.36',
        CURLOPT_HTTPHEADER => [
            'Accept-Language: ja-JP,ja;q=0.9'
        ]
    ]);

    $html = curl_exec($ch);

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($html === false || $httpCode < 200 || $httpCode >= 400) {
        return null;
    }

    return $html;
}


/*
 * 相対URLを絶対URLへ変換
 */
function absoluteUrl($url, $baseUrl)
{
    if (!$url) {
        return '';
    }

    if (strpos($url, 'http://') === 0 ||
        strpos($url, 'https://') === 0) {
        return $url;
    }

    if (strpos($url, '//') === 0) {
        return 'https:' . $url;
    }

    $base = parse_url($baseUrl);

    if (!$base || empty($base['scheme']) || empty($base['host'])) {
        return $url;
    }

    if (strpos($url, '/') === 0) {
        return $base['scheme'] . '://' . $base['host'] . $url;
    }

    $path = isset($base['path'])
        ? dirname($base['path'])
        : '';

    return $base['scheme'] . '://' .
           $base['host'] .
           rtrim($path, '/') . '/' .
           ltrim($url, '/');
}


/*
 * DOMDocumentを作成
 */
function createDom($html)
{
    libxml_use_internal_errors(true);

    $dom = new DOMDocument();

    $html = mb_convert_encoding(
        $html,
        'HTML-ENTITIES',
        'UTF-8'
    );

    $dom->loadHTML($html);

    libxml_clear_errors();

    return $dom;
}


/*
 * 風俗じゃぱんの女の子一覧から先頭5人を取得
 *
 * 女の子ページの並び順をそのまま使用する。
 * /girl/○○/ のリンクを基準に取得。
 */
function extractGirls($html, $girlUrl)
{
    $dom = createDom($html);
    $xpath = new DOMXPath($dom);

    $girls = [];
    $usedUrls = [];

    /*
     * 風俗じゃぱんの女の子個別ページ
     *
     * 例：
     * /girl/2/
     * /girl/185/
     * /girl/62/
     */
    $links = $xpath->query(
        '//a[contains(@href, "/girl/")]'
    );

    if (!$links) {
        return $girls;
    }

    foreach ($links as $link) {

        if (count($girls) >= 5) {
            break;
        }

        $href = trim(
            $link->getAttribute('href')
        );

        if ($href === '') {
            continue;
        }

        $url = absoluteUrl(
            $href,
            $girlUrl
        );

        /*
         * 同じ女の子への重複リンクを除外
         */
        if (in_array($url, $usedUrls, true)) {
            continue;
        }

        /*
         * リンク内の画像を取得
         */
        $image = '';

        $images = $xpath->query(
            './/img',
            $link
        );

        if ($images && $images->length > 0) {

            $img = $images->item(0);

            $image =
                $img->getAttribute('src');

            if (!$image) {
                $image =
                    $img->getAttribute('data-src');
            }

            if (!$image) {
                $image =
                    $img->getAttribute('data-original');
            }

            if (!$image) {
                $image =
                    $img->getAttribute('data-lazy-src');
            }

            if ($image) {
                $image =
                    absoluteUrl(
                        $image,
                        $girlUrl
                    );
            }
        }

        /*
         * 女の子名を取得
         *
         * 風俗じゃぱんでは
         * 「おもち (21) T154/...」
         * のようなテキストになるため、
         * 最初の「(年齢)」より前を名前として取得。
         */
        $text = trim(
            preg_replace(
                '/\s+/u',
                ' ',
                $link->textContent
            )
        );

        if ($text === '') {
            continue;
        }

        $name = $text;

        if (
            preg_match(
                '/^(.+?)\s*\(\d+\)/u',
                $text,
                $matches
            )
        ) {
            $name = trim(
                $matches[1]
            );
        }

        if ($name === '') {
            continue;
        }

        $girls[] = [
            'name' => $name,
            'image' => $image,
            'url' => $url
        ];

        $usedUrls[] = $url;
    }

    return $girls;
}


/*
 * 店舗メイン画像を取得
 *
 * 現段階では店舗TOPの画像群から
 * メインビジュアル候補を取得する。
 */
function extractMainImage($html, $topUrl)
{
    $dom = createDom($html);
    $xpath = new DOMXPath($dom);

    $images = $xpath->query('//img');

    if (!$images) {
        return '';
    }

    foreach ($images as $img) {

        $src = $img->getAttribute('src');

        if (!$src) {
            $src = $img->getAttribute('data-src');
        }

        if (!$src) {
            $src = $img->getAttribute('data-original');
        }

        if (!$src) {
            continue;
        }

        $src = absoluteUrl($src, $topUrl);

        /*
         * 明らかな小型アイコン等を除外
         */
        $width = intval(
            $img->getAttribute('width')
        );

        $height = intval(
            $img->getAttribute('height')
        );

        if ($width > 0 && $width < 300) {
            continue;
        }

        if ($height > 0 && $height < 150) {
            continue;
        }

        return $src;
    }

    return '';
}


/*
 * 全店舗処理
 */
$result = [];

foreach ($stores as $store) {

    $topHtml =
        fetchHtml($store['topUrl']);

    $girlHtml =
        fetchHtml($store['girlUrl']);

    $mainImage = '';

    $casts = [];

    if ($topHtml) {
        $mainImage =
            extractMainImage(
                $topHtml,
                $store['topUrl']
            );
    }

    if ($girlHtml) {
        $casts =
            extractGirls(
                $girlHtml,
                $store['girlUrl']
            );
    }

    $result[] = [
        'name' => $store['name'],
        'topUrl' => $store['topUrl'],
        'girlUrl' => $store['girlUrl'],
        'mainImage' => $mainImage,
        'casts' => array_slice(
            $casts,
            0,
            5
        )
    ];
}


/*
 * JSONとして返す
 */
echo json_encode(
    $result,
    JSON_UNESCAPED_UNICODE |
    JSON_UNESCAPED_SLASHES |
    JSON_PRETTY_PRINT
);