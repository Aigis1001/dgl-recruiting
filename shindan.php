<?php
$base = '../';
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>働き方診断 | 第一総合レジャーグループ</title>

  <meta
    name="description"
    content="1分でわかる、あなたにピッタリの働き方診断。第一総合レジャーグループ（DAISO）での働き方をチェックできます。"
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

  <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/20 via-transparent to-transparent"></div>

  <div class="relative max-w-5xl mx-auto px-6 sm:px-8 py-20 sm:py-28 text-center">

    <p class="font-en text-yellow-400 italic font-black text-sm sm:text-base tracking-widest mb-4">
      SPECIAL TOOL
    </p>

    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black leading-tight">
      1分でわかる！
    </h1>

    <h2 class="mt-3 text-3xl sm:text-5xl font-black leading-tight">
      あなたにピッタリの
      <br class="sm:hidden">
      働き方診断
    </h2>

    <p class="mt-7 text-gray-300 text-sm sm:text-base leading-loose max-w-2xl mx-auto">
      いくつかの質問に答えるだけで、
      <br>
      あなたに合ったDAISOでの働き方をチェックできます。
    </p>

  </div>

</section>


<!-- ========================================
     DIAGNOSIS
======================================== -->
<section class="bg-zinc-950 border-t border-b border-zinc-800">

  <div class="max-w-4xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="text-center mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        LET'S START
      </p>

      <h2 class="mt-3 text-3xl sm:text-4xl font-black">
        あなたはどのタイプ？
      </h2>

    </div>


    <!-- QUESTION 01 -->
    <div class="bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

      <div class="flex items-start gap-4">

        <div class="shrink-0 w-10 h-10 rounded-full bg-yellow-400 text-black flex items-center justify-center font-en font-black italic">
          01
        </div>

        <div>

          <p class="text-xs text-yellow-400 font-black tracking-widest">
            QUESTION
          </p>

          <h3 class="mt-2 text-xl sm:text-2xl font-black leading-relaxed">
            仕事をするうえで、
            <br>
            一番大切にしたいのは？
          </h3>

        </div>

      </div>


      <div class="mt-8 grid sm:grid-cols-2 gap-3">

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">A.</span>
          人と関わること
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">B.</span>
          成長すること
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">C.</span>
          安定した環境
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">D.</span>
          新しいことへの挑戦
        </button>

      </div>

    </div>


    <!-- QUESTION 02 -->
    <div class="mt-6 bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

      <div class="flex items-start gap-4">

        <div class="shrink-0 w-10 h-10 rounded-full bg-yellow-400 text-black flex items-center justify-center font-en font-black italic">
          02
        </div>

        <div>

          <p class="text-xs text-yellow-400 font-black tracking-widest">
            QUESTION
          </p>

          <h3 class="mt-2 text-xl sm:text-2xl font-black leading-relaxed">
            将来の自分に近いのは？
          </h3>

        </div>

      </div>


      <div class="mt-8 grid sm:grid-cols-2 gap-3">

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">A.</span>
          仲間を支えるリーダー
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">B.</span>
          自分の力を伸ばすスペシャリスト
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">C.</span>
          長く安心して働くメンバー
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">D.</span>
          新しい分野を切り拓くチャレンジャー
        </button>

      </div>

    </div>


    <!-- QUESTION 03 -->
    <div class="mt-6 bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

      <div class="flex items-start gap-4">

        <div class="shrink-0 w-10 h-10 rounded-full bg-yellow-400 text-black flex items-center justify-center font-en font-black italic">
          03
        </div>

        <div>

          <p class="text-xs text-yellow-400 font-black tracking-widest">
            QUESTION
          </p>

          <h3 class="mt-2 text-xl sm:text-2xl font-black leading-relaxed">
            新しい仕事を任されたら？
          </h3>

        </div>

      </div>


      <div class="mt-8 grid sm:grid-cols-2 gap-3">

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">A.</span>
          仲間と相談しながら進める
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">B.</span>
          まず自分で調べてみる
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">C.</span>
          一つずつ確実に覚える
        </button>

        <button
          type="button"
          class="text-left p-5 rounded-xl border border-zinc-700 hover:border-yellow-400 hover:bg-yellow-400 hover:text-black transition"
        >
          <span class="font-black">D.</span>
          とりあえずやってみる
        </button>

      </div>

    </div>


    <!-- RESULT BUTTON -->
    <div class="mt-10 text-center">

      <button
        type="button"
        class="inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-black px-10 py-5 rounded-full font-black text-lg transition"
      >
        診断結果を見る ➔
      </button>

      <p class="mt-4 text-xs text-gray-500">
        ※現在は診断ページのデザイン確認用です。
      </p>

    </div>

  </div>

</section>


<!-- ========================================
     RESULT TYPES
======================================== -->
<section class="bg-black">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="text-center mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        RESULT TYPES
      </p>

      <h2 class="mt-3 text-3xl sm:text-5xl font-black">
        こんな働き方があります
      </h2>

    </div>


    <div class="grid md:grid-cols-2 gap-5 sm:gap-6">

      <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-7 sm:p-9">

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          TYPE A
        </p>

        <h3 class="mt-3 text-2xl sm:text-3xl font-black">
          TEAM PLAYER
        </h3>

        <p class="mt-1 text-yellow-400 font-black">
          仲間と一緒に成長するタイプ
        </p>

        <p class="mt-5 text-sm text-gray-400 leading-loose">
          人と関わることが好きなあなたは、
          店舗スタッフやマネージャーなど、
          チームを動かす仕事との相性が良いかもしれません。
        </p>

      </div>


      <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-7 sm:p-9">

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          TYPE B
        </p>

        <h3 class="mt-3 text-2xl sm:text-3xl font-black">
          GROWER
        </h3>

        <p class="mt-1 text-yellow-400 font-black">
          成長を楽しむタイプ
        </p>

        <p class="mt-5 text-sm text-gray-400 leading-loose">
          新しい知識やスキルを身につけることが好きなら、
          キャリアアップを目指しながら
          自分自身を成長させる働き方がおすすめです。
        </p>

      </div>


      <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-7 sm:p-9">

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          TYPE C
        </p>

        <h3 class="mt-3 text-2xl sm:text-3xl font-black">
          STEADY
        </h3>

        <p class="mt-1 text-yellow-400 font-black">
          コツコツ積み上げるタイプ
        </p>

        <p class="mt-5 text-sm text-gray-400 leading-loose">
          一つずつ確実に仕事を覚えたいあなた。
          基本を身につけながら、
          長く安定してキャリアを築いていくことができます。
        </p>

      </div>


      <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-7 sm:p-9">

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          TYPE D
        </p>

        <h3 class="mt-3 text-2xl sm:text-3xl font-black">
          CHALLENGER
        </h3>

        <p class="mt-1 text-yellow-400 font-black">
          新しいことに挑戦するタイプ
        </p>

        <p class="mt-5 text-sm text-gray-400 leading-loose">
          「まずはやってみたい」という気持ちが強いあなた。
          新しい仕事やポジションにも積極的に挑戦し、
          自分の可能性を広げていけます。
        </p>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     JOB LINK
======================================== -->
<section class="bg-zinc-950 border-t border-zinc-800">

  <div class="max-w-5xl mx-auto px-6 sm:px-8 py-16 sm:py-20 text-center">

    <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
      NEXT STEP
    </p>

    <h2 class="mt-3 text-3xl sm:text-5xl font-black">
      あなたに合う求人を探してみよう。
    </h2>

    <p class="mt-6 text-sm sm:text-base text-gray-400 leading-loose">
      診断をきっかけに、
      DAISOでの新しい働き方を見つけてみてください。
    </p>

    <a
      href="<?= $base ?>pages/jobs.php"
      class="mt-8 inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-black px-8 py-4 rounded-full font-black transition"
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