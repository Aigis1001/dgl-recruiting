<?php
$base = '../';
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>求人を探す | 第一総合レジャーグループ</title>

  <meta
    name="description"
    content="第一総合レジャーグループ（DAISO）の求人情報。全国各エリアの募集職種・給与条件・勤務形態などをご紹介します。"
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

<?php include $base . 'includes/header.php'; ?>


<!-- ========================================
     PAGE HERO
======================================== -->
<section class="relative pt-16 sm:pt-20 bg-black overflow-hidden">

  <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/10 via-transparent to-transparent"></div>

  <div class="relative max-w-7xl mx-auto px-6 sm:px-8 py-20 sm:py-28">

    <p class="font-en text-yellow-400 italic font-black text-sm sm:text-base tracking-widest mb-4">
      JOB LIST
    </p>

    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black leading-tight">
      求人を探す
    </h1>

    <p class="mt-6 text-gray-300 text-sm sm:text-base leading-loose max-w-2xl">
      あなたに合った働き方を、ここから。
      <br>
      第一総合レジャーグループの最新求人情報をご紹介します。
    </p>

  </div>

</section>


<!-- ========================================
     SEARCH AREA
======================================== -->
<section class="bg-zinc-950 border-t border-b border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        FIND YOUR JOB
      </p>

      <h2 class="text-3xl sm:text-5xl font-black mt-3">
        あなたに合う仕事を探す
      </h2>

      <p class="mt-5 text-gray-400 text-sm sm:text-base leading-loose max-w-2xl">
        勤務エリアや職種など、
        自分に合った条件から求人をチェックできます。
      </p>

    </div>


    <!-- AREA -->
    <div class="bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

      <div class="flex flex-col sm:flex-row sm:items-center gap-4">

        <div class="shrink-0">

          <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
            AREA
          </p>

          <h3 class="text-xl font-black mt-1">
            勤務エリア
          </h3>

        </div>

        <div class="hidden sm:block w-px h-10 bg-zinc-800"></div>

        <div class="flex flex-wrap gap-3">

          <button
            type="button"
            class="px-5 py-3 rounded-full bg-yellow-400 text-black font-black text-sm"
          >
            全国
          </button>

          <button
            type="button"
            class="px-5 py-3 rounded-full border border-zinc-700 text-white hover:border-yellow-400 hover:text-yellow-400 font-black text-sm transition"
          >
            関西
          </button>

          <button
            type="button"
            class="px-5 py-3 rounded-full border border-zinc-700 text-white hover:border-yellow-400 hover:text-yellow-400 font-black text-sm transition"
          >
            その他エリア
          </button>

        </div>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     JOB CARDS
======================================== -->
<section class="bg-black">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-12">

      <div>

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          OPEN POSITIONS
        </p>

        <h2 class="text-3xl sm:text-5xl font-black mt-3">
          募集中の職種
        </h2>

      </div>

      <p class="text-sm text-gray-500">
        ※募集内容は変更となる場合があります。
      </p>

    </div>


    <div class="grid md:grid-cols-2 gap-5 sm:gap-6">


      <!-- JOB 01 -->
      <article class="group bg-zinc-950 border border-zinc-800 hover:border-yellow-400 rounded-2xl p-7 sm:p-8 transition">

        <div class="flex items-start justify-between gap-4">

          <div>

            <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
              POSITION 01
            </p>

            <h3 class="text-2xl sm:text-3xl font-black mt-2">
              店舗スタッフ
            </h3>

          </div>

          <span class="shrink-0 px-3 py-1 bg-yellow-400 text-black rounded-full text-xs font-black">
            未経験歓迎
          </span>

        </div>


        <p class="mt-6 text-sm text-gray-400 leading-loose">
          店舗でのお客様対応やフロア業務、
          店舗運営に関わるさまざまな業務を担当します。
        </p>


        <div class="mt-7 pt-6 border-t border-zinc-800 space-y-3 text-sm">

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">勤務地</span>
            <span class="font-bold">全国各エリア</span>
          </div>

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">雇用形態</span>
            <span class="font-bold">正社員</span>
          </div>

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">経験</span>
            <span class="font-bold">未経験歓迎</span>
          </div>

        </div>


        <a
          href="<?= $base ?>pages/contact.php"
          class="mt-7 flex items-center justify-between w-full px-5 py-4 bg-black border border-zinc-700 group-hover:border-yellow-400 rounded-xl font-black transition"
        >
          <span>この求人について問い合わせる</span>
          <span class="text-yellow-400 text-xl">➔</span>
        </a>

      </article>


      <!-- JOB 02 -->
      <article class="group bg-zinc-950 border border-zinc-800 hover:border-yellow-400 rounded-2xl p-7 sm:p-8 transition">

        <div class="flex items-start justify-between gap-4">

          <div>

            <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
              POSITION 02
            </p>

            <h3 class="text-2xl sm:text-3xl font-black mt-2">
              店舗マネージャー
            </h3>

          </div>

          <span class="shrink-0 px-3 py-1 bg-yellow-400 text-black rounded-full text-xs font-black">
            キャリア採用
          </span>

        </div>


        <p class="mt-6 text-sm text-gray-400 leading-loose">
          店舗運営を中心に、
          スタッフの育成や売上管理など
          幅広いマネジメント業務を担当します。
        </p>


        <div class="mt-7 pt-6 border-t border-zinc-800 space-y-3 text-sm">

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">勤務地</span>
            <span class="font-bold">全国各エリア</span>
          </div>

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">雇用形態</span>
            <span class="font-bold">正社員</span>
          </div>

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">経験</span>
            <span class="font-bold">経験者歓迎</span>
          </div>

        </div>


        <a
          href="<?= $base ?>pages/contact.php"
          class="mt-7 flex items-center justify-between w-full px-5 py-4 bg-black border border-zinc-700 group-hover:border-yellow-400 rounded-xl font-black transition"
        >
          <span>この求人について問い合わせる</span>
          <span class="text-yellow-400 text-xl">➔</span>
        </a>

      </article>


      <!-- JOB 03 -->
      <article class="group bg-zinc-950 border border-zinc-800 hover:border-yellow-400 rounded-2xl p-7 sm:p-8 transition">

        <div class="flex items-start justify-between gap-4">

          <div>

            <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
              POSITION 03
            </p>

            <h3 class="text-2xl sm:text-3xl font-black mt-2">
              エリアマネージャー
            </h3>

          </div>

          <span class="shrink-0 px-3 py-1 bg-emerald-500 text-white rounded-full text-xs font-black">
            管理職
          </span>

        </div>


        <p class="mt-6 text-sm text-gray-400 leading-loose">
          複数店舗を担当し、
          各店舗の運営サポートやスタッフ育成、
          エリア全体のマネジメントを行います。
        </p>


        <div class="mt-7 pt-6 border-t border-zinc-800 space-y-3 text-sm">

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">勤務地</span>
            <span class="font-bold">全国各エリア</span>
          </div>

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">雇用形態</span>
            <span class="font-bold">正社員</span>
          </div>

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">経験</span>
            <span class="font-bold">経験者歓迎</span>
          </div>

        </div>


        <a
          href="<?= $base ?>pages/contact.php"
          class="mt-7 flex items-center justify-between w-full px-5 py-4 bg-black border border-zinc-700 group-hover:border-yellow-400 rounded-xl font-black transition"
        >
          <span>この求人について問い合わせる</span>
          <span class="text-yellow-400 text-xl">➔</span>
        </a>

      </article>


      <!-- JOB 04 -->
      <article class="group bg-zinc-950 border border-zinc-800 hover:border-yellow-400 rounded-2xl p-7 sm:p-8 transition">

        <div class="flex items-start justify-between gap-4">

          <div>

            <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
              POSITION 04
            </p>

            <h3 class="text-2xl sm:text-3xl font-black mt-2">
              本部スタッフ
            </h3>

          </div>

          <span class="shrink-0 px-3 py-1 bg-zinc-800 text-gray-300 rounded-full text-xs font-black">
            各種職種
          </span>

        </div>


        <p class="mt-6 text-sm text-gray-400 leading-loose">
          グループ全体を支える本部業務。
          店舗運営とは異なる視点から、
          DAISOの成長を支える仕事です。
        </p>


        <div class="mt-7 pt-6 border-t border-zinc-800 space-y-3 text-sm">

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">勤務地</span>
            <span class="font-bold">各拠点・本部</span>
          </div>

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">雇用形態</span>
            <span class="font-bold">正社員</span>
          </div>

          <div class="flex justify-between gap-4">
            <span class="text-gray-500">経験</span>
            <span class="font-bold">職種により異なる</span>
          </div>

        </div>


        <a
          href="<?= $base ?>pages/contact.php"
          class="mt-7 flex items-center justify-between w-full px-5 py-4 bg-black border border-zinc-700 group-hover:border-yellow-400 rounded-xl font-black transition"
        >
          <span>この求人について問い合わせる</span>
          <span class="text-yellow-400 text-xl">➔</span>
        </a>

      </article>

    </div>

  </div>

</section>


<!-- ========================================
     BEGINNER
======================================== -->
<section class="bg-zinc-950 border-t border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center">

      <div>

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          FOR BEGINNERS
        </p>

        <h2 class="mt-3 text-3xl sm:text-5xl font-black leading-tight">
          未経験からでも、
          <br>
          ここから始められる。
        </h2>

      </div>

      <div>

        <p class="text-gray-300 text-sm sm:text-base leading-loose">
          DAISOでは、未経験からスタートするスタッフも多く、
          仕事を覚えながら一歩ずつ成長していける環境を整えています。
          <br><br>
          実際に未経験入社率は85%以上。
          経験よりも、これから挑戦したいという気持ちを大切にしています。
        </p>

        <a
          href="<?= $base ?>pages/career.php"
          class="mt-7 inline-flex items-center gap-3 text-yellow-400 font-black hover:text-yellow-300 transition"
        >
          キャリアパスを見る
          <span>➔</span>
        </a>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     CTA
======================================== -->
<section class="bg-yellow-400 text-black">

  <div class="max-w-5xl mx-auto px-6 sm:px-8 py-16 sm:py-20 text-center">

    <p class="font-en italic font-black text-sm tracking-widest">
      JOIN DAISO
    </p>

    <h2 class="mt-4 text-3xl sm:text-5xl font-black leading-tight">
      気になる仕事が見つかったら、
      <br>
      次はあなたの番です。
    </h2>

    <p class="mt-6 text-sm sm:text-base font-bold leading-loose">
      少しでも気になった方は、お気軽にお問い合わせください。
    </p>

    <a
      href="<?= $base ?>pages/contact.php"
      class="mt-8 inline-flex items-center justify-center bg-black text-white hover:bg-zinc-800 px-8 py-4 rounded-full font-black transition"
    >
      WEBからエントリー ➔
    </a>

  </div>

</section>


<!-- ========================================
     BACK TO TOP
======================================== -->
<section class="bg-black border-t border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-10">

    <a
      href="<?= $base ?>index.php"
      class="inline-flex items-center gap-3 text-sm font-black hover:text-yellow-400 transition"
    >
      ← TOPへ戻る
    </a>

  </div>

</section>


<?php include $base . 'includes/footer.php'; ?>

</body>
</html>