<?php
$base = '../';
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>グループ概要 | 第一総合レジャーグループ</title>
  <meta
    name="description"
    content="第一総合レジャーグループ（DAISO）のグループ概要をご紹介します。"
  >

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,800;1,900&family=Noto+Sans+JP:wght@500;700;900&display=swap"
    rel="stylesheet"
  >

  <link rel="stylesheet" href="<?= $base ?>assets/css/style.css">
</head>

<body class="antialiased selection:bg-yellow-400 selection:text-black">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="pt-16 sm:pt-20">

  <!-- PAGE HERO -->
  <section class="bg-black border-b border-zinc-800 py-20 sm:py-32">

    <div class="max-w-7xl mx-auto px-6 sm:px-8">

      <p class="font-en font-black italic text-yellow-400 text-sm sm:text-base">
        GROUP
      </p>

      <h1 class="text-4xl sm:text-6xl md:text-7xl font-black mt-3 leading-tight">
        グループ概要
      </h1>

      <p class="max-w-3xl text-gray-400 text-sm sm:text-lg leading-relaxed mt-8">
        第一総合レジャーグループ（DAISO）の
        事業・組織・展開についてご紹介します。
      </p>

    </div>

  </section>


  <!-- GROUP MESSAGE -->
  <section class="bg-zinc-950 border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-7xl mx-auto px-6 sm:px-8">

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

        <div>

          <p class="font-en font-black italic text-yellow-400 text-sm">
            DAIICHI GENERAL LEISURE GROUP
          </p>

          <h2 class="text-3xl sm:text-5xl font-black mt-3 leading-tight">
            エンターテインメントの<br>
            未来をつくる。
          </h2>

          <p class="text-gray-300 text-sm sm:text-base leading-loose mt-8">
            第一総合レジャーグループは、
            エンターテインメントを通じて
            人々に楽しさや喜びを届ける総合レジャー企業です。
          </p>

          <p class="text-gray-300 text-sm sm:text-base leading-loose mt-5">
            お客様だけではなく、スタッフやパートナーなど、
            関わるすべての人が笑顔になれる環境をつくること。
            それを大切な使命として、
            新しいサービスや店舗づくりに挑戦しています。
          </p>

        </div>


        <div class="relative min-h-[320px] sm:min-h-[420px] rounded-2xl overflow-hidden border border-zinc-800">

          <img
            src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1200&q=80"
            alt="DAISO GROUP"
            class="absolute inset-0 w-full h-full object-cover"
          >

          <div class="absolute inset-0 bg-black/55"></div>

          <div class="absolute inset-0 flex items-center justify-center text-center p-6">

            <div>

              <p class="font-en font-black italic text-yellow-400 text-4xl sm:text-6xl">
                DAISO
              </p>

              <p class="font-en font-black italic text-white text-sm sm:text-lg mt-3">
                SMILE LOOP ON!
              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- BUSINESS -->
  <section class="bg-black border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-7xl mx-auto px-6 sm:px-8">

      <div class="mb-10 sm:mb-14">

        <p class="font-en font-black italic text-yellow-400 text-sm">
          BUSINESS
        </p>

        <h2 class="text-3xl sm:text-5xl font-black mt-2">
          事業について
        </h2>

      </div>


      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 sm:p-8">

          <span class="font-en font-black italic text-yellow-400 text-4xl">
            01
          </span>

          <h3 class="text-2xl font-black mt-5">
            店舗運営
          </h3>

          <p class="text-sm text-gray-400 leading-relaxed mt-4">
            お客様が安心して楽しめる空間を提供するため、
            店舗スタッフ一人ひとりがサービス品質の向上に取り組んでいます。
          </p>

        </div>


        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 sm:p-8">

          <span class="font-en font-black italic text-yellow-400 text-4xl">
            02
          </span>

          <h3 class="text-2xl font-black mt-5">
            人材育成
          </h3>

          <p class="text-sm text-gray-400 leading-relaxed mt-4">
            未経験からでも成長できる研修・サポート体制を整え、
            一人ひとりのキャリア形成を支援しています。
          </p>

        </div>


        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 sm:p-8">

          <span class="font-en font-black italic text-yellow-400 text-4xl">
            03
          </span>

          <h3 class="text-2xl font-black mt-5">
            新しい挑戦
          </h3>

          <p class="text-sm text-gray-400 leading-relaxed mt-4">
            時代の変化を捉えながら、
            新しい店舗・サービス・働き方を積極的に取り入れ、
            グループの可能性を広げていきます。
          </p>

        </div>

      </div>

    </div>

  </section>


  <!-- COMPANY PROFILE -->
  <section class="bg-zinc-950 border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-5xl mx-auto px-6 sm:px-8">

      <div class="text-center">

        <p class="font-en font-black italic text-yellow-400 text-sm">
          COMPANY PROFILE
        </p>

        <h2 class="text-3xl sm:text-5xl font-black mt-2">
          グループ基本情報
        </h2>

      </div>


      <div class="mt-10 bg-black border border-zinc-800 rounded-2xl overflow-hidden">

        <div class="grid grid-cols-1 sm:grid-cols-[220px_1fr] border-b border-zinc-800">

          <div class="p-5 sm:p-6 font-black bg-zinc-900">
            正式名称
          </div>

          <div class="p-5 sm:p-6 text-gray-300">
            第一総合レジャーグループ
          </div>

        </div>


        <div class="grid grid-cols-1 sm:grid-cols-[220px_1fr] border-b border-zinc-800">

          <div class="p-5 sm:p-6 font-black bg-zinc-900">
            略称・ブランド
          </div>

          <div class="p-5 sm:p-6 text-gray-300">
            DAISO
          </div>

        </div>


        <div class="grid grid-cols-1 sm:grid-cols-[220px_1fr] border-b border-zinc-800">

          <div class="p-5 sm:p-6 font-black bg-zinc-900">
            事業領域
          </div>

          <div class="p-5 sm:p-6 text-gray-300">
            総合レジャー事業
          </div>

        </div>


        <div class="grid grid-cols-1 sm:grid-cols-[220px_1fr] border-b border-zinc-800">

          <div class="p-5 sm:p-6 font-black bg-zinc-900">
            運営店舗
          </div>

          <div class="p-5 sm:p-6 text-gray-300">
            全国各エリア
          </div>

        </div>


        <div class="grid grid-cols-1 sm:grid-cols-[220px_1fr]">

          <div class="p-5 sm:p-6 font-black bg-zinc-900">
            グループ在籍数
          </div>

          <div class="p-5 sm:p-6 text-gray-300">
            300名超
          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- FUTURE -->
  <section class="bg-black border-b border-zinc-800 py-16 sm:py-24">

    <div class="max-w-4xl mx-auto px-6 sm:px-8 text-center">

      <p class="font-en font-black italic text-yellow-400 text-sm">
        OUR FUTURE
      </p>

      <h2 class="text-3xl sm:text-5xl font-black mt-3 leading-tight">
        「うれしい」の輪を、<br>
        もっと大きく。
      </h2>

      <p class="text-gray-400 text-sm sm:text-base leading-loose mt-8">
        DAISOはこれからも、
        お客様・スタッフ・パートナーのすべてが
        「うれしい」と感じられる場所をつくっていきます。
        変化を恐れず、新しいエンターテインメントの形を追求します。
      </p>

    </div>

  </section>


  <!-- BACK -->
  <section class="bg-zinc-950 py-16">

    <div class="max-w-7xl mx-auto px-6 sm:px-8">

      <a
        href="<?= $base ?>index.php"
        class="inline-flex items-center gap-3 bg-yellow-400 hover:bg-yellow-300 text-black px-6 py-3 rounded-full font-black transition"
      >
        ← TOPへ戻る
      </a>

    </div>

  </section>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script src="<?= $base ?>assets/js/main.js"></script>

</body>
</html>