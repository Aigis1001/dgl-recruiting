<?php
$base = '../';
?>
<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>エントリー・お問い合わせ | 第一総合レジャーグループ</title>

  <meta
    name="description"
    content="第一総合レジャーグループ（DAISO）へのエントリー・お問い合わせはこちらから。採用に関するご質問もお気軽にご相談ください。"
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
      ENTRY & CONTACT
    </p>

    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black leading-tight">
      エントリー
    </h1>

    <p class="mt-6 text-gray-300 text-sm sm:text-base leading-loose max-w-2xl mx-auto">
      DAISOで新しい一歩を。
      <br>
      採用に関するお問い合わせもお気軽にどうぞ。
    </p>

  </div>

</section>


<!-- ========================================
     ENTRY OPTIONS
======================================== -->
<section class="bg-zinc-950 border-t border-b border-zinc-800">

  <div class="max-w-6xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="text-center mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        HOW TO CONTACT
      </p>

      <h2 class="mt-3 text-3xl sm:text-5xl font-black">
        お問い合わせ方法
      </h2>

      <p class="mt-5 text-gray-400 text-sm sm:text-base leading-loose">
        ご希望の方法からお気軽にお問い合わせください。
      </p>

    </div>


    <div class="grid md:grid-cols-3 gap-5 sm:gap-6">


      <!-- WEB -->
      <div class="bg-black border border-yellow-400 rounded-2xl p-7 sm:p-9">

        <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
          WEB
        </p>

        <h3 class="mt-3 text-2xl font-black">
          WEBエントリー
        </h3>

        <p class="mt-5 text-sm text-gray-400 leading-loose">
          応募フォームから必要事項を入力して
          エントリーできます。
        </p>

        <a
          href="#entry-form"
          class="mt-7 flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-black py-4 rounded-xl font-black transition"
        >
          エントリーフォームへ
        </a>

      </div>


      <!-- TEL -->
      <div class="bg-black border border-zinc-800 hover:border-yellow-400 rounded-2xl p-7 sm:p-9 transition">

        <p class="font-en text-blue-400 italic font-black text-sm tracking-widest">
          TEL
        </p>

        <h3 class="mt-3 text-2xl font-black">
          電話で相談
        </h3>

        <p class="mt-5 text-sm text-gray-400 leading-loose">
          求人や仕事内容について、
          直接確認したい方はこちら。
        </p>

        <a
          href="tel:0120-000-000"
          class="mt-7 flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white py-4 rounded-xl font-black transition"
        >
          0120-000-000
        </a>

      </div>


      <!-- LINE -->
      <div class="bg-black border border-zinc-800 hover:border-yellow-400 rounded-2xl p-7 sm:p-9 transition">

        <p class="font-en text-emerald-400 italic font-black text-sm tracking-widest">
          LINE
        </p>

        <h3 class="mt-3 text-2xl font-black">
          LINEで相談
        </h3>

        <p class="mt-5 text-sm text-gray-400 leading-loose">
          気になることをLINEから
          気軽に相談できます。
        </p>

        <a
          href="#"
          class="mt-7 flex items-center justify-center bg-emerald-600 hover:bg-emerald-500 text-white py-4 rounded-xl font-black transition"
        >
          LINEで相談する
        </a>

      </div>

    </div>

  </div>

</section>


<!-- ========================================
     ENTRY FORM
======================================== -->
<section id="entry-form" class="bg-black">

  <div class="max-w-4xl mx-auto px-6 sm:px-8 py-16 sm:py-24">

    <div class="text-center mb-12">

      <p class="font-en text-yellow-400 italic font-black text-sm tracking-widest">
        WEB ENTRY
      </p>

      <h2 class="mt-3 text-3xl sm:text-5xl font-black">
        エントリーフォーム
      </h2>

      <p class="mt-5 text-gray-400 text-sm sm:text-base leading-loose">
        必要事項をご入力ください。
        <br>
        内容を確認のうえ、担当者よりご連絡します。
      </p>

    </div>


    <form
      action="#"
      method="post"
      class="bg-zinc-950 border border-zinc-800 rounded-2xl p-6 sm:p-10"
    >


      <!-- NAME -->
      <div>

        <label
          for="name"
          class="block text-sm font-black mb-3"
        >
          お名前
          <span class="ml-2 px-2 py-1 bg-yellow-400 text-black text-[10px] rounded font-black">
            必須
          </span>
        </label>

        <input
          id="name"
          name="name"
          type="text"
          required
          placeholder="例：山田 太郎"
          class="w-full bg-black border border-zinc-700 focus:border-yellow-400 focus:outline-none rounded-xl px-5 py-4 text-white placeholder-gray-600 transition"
        >

      </div>


      <!-- KANA -->
      <div class="mt-7">

        <label
          for="kana"
          class="block text-sm font-black mb-3"
        >
          ふりがな
          <span class="ml-2 px-2 py-1 bg-yellow-400 text-black text-[10px] rounded font-black">
            必須
          </span>
        </label>

        <input
          id="kana"
          name="kana"
          type="text"
          required
          placeholder="例：やまだ たろう"
          class="w-full bg-black border border-zinc-700 focus:border-yellow-400 focus:outline-none rounded-xl px-5 py-4 text-white placeholder-gray-600 transition"
        >

      </div>


      <!-- PHONE -->
      <div class="mt-7">

        <label
          for="phone"
          class="block text-sm font-black mb-3"
        >
          電話番号
          <span class="ml-2 px-2 py-1 bg-yellow-400 text-black text-[10px] rounded font-black">
            必須
          </span>
        </label>

        <input
          id="phone"
          name="phone"
          type="tel"
          required
          placeholder="例：090-0000-0000"
          class="w-full bg-black border border-zinc-700 focus:border-yellow-400 focus:outline-none rounded-xl px-5 py-4 text-white placeholder-gray-600 transition"
        >

      </div>


      <!-- EMAIL -->
      <div class="mt-7">

        <label
          for="email"
          class="block text-sm font-black mb-3"
        >
          メールアドレス
          <span class="ml-2 px-2 py-1 bg-yellow-400 text-black text-[10px] rounded font-black">
            必須
          </span>
        </label>

        <input
          id="email"
          name="email"
          type="email"
          required
          placeholder="例：example@example.com"
          class="w-full bg-black border border-zinc-700 focus:border-yellow-400 focus:outline-none rounded-xl px-5 py-4 text-white placeholder-gray-600 transition"
        >

      </div>


      <!-- AREA -->
      <div class="mt-7">

        <label
          for="area"
          class="block text-sm font-black mb-3"
        >
          希望エリア
        </label>

        <select
          id="area"
          name="area"
          class="w-full bg-black border border-zinc-700 focus:border-yellow-400 focus:outline-none rounded-xl px-5 py-4 text-white transition"
        >
          <option value="">選択してください</option>
          <option value="kansai">関西エリア</option>
          <option value="other">その他エリア</option>
          <option value="nationwide">全国どこでも</option>
          <option value="undecided">まだ決まっていない</option>
        </select>

      </div>


      <!-- JOB -->
      <div class="mt-7">

        <label
          for="job"
          class="block text-sm font-black mb-3"
        >
          希望職種
        </label>

        <select
          id="job"
          name="job"
          class="w-full bg-black border border-zinc-700 focus:border-yellow-400 focus:outline-none rounded-xl px-5 py-4 text-white transition"
        >
          <option value="">選択してください</option>
          <option value="staff">店舗スタッフ</option>
          <option value="manager">店舗マネージャー</option>
          <option value="area-manager">エリアマネージャー</option>
          <option value="head-office">本部スタッフ</option>
          <option value="undecided">まだ決まっていない</option>
        </select>

      </div>


      <!-- MESSAGE -->
      <div class="mt-7">

        <label
          for="message"
          class="block text-sm font-black mb-3"
        >
          お問い合わせ内容
        </label>

        <textarea
          id="message"
          name="message"
          rows="6"
          placeholder="ご質問やご希望などがあればご入力ください。"
          class="w-full bg-black border border-zinc-700 focus:border-yellow-400 focus:outline-none rounded-xl px-5 py-4 text-white placeholder-gray-600 transition resize-y"
        ></textarea>

      </div>


      <!-- PRIVACY -->
      <div class="mt-8 p-5 bg-black border border-zinc-800 rounded-xl">

        <p class="text-xs text-gray-500 leading-loose">
          ご入力いただいた個人情報は、
          採用に関するご連絡・お問い合わせへの回答のために利用します。
          内容をご確認のうえ送信してください。
        </p>

      </div>


      <!-- SUBMIT -->
      <div class="mt-8 text-center">

        <button
          type="submit"
          class="w-full sm:w-auto min-w-64 bg-yellow-400 hover:bg-yellow-300 text-black px-10 py-5 rounded-full font-black text-lg transition"
        >
          エントリーする ➔
        </button>

      </div>

    </form>

  </div>

</section>


<!-- ========================================
     NOTE
======================================== -->
<section class="bg-zinc-950 border-t border-zinc-800">

  <div class="max-w-4xl mx-auto px-6 sm:px-8 py-12 sm:py-16">

    <div class="bg-black border border-zinc-800 rounded-2xl p-6 sm:p-8">

      <h3 class="text-lg font-black">
        ご応募について
      </h3>

      <ul class="mt-5 space-y-3 text-sm text-gray-400 leading-loose">
        <li>・応募内容を確認後、担当者よりご連絡します。</li>
        <li>・仕事内容や勤務地についてもお気軽にご相談ください。</li>
        <li>・当グループの運営施設は18歳未満の方のご利用・ご応募はできません。（高校生不可）</li>
      </ul>

    </div>

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