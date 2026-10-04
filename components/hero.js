const heroHTML = `
<!-- HERO -->
<section class="relative h-screen min-h-[500px] sm:min-h-[650px] flex items-center justify-center overflow-hidden pt-16 sm:pt-20">

  <video
    class="absolute inset-0 w-full h-full object-cover bg-black opacity-0 transition-opacity duration-300"
    autoplay
    muted
    loop
    playsinline
    onloadeddata="this.classList.remove('opacity-0')"
  >
    <source src="assets/video/hero-bg.mp4" type="video/mp4">
  </video>

  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-black/60"></div>

  <div class="relative z-10 w-full max-w-7xl mx-auto px-5 sm:px-6 text-center">

    <h1 class="font-en italic font-black text-yellow-400 text-4xl sm:text-6xl md:text-7xl lg:text-8xl leading-none tracking-tight">
      BEYOND ENTERTAINMENT.
    </h1>

    <p class="text-white text-base sm:text-xl md:text-2xl font-black italic mt-4">
      遊びの、その先へ。
    </p>

    <div class="mt-8">
      <p class="text-lg sm:text-2xl font-black leading-relaxed">
        まだ知らない「面白い」を、仕事にする。
      </p>

      <p class="mt-3 text-sm sm:text-base text-zinc-200 leading-relaxed">
        変わり続ける時代の中で、<br class="sm:hidden">
        新しい遊び方と働き方をつくっていく。
      </p>
    </div>

  </div>

</section>
`;

const heroContainer = document.getElementById('hero-container');

if (heroContainer) {
  heroContainer.innerHTML = heroHTML;
}