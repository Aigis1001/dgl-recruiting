<?php
$base = './';
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>第一総合レジャーグループ（DAISO） | 公式採用サイト</title>
  <meta name="description" content="第一総合レジャーグループ（DAISO）の公式採用サイト。「うれしい」の連鎖を創り出すエンターテインメント集団の最新採用情報・社員紹介・店舗一覧。">

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,800;1,900&family=Noto+Sans+JP:wght@500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= $base ?>assets/css/style.css">
</head>

<body class="antialiased selection:bg-yellow-400 selection:text-black">

<?php include __DIR__ . '/includes/header.php'; ?>

<main>

  <!-- HERO -->
  <section class="relative h-screen min-h-[500px] sm:min-h-[650px] flex items-center overflow-hidden pt-16 sm:pt-20">

    <video
      class="absolute inset-0 w-full h-full object-cover"
      autoplay
      muted
      loop
      playsinline
    >
      <source src="<?= $base ?>assets/video/hero-bg.mp4" type="video/mp4">
    </video>

    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-black/60"></div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 sm:px-8">

      <div class="max-w-4xl">

        <div class="inline-flex items-center bg-yellow-400 text-black px-4 py-2 rounded-full mb-5">
          <span class="font-en font-black italic text-xs sm:text-sm tracking-wider">
            DAISO RECRUITING 2026
          </span>
        </div>

        <h1 class="font-en font-black italic text-5xl sm:text-7xl md:text-8xl lg:text-9xl leading-none text-yellow-400 uppercase">
          Smile Loop On!
        </h1>

        <p class="font-en font-black italic text-xl sm:text-3xl md:text-4xl mt-4">
          A team that creates happiness.
        </p>

        <div class="mt-6 sm:mt-8 text-sm sm:text-lg md:text-xl font-bold leading-relaxed">
          <p>
            関わるすべての人に「うれしい」の連鎖を。
          </p>
          <p class="mt-2">
            業界のイメージと未来を私たちが本気で変えていく、
            <br class="sm:hidden">
            成長と挑戦のエンターテインメント集団。
          </p>
        </div>

      </div>

      <!-- SPECIAL TOOL -->
      <div
        id="shindan"
        class="mt-8 sm:mt-12 max-w-2xl bg-gradient-to-r from-yellow-400 via-amber-400 to-orange-400 text-black rounded-2xl p-5 sm:p-6 shadow-2xl"
      >
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

          <div>
            <span class="inline-block bg-black text-yellow-400 px-3 py-1 rounded-full font-en font-black italic text-[10px] sm:text-xs mb-2">
              SPECIAL TOOL
            </span>

            <h2 class="font-black text-lg sm:text-2xl leading-tight">
              1分でわかる！あなたにピッタリの働き方診断
            </h2>
          </div>

          <a
            href="<?= $base ?>pages/shindan.php"
            class="shrink-0 bg-black text-white px-5 py-3 rounded-full font-black text-sm hover:bg-zinc-800 transition text-center"
          >
            診断スタート ▶
          </a>

        </div>
      </div>

    </div>
  </section>


  <!-- MARQUEE -->
  <div class="bg-yellow-400 text-black overflow-hidden border-y border-black">

    <div class="animate-marquee whitespace-nowrap font-en font-black italic text-xl sm:text-3xl py-3 sm:py-4">

      <div class="flex items-center shrink-0">
        <span class="mx-6">DAIICHI GENERAL LEISURE GROUP (DAISO)</span>
        <span>★</span>
        <span class="mx-6">SMILE LOOP ON!</span>
        <span>★</span>
        <span class="mx-6">A TEAM THAT CREATES HAPPINESS.</span>
        <span>★</span>
        <span class="mx-6">DAIICHI GENERAL LEISURE GROUP (DAISO)</span>
        <span>★</span>
        <span class="mx-6">SMILE LOOP ON!</span>
        <span>★</span>
        <span class="mx-6">A TEAM THAT CREATES HAPPINESS.</span>
        <span>★</span>
      </div>

    </div>
  </div>


  <!-- RECRUITMENT -->
  <section id="findjob" class="bg-black border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-7xl mx-auto px-6 sm:px-8">

      <div class="mb-10 sm:mb-14">
        <p class="font-en font-black italic text-yellow-400 text-sm sm:text-base">
          RECRUITMENT &amp; CONTENTS
        </p>
        <h2 class="text-3xl sm:text-5xl font-black mt-2">
          採用情報・コンテンツ
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

        <?php
        $recruitmentCards = [
          [
            'number' => '01',
            'en' => 'JOB LIST',
            'title' => '求人を探す',
            'href' => 'pages/jobs.php',
            'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=800&q=80',
            'description' => '全国各地の募集職種・給与条件・勤務形態から自分に合った求人を検索できます。',
            'cta' => '求人一覧へ ➔'
          ],
          [
            'number' => '02',
            'en' => 'STORES',
            'title' => '店舗一覧',
            'href' => 'pages/stores.php',
            'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80',
            'description' => '第一総合レジャーグループが展開する全国各エリアの店舗情報をご紹介。',
            'cta' => '店舗一覧へ ➔'
          ],
          [
            'number' => '03',
            'en' => 'CAREER STEP',
            'title' => 'キャリアパス',
            'href' => 'pages/career.php',
            'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80',
            'description' => '未経験からのステップアップ制度、評価体系、昇格の実績について解説します。',
            'cta' => 'キャリアを見る ➔'
          ],
          [
            'number' => '04',
            'en' => 'SELECTION FLOW',
            'title' => '選考の流れ',
            'href' => 'pages/flow.php',
            'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
            'description' => '応募から内定・入社までのスピード感ある選考プロセスをご案内します。',
            'cta' => '選考フローを見る ➔'
          ],
          [
            'number' => '05',
            'en' => 'WORK STYLE',
            'title' => 'DAISOの一週間',
            'href' => 'pages/works.php',
            'image' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80',
            'description' => 'オンとオフを全力で楽しむ、DAISOで働くスタッフのリアルな一週間のスケジュールをご紹介。',
            'cta' => '一週間の流れを見る ➔'
          ]
        ];

        foreach ($recruitmentCards as $card):
        ?>

          <a
            href="<?= $base . $card['href'] ?>"
            class="group relative min-h-[260px] overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900"
          >

            <div
              class="absolute inset-0 bg-cover bg-center opacity-30 group-hover:scale-105 transition duration-700"
              style="background-image:url('<?= $card['image'] ?>')"
            ></div>

            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-black/20"></div>

            <div class="relative z-10 h-full min-h-[260px] p-6 sm:p-8 flex flex-col justify-end">

              <div class="font-en font-black italic text-yellow-400 text-xs mb-2">
                <?= $card['number'] ?> / <?= $card['en'] ?>
              </div>

              <h3 class="text-2xl sm:text-3xl font-black mb-3">
                <?= $card['title'] ?>
              </h3>

              <p class="text-sm text-gray-300 leading-relaxed">
                <?= $card['description'] ?>
              </p>

              <div class="mt-5 font-black text-yellow-400 text-sm">
                <?= $card['cta'] ?>
              </div>

            </div>

          </a>

        <?php endforeach; ?>

      </div>
    </div>
  </section>


  <!-- MEMBERS -->
  <section id="members" class="bg-zinc-950 border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-7xl mx-auto px-6 sm:px-8">

      <div class="mb-10 sm:mb-14">
        <p class="font-en font-black italic text-yellow-400 text-sm">
          INTERVIEW
        </p>
        <h2 class="text-3xl sm:text-5xl font-black mt-2">
          社員紹介
        </h2>
        <p class="text-gray-400 mt-4">
          現場で活躍する先輩社員のリアルな声と成長ストーリー
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <?php
        $members = [
          [
            'id' => 1,
            'name' => '佐々木 幹幹',
            'role' => '店舗マネージャー',
            'description' => '未経験からのスタートでしたが、サポート体制のおかげで1年半で店長へ昇格できました。',
            'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80'
          ],
          [
            'id' => 2,
            'name' => '海上 翔',
            'role' => 'エリアマネージャー',
            'description' => 'チーム全員で目標に向かい、「うれしい」を共有できる最高の職場環境です。',
            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&q=80'
          ],
          [
            'id' => 3,
            'name' => '田中 慎太郎',
            'role' => 'フロアスタッフ',
            'description' => '自分の提案がすぐに店舗づくりに活かされるやりがいを毎日感じています。',
            'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80'
          ]
        ];

        foreach ($members as $member):
        ?>

          <a
            href="<?= $base ?>pages/member-detail.php?id=<?= $member['id'] ?>"
            class="group bg-black border border-zinc-800 rounded-2xl overflow-hidden hover:border-yellow-400 transition"
          >

            <div class="relative h-56 sm:h-64 overflow-hidden">

              <img
                src="<?= $member['image'] ?>"
                alt="<?= $member['name'] ?>"
                class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
              >

              <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>

              <span class="absolute bottom-4 left-4 bg-yellow-400 text-black px-3 py-1 rounded-full text-xs font-black">
                <?= $member['role'] ?>
              </span>

            </div>

            <div class="p-6">

              <h3 class="text-xl font-black">
                <?= $member['name'] ?>
              </h3>

              <p class="text-sm text-gray-400 leading-relaxed mt-3">
                <?= $member['description'] ?>
              </p>

            </div>

          </a>

        <?php endforeach; ?>

      </div>
    </div>
  </section>


  <!-- ABOUT -->
  <section id="about" class="bg-black border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-7xl mx-auto px-6 sm:px-8">

      <div class="mb-10 sm:mb-14">
        <p class="font-en font-black italic text-yellow-400 text-sm">
          ABOUT DAISO
        </p>
        <h2 class="text-3xl sm:text-5xl font-black mt-2">
          第一総合レジャーグループとは？
        </h2>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <a
          href="<?= $base ?>pages/about.php"
          class="group relative min-h-[320px] overflow-hidden rounded-2xl border border-zinc-800"
        >

          <div
            class="absolute inset-0 bg-cover bg-center opacity-30 group-hover:scale-105 transition duration-700"
            style="background-image:url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1000&q=80')"
          ></div>

          <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-black/20"></div>

          <div class="relative z-10 p-8 sm:p-12 min-h-[320px] flex flex-col justify-end">

            <h3 class="text-2xl sm:text-3xl font-black">
              第一総合レジャーグループとは？
            </h3>

            <p class="text-sm sm:text-base text-gray-300 leading-relaxed mt-4">
              お客様・スタッフ・パートナー全員が「笑顔」と「喜び」を共有できる環境づくりを目指す総合レジャー企業。業界のイメージと未来を私たちが本気で変えていきます。
            </p>

          </div>

        </a>


        <a
          href="<?= $base ?>pages/data.php"
          class="group relative min-h-[320px] overflow-hidden rounded-2xl border border-zinc-800"
        >

          <div
            class="absolute inset-0 bg-cover bg-center opacity-30 group-hover:scale-105 transition duration-700"
            style="background-image:url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1000&q=80')"
          ></div>

          <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-black/20"></div>

          <div class="relative z-10 p-8 sm:p-12 min-h-[320px] flex flex-col justify-end">

            <h3 class="text-2xl sm:text-3xl font-black">
              数字で見るDAISO
            </h3>

            <p class="text-sm sm:text-base text-gray-300 leading-relaxed mt-4">
              運営店舗数20拠点超、グループ在籍数300名超、未経験入社率85%など、実績とデータで分かるDAISOのリアルな姿をご紹介します。
            </p>

          </div>

        </a>

      </div>
    </div>
  </section>


  <!-- MOVIE -->
  <section id="video" class="bg-zinc-950 border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-5xl mx-auto px-6 sm:px-8">

      <div class="mb-10 sm:mb-14">
        <p class="font-en font-black italic text-yellow-400 text-sm">
          MOVIE
        </p>
        <h2 class="text-3xl sm:text-5xl font-black mt-2">
          動画で見るDAISO
        </h2>
      </div>

      <div class="space-y-6">

        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4">

          <video
            class="w-full aspect-video object-cover rounded-xl"
            controls
            muted
            playsinline
          >
            <source src="<?= $base ?>assets/video/hero-bg.mp4" type="video/mp4">
          </video>

          <h3 class="font-black text-lg sm:text-xl mt-4 px-2">
            【コンセプトPV】Smile Loop On!
          </h3>

        </div>


        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4">

          <video
            class="w-full aspect-video object-cover rounded-xl"
            controls
            muted
            playsinline
            poster="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80"
          >
            <source src="<?= $base ?>assets/video/hero-bg.mp4" type="video/mp4">
          </video>

          <h3 class="font-black text-lg sm:text-xl mt-4 px-2">
            【密着】若手マネージャーの一日
          </h3>

        </div>

      </div>
    </div>
  </section>


  <!-- NEWS -->
  <section id="news" class="bg-black border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-5xl mx-auto px-6 sm:px-8">

      <div class="mb-10 sm:mb-14">
        <p class="font-en font-black italic text-yellow-400 text-sm">
          NEWS
        </p>
        <h2 class="text-3xl sm:text-5xl font-black mt-2">
          新着情報
        </h2>
      </div>

      <div class="space-y-2">

        <a href="#" class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-6 p-4 sm:p-6 border-b border-zinc-800 hover:bg-zinc-900 transition">

          <span class="font-en font-black italic text-gray-400 text-sm shrink-0">
            2026.08.15
          </span>

          <span class="inline-block w-fit bg-yellow-400 text-black px-3 py-1 rounded-full text-xs font-black">
            採用情報
          </span>

          <span class="font-bold">
            2026年度 中途・新卒採用のエントリー受付を開始しました。
          </span>

        </a>


        <a href="#" class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-6 p-4 sm:p-6 border-b border-zinc-800 hover:bg-zinc-900 transition">

          <span class="font-en font-black italic text-gray-400 text-sm shrink-0">
            2026.07.01
          </span>

          <span class="inline-block w-fit bg-emerald-600 text-white px-3 py-1 rounded-full text-xs font-black">
            プレス
          </span>

          <span class="font-bold">
            新規店舗オープンのお知らせとオープニングスタッフ募集
          </span>

        </a>

      </div>
    </div>
  </section>


  <!-- FAQ -->
  <section id="faq" class="bg-zinc-950 border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-5xl mx-auto px-6 sm:px-8">

      <div class="mb-10 sm:mb-14">
        <p class="font-en font-black italic text-yellow-400 text-sm">
          FAQ
        </p>
        <h2 class="text-3xl sm:text-5xl font-black mt-2">
          よくある質問
        </h2>
      </div>

      <div class="space-y-4">

        <div class="bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

          <h3 class="font-black text-lg sm:text-xl">
            未経験でも応募可能ですか？
          </h3>

          <p class="text-gray-400 text-sm sm:text-base leading-relaxed mt-4">
            はい、85%以上のスタッフが未経験からスタートしています。充実した研修制度がありますのでご安心ください。
          </p>

        </div>


        <div class="bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

          <h3 class="font-black text-lg sm:text-xl">
            寮や住み込みのサポートはありますか？
          </h3>

          <p class="text-gray-400 text-sm sm:text-base leading-relaxed mt-4">
            完備しております。家具家電付きの寮を用意していますので、遠方からのご応募も大歓迎です。
          </p>

        </div>

      </div>
    </div>
  </section>


  <!-- ENTRY CTA -->
  <section class="bg-gradient-to-b from-zinc-950 to-black py-20 sm:py-32">

    <div class="max-w-4xl mx-auto px-6 sm:px-8 text-center">

      <p class="font-en font-black italic text-yellow-400 text-sm sm:text-base mb-4">
        ENTRY
      </p>

      <h2 class="text-3xl sm:text-5xl md:text-6xl font-black leading-tight">
        さあ、あなたも「うれしい」の輪へ。
      </h2>

      <p class="text-gray-400 mt-6 leading-relaxed">
        特別なスキルは必要ありません。あなたの笑顔と挑戦意欲をお待ちしています。
      </p>

      <a
        href="<?= $base ?>pages/contact.php"
        class="inline-flex items-center justify-center mt-8 bg-yellow-400 hover:bg-yellow-300 text-black px-8 py-4 rounded-full font-black transition"
      >
        WEBから今すぐエントリー ➔
      </a>

    </div>
  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script src="<?= $base ?>assets/js/main.js"></script>

</body>
</html>