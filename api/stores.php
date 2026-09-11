<?php

header('Content-Type: application/json; charset=UTF-8');
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


/* =========================================================
   HTTP取得
   ========================================================= */

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
            'Accept-Language: ja,en-US;q=0.9,en;q=0.8'
        ]
    ]);

    $html = curl_exec($ch);

    curl_close($ch);

    return $html ?: '';
}


/* =========================================================
   相対URL → 絶対URL
   ========================================================= */

function toAbsoluteUrl($url, $baseUrl)
{
    if (!$url) {
        return '';
    }

    if (preg_match('/^https?:\/\//i', $url)) {
        return $url;
    }

    if (strpos($url, '//') === 0) {
        return 'https:' . $url;
    }

    $base = parse_url($baseUrl);

    if (!$base || empty($base['scheme']) || empty($base['host'])) {
        return $url;
    }

    $origin =
        $base['scheme'] . '://' .
        $base['host'];

    if (strpos($url, '/') === 0) {
        return $origin . $url;
    }

    $path = isset($base['path'])
        ? dirname($base['path'])
        : '';

    return $origin .
        '/' .
        trim($path, '/') .
        '/' .
        ltrim($url, '/');
}


/* =========================================================
   HTML → DOM
   ========================================================= */

function createDom($html)
{
    if (!$html) {
        return null;
    }

    libxml_use_internal_errors(true);

    $dom = new DOMDocument();

    $dom->loadHTML(
        '<?xml encoding="UTF-8">' . $html
    );

    libxml_clear_errors();

    return $dom;
}


/* =========================================================
   The WhiteのCAST取得
   ========================================================= */

function getCasts($girlUrl)
{
    $html = fetchHtml($girlUrl);

    if (!$html) {
        return [];
    }

    $dom = createDom($html);

    if (!$dom) {
        return [];
    }

    $xpath = new DOMXPath($dom);

    /*
     * 風俗じゃぱんのキャスト一覧
     */
    $castNodes = $xpath->query(
        "//*[contains(concat(' ', normalize-space(@class), ' '), ' erlCastData ')]"
    );

    $casts = [];

    if (!$castNodes || $castNodes->length === 0) {
        return [];
    }

    for ($i = 0; $i < $castNodes->length && count($casts) < 5; $i++) {

        $castNode = $castNodes->item($i);

        $name = '';

        /*
         * キャスト名
         */
        $nameNodes = $xpath->query(
            ".//*[contains(@class, 'girlName') or contains(@class, 'castName')]",
            $castNode
        );

        if ($nameNodes && $nameNodes->length > 0) {

            $name = trim(
                $nameNodes->item(0)->textContent
            );

        }

        /*
         * 名前が取れなかった場合、
         * カード内のリンクタイトルなどから取得
         */
        if ($name === '') {

            $links = $xpath->query(
                ".//a",
                $castNode
            );

            if ($links && $links->length > 0) {

                foreach ($links as $link) {

                    $text = trim(
                        $link->textContent
                    );

                    if ($text !== '') {

                        $name = $text;
                        break;
                    }
                }
            }
        }

        if ($name === '') {
            continue;
        }

        /*
         * プロフィールURL
         */
        $girlPageUrl = '';

        $links = $xpath->query(
            ".//a[@href]",
            $castNode
        );

        if ($links && $links->length > 0) {

            foreach ($links as $link) {

                $href = $link->getAttribute('href');

                if (
                    $href &&
                    (
                        strpos($href, '/girl/') !== false ||
                        strpos($href, '/cast/') !== false
                    )
                ) {

                    $girlPageUrl =
                        toAbsoluteUrl(
                            $href,
                            $girlUrl
                        );

                    break;
                }
            }
        }

        /*
         * 画像取得
         */
        $imageUrl = '';

        $imageNodes = $xpath->query(
            ".//img",
            $castNode
        );

        if ($imageNodes && $imageNodes->length > 0) {

            foreach ($imageNodes as $img) {

                $src = '';

                if ($img->hasAttribute('data-original')) {
                    $src =
                        $img->getAttribute('data-original');
                }

                if (
                    $src === '' &&
                    $img->hasAttribute('src')
                ) {
                    $src =
                        $img->getAttribute('src');
                }

                if ($src !== '') {

                    $imageUrl =
                        toAbsoluteUrl(
                            $src,
                            $girlUrl
                        );

                    break;
                }
            }
        }


        /*
         * プロフィールページがある場合、
         * そちらの画像を優先して取得
         */
        if ($girlPageUrl !== '') {

            $profileHtml =
                fetchHtml($girlPageUrl);

            if ($profileHtml) {

                $profileDom =
                    createDom($profileHtml);

                if ($profileDom) {

                    $profileXpath =
                        new DOMXPath($profileDom);

                    $profileImages =
                        $profileXpath->query(
                            "//*[contains(@class, 'p-centeringPhotoObject')]"
                        );

                    if (
                        $profileImages &&
                        $profileImages->length > 0
                    ) {

                        $image =
                            $profileImages->item(0);

                        if (
                            $image->hasAttribute(
                                'data-original'
                            )
                        ) {

                            $imageUrl =
                                toAbsoluteUrl(
                                    $image->getAttribute(
                                        'data-original'
                                    ),
                                    $girlPageUrl
                                );

                        } elseif (
                            $image->hasAttribute('src')
                        ) {

                            $imageUrl =
                                toAbsoluteUrl(
                                    $image->getAttribute(
                                        'src'
                                    ),
                                    $girlPageUrl
                                );
                        }
                    }
                }
            }
        }


        $casts[] = [
            'name' => $name,
            'image' => $imageUrl,
            'girlUrl' => $girlPageUrl
        ];
    }

    return $casts;
}


/* =========================================================
   店舗データ生成
   ========================================================= */

$result = [];


/*
 * 今回はまずThe Whiteだけを実際に取得。
 * 他店舗は後で順番に確認する。
 */

foreach ($stores as $index => $store) {

    if ($index > 0) {
        break;
    }

    $casts =
        getCasts(
            $store['girlUrl']
        );

    $result[] = [
        'name' => $store['name'],
        'topUrl' => $store['topUrl'],
        'girlUrl' => $store['girlUrl'],
        'mainImage' => '',
        'casts' => array_slice($casts, 0, 5)
    ];
}


/* =========================================================
   JSON出力
   ========================================================= */

echo json_encode(
    $result,
    JSON_UNESCAPED_UNICODE |
    JSON_UNESCAPED_SLASHES |
    JSON_PRETTY_PRINT
);