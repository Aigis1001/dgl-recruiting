<?php
$base = '../';
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>店舗一覧 | 第一総合レジャーグループ</title>

  <meta
    name="description"
    content="第一総合レジャーグループ（DAISO）が展開する全国各エリアの店舗情報をご紹介します。"
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
      STORE LIST
    </p>

    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black leading-tight">
      店舗一覧
    </h1>

    <p class="mt-6 text-gray-300 text-sm sm:text-base leading-loose max-w-2xl">
      全国各エリアで展開するDAISOの店舗をご紹介。
      <br>
      あなたが働く場所を、ここから見つけてください。
    </p>

  </div>

</section>


<!-- ========================================
     STORE INTRO
======================================== -->
<section class="bg-zinc-950 border-t border-b border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center">

      <div>

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          OVER 20 LOCATIONS
        </p>

        <h2 class="mt-3 text-3xl sm:text-5xl font-black leading-tight">
          全国へ広がる
          <br>
          DAISOのフィールド。
        </h2>

      </div>

      <div>

        <p class="text-gray-300 text-sm sm:text-base leading-loose">
          第一総合レジャーグループは、
          全国各エリアで店舗を展開しています。
          <br><br>
          店舗ごとに異なる地域性やお客様のニーズに向き合いながら、
          それぞれの場所で「うれしい」の連鎖を生み出しています。
        </p>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     STORES
======================================== -->
<section class="bg-black">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        OUR STORES
      </p>

      <h2 class="text-3xl sm:text-5xl font-black mt-3">
        店舗を探す
      </h2>

      <p class="mt-5 text-gray-400 text-sm sm:text-base leading-loose max-w-2xl">
        勤務を希望するエリアの店舗情報をご確認ください。
      </p>

    </div>


    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">


      <!-- STORE 01 -->
      <article class="group bg-zinc-950 border border-zinc-800 hover:border-yellow-400 rounded-2xl overflow-hidden transition">

        <div class="relative h-52 overflow-hidden">

          <img
            src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1000&q=80"
            alt="店舗イメージ"
            class="w-full h-full object-cover opacity-70 group-hover:scale-105 transition duration-500"
          >

          <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>

          <div class="absolute left-6 bottom-5">

            <p class="font-en text-yellow-400 italic font-black text-xs tracking-widest">
              AREA 01
            </p>

            <h3 class="text-2xl font-black mt-1">
              関西エリア
            </h3>

          </div>

        </div>


        <div class="p-6 sm:p-7">

          <p class="text-sm text-gray-400 leading-loose">
            関西エリアで展開する店舗。
            地域のお客様に寄り添った店舗づくりを行っています。
          </p>

          <div class="mt-6 pt-5 border-t border-zinc-800">

            <a
              href="<?= $base ?>pages/jobs.php"
              class="flex items-center justify-between font-black hover:text-yellow-400 transition"
            >
              <span>このエリアの求人を見る</span>
              <span class="text-yellow-400">➔</span>
            </a>

          </div>

        </div>

      </article>


      <!-- STORE 02 -->
      <article class="group bg-zinc-950 border border-zinc-800 hover:border-yellow-400 rounded-2xl overflow-hidden transition">

        <div class="relative h-52 overflow-hidden">

          <img
            src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=1000&q=80"
            alt="店舗イメージ"
            class="w-full h-full object-cover opacity-70 group-hover:scale-105 transition duration-500"
          >

          <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>

          <div class="absolute left-6 bottom-5">

            <p class="font-en text-yellow-400 italic font-black text-xs tracking-widest">
              AREA 02
            </p>

            <h3 class="text-2xl font-black mt-1">
              全国各エリア
            </h3>

          </div>

        </div>


        <div class="p-6 sm:p-7">

          <p class="text-sm text-gray-400 leading-loose">
            全国各エリアに展開する店舗。
            希望する勤務地に合わせた働き方を探すことができます。
          </p>

          <div class="mt-6 pt-5 border-t border-zinc-800">

            <a
              href="<?= $base ?>pages/jobs.php"
              class="flex items-center justify-between font-black hover:text-yellow-400 transition"
            >
              <span>全国の求人を見る</span>
              <span class="text-yellow-400">➔</span>
            </a>

          </div>

        </div>

      </article>


      <!-- STORE 03 -->
      <article class="group bg-zinc-950 border border-zinc-800 hover:border-yellow-400 rounded-2xl overflow-hidden transition">

        <div class="relative h-52 overflow-hidden">

          <img
            src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1000&q=80"
            alt="職場イメージ"
            class="w-full h-full object-cover opacity-70 group-hover:scale-105 transition duration-500"
          >

          <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>

          <div class="absolute left-6 bottom-5">

            <p class="font-en text-yellow-400 italic font-black text-xs tracking-widest">
              ALL LOCATIONS
            </p>

            <h3 class="text-2xl font-black mt-1">
              全店舗共通
            </h3>

          </div>

        </div>


        <div class="p-6 sm:p-7">

          <p class="text-sm text-gray-400 leading-loose">
            店舗スタッフからマネージャーまで、
            さまざまなポジションで活躍できます。
          </p>

          <div class="mt-6 pt-5 border-t border-zinc-800">

            <a
              href="<?= $base ?>pages/career.php"
              class="flex items-center justify-between font-black hover:text-yellow-400 transition"
            >
              <span>キャリアを見る</span>
              <span class="text-yellow-400">➔</span>
            </a>

          </div>

        </div>

      </article>

    </div>

  </div>

</section>


<!-- ========================================
     WORKING AREA
======================================== -->
<section class="bg-zinc-950 border-t border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20">

      <div>

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          CHOOSE YOUR PLACE
        </p>

        <h2 class="mt-3 text-3xl sm:text-5xl font-black leading-tight">
          働く場所も、
          <br>
          キャリアの一部。
        </h2>

      </div>


      <div class="space-y-6">

        <div class="bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

          <h3 class="text-xl font-black">
            地方で働く
          </h3>

          <p class="mt-4 text-sm text-gray-400 leading-loose">
            地域に根ざした仕事をしながら、
            新しい環境で自分自身の可能性を広げることができます。
          </p>

        </div>


        <div class="bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

          <h3 class="text-xl font-black">
            新しい場所へ挑戦する
          </h3>

          <p class="mt-4 text-sm text-gray-400 leading-loose">
            これまでとは違う環境に飛び込み、
            新しい経験やキャリアを積み重ねることもできます。
          </p>

        </div>


        <div class="bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

          <h3 class="text-xl font-black">
            あなたに合う働き方を探す
          </h3>

          <p class="mt-4 text-sm text-gray-400 leading-loose">
            勤務地だけでなく、
            職種やキャリアなども含めて自分に合った仕事を探せます。
          </p>

        </div>

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
      FIND YOUR FUTURE
    </p>

    <h2 class="mt-4 text-3xl sm:text-5xl font-black leading-tight">
      あなたが働きたい場所を、
      <br>
      DAISOで見つけよう。
    </h2>

    <p class="mt-6 text-sm sm:text-base font-bold leading-loose">
      気になるエリアの求人情報をチェックしてみてください。
    </p>

    <a
      href="<?= $base ?>pages/jobs.php"
      class="mt-8 inline-flex items-center justify-center bg-black text-white hover:bg-zinc-800 px-8 py-4 rounded-full font-black transition"
    >
      求人を探す ➔
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