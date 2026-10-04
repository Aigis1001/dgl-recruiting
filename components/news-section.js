const newsHTML = `
<!-- NEWS -->
<section id="news" class="bg-black border-b border-zinc-800 py-16 sm:py-24">

  <div class="max-w-7xl mx-auto px-5 sm:px-6">

    <div class="mb-10 sm:mb-14">
      <p class="font-en italic font-black text-yellow-400 text-sm sm:text-base tracking-widest">
        NEWS
      </p>

      <h2 class="text-3xl sm:text-5xl md:text-6xl font-black mt-2">
        新着情報
      </h2>
    </div>


    <div class="border-t border-zinc-800">

      <div class="py-6 border-b border-zinc-800 flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-6">
        <time class="font-en font-black text-zinc-400 shrink-0">
          2026.08.15
        </time>

        <span class="inline-flex self-start bg-yellow-400 text-black px-3 py-1 text-xs font-black">
          採用情報
        </span>

        <p class="font-bold">
          2026年度 中途・新卒採用のエントリー受付を開始しました。
        </p>
      </div>


      <div class="py-6 border-b border-zinc-800 flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-6">
        <time class="font-en font-black text-zinc-400 shrink-0">
          2026.07.01
        </time>

        <span class="inline-flex self-start bg-emerald-400 text-black px-3 py-1 text-xs font-black">
          プレス
        </span>

        <p class="font-bold">
          新規店舗オープンのお知らせとオープニングスタッフ募集
        </p>
      </div>

    </div>
  </div>
</section>
`;

const newsContainer = document.getElementById('news-container');

if (newsContainer) {
  newsContainer.innerHTML = newsHTML;
}