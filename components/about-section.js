const aboutHTML = `
<!-- ABOUT -->
<section id="about" class="bg-black border-b border-zinc-800 py-16 sm:py-24">

  <div class="max-w-7xl mx-auto px-5 sm:px-6">

    <div class="mb-10 sm:mb-14">
      <p class="font-en italic font-black text-yellow-400 text-sm sm:text-base tracking-widest">
        ABOUT DAISO
      </p>

      <h2 class="text-3xl sm:text-5xl md:text-6xl font-black mt-2">
        第一総合レジャーグループとは？
      </h2>
    </div>


    <div class="grid md:grid-cols-2 gap-5 sm:gap-6">

      <a
        href="pages/about.html"
        class="group relative bg-zinc-900 border border-zinc-800 p-8 sm:p-12 rounded-2xl overflow-hidden transition flex flex-col justify-between min-h-[320px]"
      >
        <div class="absolute inset-0 z-0">
          <img
            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80"
            alt=""
            class="w-full h-full object-cover opacity-30 group-hover:scale-105 transition duration-500"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/80 to-transparent"></div>
        </div>

        <div class="relative z-10">
          <span class="font-en text-xs font-bold text-yellow-400 tracking-widest uppercase block mb-2">
            ABOUT DAISO
          </span>

          <h3 class="text-2xl sm:text-3xl font-black mb-4 group-hover:text-yellow-400 transition">
            第一総合レジャーグループとは？
          </h3>

          <p class="text-gray-300 text-xs sm:text-sm leading-relaxed mb-6">
            お客様・スタッフ・パートナー全員が「笑顔」と「喜び」を共有できる環境づくりを目指す総合レジャー企業。
            業界のイメージと未来を私たちが本気で変えていきます。
          </p>
        </div>

        <div class="relative z-10 font-bold text-xs text-yellow-400 flex items-center gap-2">
          詳しくはコチラ ▶
        </div>
      </a>


      <a
        href="pages/data.html"
        class="group relative bg-zinc-900 border border-zinc-800 p-8 sm:p-12 rounded-2xl overflow-hidden transition flex flex-col justify-between min-h-[320px]"
      >
        <div class="absolute inset-0 z-0">
          <img
            src="assets/images/about/data-bg.jpg"
            alt=""
            class="w-full h-full object-cover opacity-30 group-hover:scale-105 transition duration-500"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/80 to-transparent"></div>
        </div>

        <div class="relative z-10">
          <span class="font-en text-xs font-bold text-yellow-400 tracking-widest uppercase block mb-2">
            DAISO DATA
          </span>

          <h3 class="text-2xl sm:text-3xl font-black mb-4 group-hover:text-yellow-400 transition">
            数字から見る、私たちの現在地。
          </h3>

          <p class="text-gray-300 text-xs sm:text-sm leading-relaxed mb-6">
            店舗数やスタッフ数、働き方に関するデータなど、
            数字を通してグループの今を紹介します。
            知っているようで知らないDAISOの姿を、
            さまざまな角度からご覧ください。
          </p>
        </div>

        <div class="relative z-10 font-bold text-xs text-yellow-400 flex items-center gap-2">
          詳しくはコチラ ▶
        </div>
      </a>

    </div>
  </div>
</section>
`;

const aboutContainer = document.getElementById('about-container');

if (aboutContainer) {
  aboutContainer.innerHTML = aboutHTML;
}