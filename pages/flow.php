<?php
$base = '../';
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>選考の流れ | 第一総合レジャーグループ</title>

  <meta
    name="description"
    content="第一総合レジャーグループ（DAISO）の応募から内定・入社までの選考の流れをご紹介します。"
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
      SELECTION FLOW
    </p>

    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black leading-tight">
      選考の流れ
    </h1>

    <p class="mt-6 text-gray-300 text-sm sm:text-base leading-loose max-w-2xl">
      応募から内定・入社まで。
      <br>
      DAISOの採用ステップを分かりやすくご紹介します。
    </p>

  </div>

</section>


<!-- ========================================
     FLOW INTRO
======================================== -->
<section class="bg-zinc-950 border-t border-b border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center">

      <div>

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          SIMPLE PROCESS
        </p>

        <h2 class="mt-3 text-3xl sm:text-5xl font-black leading-tight">
          シンプルで分かりやすい、
          <br>
          DAISOの選考。
        </h2>

      </div>

      <div>

        <p class="text-gray-300 text-sm sm:text-base leading-loose">
          「応募したいけど、何をすればいいか分からない」
          という方もご安心ください。
          <br><br>
          応募から面接、内定、入社まで、
          一つずつステップをご案内します。
        </p>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     SELECTION STEPS
======================================== -->
<section class="bg-black">

  <div class="max-w-5xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        STEP BY STEP
      </p>

      <h2 class="text-3xl sm:text-5xl font-black mt-3">
        選考ステップ
      </h2>

    </div>


    <div class="relative">

      <div class="absolute left-5 sm:left-6 top-8 bottom-8 w-px bg-zinc-800"></div>


      <div class="space-y-8 sm:space-y-10">


        <!-- STEP 01 -->
        <div class="relative flex gap-5 sm:gap-8">

          <div class="relative z-10 shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-yellow-400 text-black flex items-center justify-center font-en font-black italic">
            01
          </div>

          <div class="flex-1 bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

            <p class="font-en text-yellow-400 italic font-black text-xs tracking-widest">
              ENTRY
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              エントリー
            </h3>

            <p class="mt-5 text-sm text-gray-400 leading-loose">
              WEBから必要事項を入力してご応募ください。
              気になる求人が決まっていなくても、
              まずはお気軽にお問い合わせいただけます。
            </p>

          </div>

        </div>


        <!-- STEP 02 -->
        <div class="relative flex gap-5 sm:gap-8">

          <div class="relative z-10 shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-yellow-400 text-black flex items-center justify-center font-en font-black italic">
            02
          </div>

          <div class="flex-1 bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

            <p class="font-en text-yellow-400 italic font-black text-xs tracking-widest">
              CONTACT
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              担当者からご連絡
            </h3>

            <p class="mt-5 text-sm text-gray-400 leading-loose">
              エントリー内容を確認後、
              採用担当者より今後の流れについてご連絡します。
              面接日時などを相談して決定します。
            </p>

          </div>

        </div>


        <!-- STEP 03 -->
        <div class="relative flex gap-5 sm:gap-8">

          <div class="relative z-10 shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-yellow-400 text-black flex items-center justify-center font-en font-black italic">
            03
          </div>

          <div class="flex-1 bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

            <p class="font-en text-yellow-400 italic font-black text-xs tracking-widest">
              INTERVIEW
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              面接
            </h3>

            <p class="mt-5 text-sm text-gray-400 leading-loose">
              これまでの経験だけではなく、
              あなたがこれからやりたいことや
              挑戦したいことについてもお聞かせください。
            </p>

          </div>

        </div>


        <!-- STEP 04 -->
        <div class="relative flex gap-5 sm:gap-8">

          <div class="relative z-10 shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-yellow-400 text-black flex items-center justify-center font-en font-black italic">
            04
          </div>

          <div class="flex-1 bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

            <p class="font-en text-yellow-400 italic font-black text-xs tracking-widest">
              OFFER
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              内定
            </h3>

            <p class="mt-5 text-sm text-gray-400 leading-loose">
              選考結果をご連絡します。
              入社時期や勤務条件などについて確認しながら、
              入社に向けて準備を進めます。
            </p>

          </div>

        </div>


        <!-- STEP 05 -->
        <div class="relative flex gap-5 sm:gap-8">

          <div class="relative z-10 shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-yellow-400 text-black flex items-center justify-center font-en font-black italic">
            05
          </div>

          <div class="flex-1 bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

            <p class="font-en text-yellow-400 italic font-black text-xs tracking-widest">
              START
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              入社
            </h3>

            <p class="mt-5 text-sm text-gray-400 leading-loose">
              いよいよDAISOでの仕事がスタート。
              未経験の方も、先輩スタッフのサポートを受けながら
              一歩ずつ仕事を覚えていきます。
            </p>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     POINT
======================================== -->
<section class="bg-zinc-950 border-t border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        POINT
      </p>

      <h2 class="text-3xl sm:text-5xl font-black mt-3">
        応募前に知っておきたいこと
      </h2>

    </div>


    <div class="grid md:grid-cols-3 gap-5 sm:gap-6">

      <div class="bg-black border border-zinc-800 rounded-2xl p-7 sm:p-8">

        <div class="font-en text-yellow-400 italic font-black text-3xl">
          01
        </div>

        <h3 class="mt-6 text-xl font-black">
          未経験でもOK
        </h3>

        <p class="mt-4 text-sm text-gray-400 leading-loose">
          経験だけで判断するのではなく、
          これからの意欲や人柄も大切にしています。
        </p>

      </div>


      <div class="bg-black border border-zinc-800 rounded-2xl p-7 sm:p-8">

        <div class="font-en text-yellow-400 italic font-black text-3xl">
          02
        </div>

        <h3 class="mt-6 text-xl font-black">
          まずは相談でもOK
        </h3>

        <p class="mt-4 text-sm text-gray-400 leading-loose">
          仕事内容や勤務地など、
          応募前に確認しておきたいことがあれば
          お気軽にお問い合わせください。
        </p>

      </div>


      <div class="bg-black border border-zinc-800 rounded-2xl p-7 sm:p-8">

        <div class="font-en text-yellow-400 italic font-black text-3xl">
          03
        </div>

        <h3 class="mt-6 text-xl font-black">
          あなたの未来を聞かせてください
        </h3>

        <p class="mt-4 text-sm text-gray-400 leading-loose">
          面接ではこれまでだけでなく、
          これからやってみたいことについても
          ぜひ聞かせてください。
        </p>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     FAQ LINK
======================================== -->
<section class="bg-black border-t border-zinc-800">

  <div class="max-w-5xl mx-auto px-6 sm:px-8 py-16 sm:py-20 text-center">

    <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
      HAVE QUESTIONS?
    </p>

    <h2 class="mt-3 text-3xl sm:text-4xl font-black">
      よくある質問もチェック
    </h2>

    <p class="mt-5 text-sm text-gray-400 leading-loose">
      応募や仕事内容について気になることがあれば、
      よくある質問もご確認ください。
    </p>

    <a
      href="<?= $base ?>index.php#faq"
      class="mt-8 inline-flex items-center justify-center border border-zinc-700 hover:border-yellow-400 hover:text-yellow-400 px-8 py-4 rounded-full font-black transition"
    >
      よくある質問を見る ➔
    </a>

  </div>

</section>


<!-- ========================================
     CTA
======================================== -->
<section class="bg-yellow-400 text-black">

  <div class="max-w-5xl mx-auto px-6 sm:px-8 py-16 sm:py-20 text-center">

    <p class="font-en italic font-black text-sm tracking-widest">
      ENTRY NOW
    </p>

    <h2 class="mt-4 text-3xl sm:text-5xl font-black leading-tight">
      あなたの挑戦を、
      <br>
      DAISOで始めよう。
    </h2>

    <p class="mt-6 text-sm sm:text-base font-bold leading-loose">
      まずはお気軽にエントリーしてください。
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