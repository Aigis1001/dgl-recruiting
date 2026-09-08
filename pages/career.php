<?php
$base = '../';
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>キャリアパス | 第一総合レジャーグループ</title>

  <meta
    name="description"
    content="第一総合レジャーグループ（DAISO）のキャリアパスをご紹介。未経験からでも成長できる環境と、スタッフ一人ひとりの挑戦を支えるキャリアステップをご案内します。"
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
      CAREER PATH
    </p>

    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black leading-tight">
      キャリアパス
    </h1>

    <p class="mt-6 text-gray-300 text-sm sm:text-base leading-loose max-w-2xl">
      未経験からでも、目指したい未来へ。
      <br>
      DAISOでは、一人ひとりの成長と挑戦を大切にしています。
    </p>

  </div>

</section>


<!-- ========================================
     INTRO
======================================== -->
<section class="bg-zinc-950 border-t border-b border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

      <div>

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          GROWTH
        </p>

        <h2 class="mt-3 text-3xl sm:text-5xl font-black leading-tight">
          頑張った分だけ、
          <br>
          次のステージへ。
        </h2>

      </div>

      <div>

        <p class="text-gray-300 text-sm sm:text-base leading-loose">
          DAISOでは、入社時の経験だけで将来を決めることはありません。
          <br><br>
          日々の仕事への取り組みや成果、周囲とのコミュニケーション、
          そして「もっと成長したい」という気持ちを大切にしながら、
          一人ひとりのキャリア形成をサポートします。
        </p>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     CAREER STEP
======================================== -->
<section class="bg-black">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        CAREER STEP
      </p>

      <h2 class="text-3xl sm:text-5xl font-black mt-3">
        キャリアステップ
      </h2>

      <p class="mt-5 text-gray-400 text-sm sm:text-base leading-loose max-w-2xl">
        現場からマネジメントまで、
        さまざまなステージで活躍することができます。
      </p>

    </div>


    <div class="relative">

      <!-- connecting line -->
      <div class="hidden md:block absolute left-1/2 top-10 bottom-10 w-px bg-zinc-800"></div>


      <div class="space-y-6 sm:space-y-8">

        <!-- STEP 01 -->
        <div class="relative md:flex md:items-center md:gap-12">

          <div class="md:w-1/2 md:text-right">

            <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
              STEP 01
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              フロアスタッフ
            </h3>

          </div>

          <div class="hidden md:flex relative z-10 w-8 h-8 shrink-0 bg-yellow-400 rounded-full items-center justify-center">
            <span class="w-2 h-2 bg-black rounded-full"></span>
          </div>

          <div class="md:w-1/2 mt-4 md:mt-0">

            <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

              <p class="text-sm text-gray-400 leading-loose">
                まずは店舗で仕事の基本を身につけます。
                お客様との接客や店舗運営を通して、
                DAISOの仕事を理解していきます。
              </p>

            </div>

          </div>

        </div>


        <!-- STEP 02 -->
        <div class="relative md:flex md:items-center md:gap-12">

          <div class="md:w-1/2 md:order-3">

            <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
              STEP 02
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              店舗マネージャー
            </h3>

          </div>

          <div class="hidden md:flex relative z-10 w-8 h-8 shrink-0 bg-yellow-400 rounded-full items-center justify-center md:order-2">
            <span class="w-2 h-2 bg-black rounded-full"></span>
          </div>

          <div class="md:w-1/2 mt-4 md:mt-0 md:order-1">

            <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

              <p class="text-sm text-gray-400 leading-loose">
                店舗全体を見渡しながら、
                スタッフの育成や売上管理など、
                より幅広い店舗運営に携わります。
              </p>

            </div>

          </div>

        </div>


        <!-- STEP 03 -->
        <div class="relative md:flex md:items-center md:gap-12">

          <div class="md:w-1/2 md:text-right">

            <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
              STEP 03
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              エリアマネージャー
            </h3>

          </div>

          <div class="hidden md:flex relative z-10 w-8 h-8 shrink-0 bg-yellow-400 rounded-full items-center justify-center">
            <span class="w-2 h-2 bg-black rounded-full"></span>
          </div>

          <div class="md:w-1/2 mt-4 md:mt-0">

            <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

              <p class="text-sm text-gray-400 leading-loose">
                複数店舗を担当し、
                店舗マネージャーのサポートや
                エリア全体の成長を担います。
              </p>

            </div>

          </div>

        </div>


        <!-- STEP 04 -->
        <div class="relative md:flex md:items-center md:gap-12">

          <div class="md:w-1/2 md:order-3">

            <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
              STEP 04
            </p>

            <h3 class="mt-2 text-2xl sm:text-3xl font-black">
              その先のキャリアへ
            </h3>

          </div>

          <div class="hidden md:flex relative z-10 w-8 h-8 shrink-0 bg-yellow-400 rounded-full items-center justify-center md:order-2">
            <span class="w-2 h-2 bg-black rounded-full"></span>
          </div>

          <div class="md:w-1/2 mt-4 md:mt-0 md:order-1">

            <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-8">

              <p class="text-sm text-gray-400 leading-loose">
                マネジメントだけでなく、
                自分の強みや経験を活かして
                さらに大きな役割へ挑戦する道があります。
              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     SUPPORT
======================================== -->
<section class="bg-zinc-950 border-t border-zinc-800">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        SUPPORT
      </p>

      <h2 class="text-3xl sm:text-5xl font-black mt-3">
        成長を支える環境
      </h2>

    </div>


    <div class="grid md:grid-cols-3 gap-5 sm:gap-6">

      <div class="bg-black border border-zinc-800 rounded-2xl p-7 sm:p-8">

        <div class="font-en text-yellow-400 italic font-black text-3xl">
          01
        </div>

        <h3 class="mt-6 text-xl font-black">
          研修・サポート
        </h3>

        <p class="mt-4 text-sm text-gray-400 leading-loose">
          未経験からでも安心してスタートできるよう、
          日々の業務を通して必要な知識やスキルを身につけます。
        </p>

      </div>


      <div class="bg-black border border-zinc-800 rounded-2xl p-7 sm:p-8">

        <div class="font-en text-yellow-400 italic font-black text-3xl">
          02
        </div>

        <h3 class="mt-6 text-xl font-black">
          挑戦できる環境
        </h3>

        <p class="mt-4 text-sm text-gray-400 leading-loose">
          年齢や入社歴だけにとらわれず、
          意欲のある人が新しい仕事へ挑戦できる環境を目指しています。
        </p>

      </div>


      <div class="bg-black border border-zinc-800 rounded-2xl p-7 sm:p-8">

        <div class="font-en text-yellow-400 italic font-black text-3xl">
          03
        </div>

        <h3 class="mt-6 text-xl font-black">
          チームで成長
        </h3>

        <p class="mt-4 text-sm text-gray-400 leading-loose">
          一人で抱え込むのではなく、
          仲間と協力しながら店舗やグループ全体を成長させていきます。
        </p>

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
      START YOUR CAREER
    </p>

    <h2 class="mt-4 text-3xl sm:text-5xl font-black leading-tight">
      あなたの次のステージを、
      <br>
      DAISOで。
    </h2>

    <p class="mt-6 text-sm sm:text-base font-bold leading-loose">
      未経験からの挑戦も大歓迎。
      <br>
      まずはあなたに合った求人を探してみてください。
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