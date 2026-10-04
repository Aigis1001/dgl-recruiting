const faqHTML = `
<!-- FAQ -->
<section id="faq" class="bg-zinc-950 py-16 sm:py-24">

  <div class="max-w-5xl mx-auto px-5 sm:px-6">

    <div class="mb-10 sm:mb-14">
      <p class="font-en italic font-black text-yellow-400 text-sm sm:text-base tracking-widest">
        FAQ
      </p>

      <h2 class="text-3xl sm:text-5xl font-black mt-2">
        よくある質問
      </h2>
    </div>


    <div class="space-y-4">

      <details class="group bg-black border border-zinc-800 rounded-xl">
        <summary class="cursor-pointer list-none p-5 sm:p-6 font-black flex items-center justify-between gap-4">
          <span>未経験でも応募可能ですか？</span>
          <span class="text-yellow-400 text-2xl group-open:rotate-45 transition">
            +
          </span>
        </summary>

        <div class="px-5 sm:px-6 pb-6 text-sm text-zinc-400 leading-relaxed">
          はい、85%以上のスタッフが未経験からスタートしています。充実した研修制度がありますのでご安心ください。
        </div>
      </details>


      <details class="group bg-black border border-zinc-800 rounded-xl">
        <summary class="cursor-pointer list-none p-5 sm:p-6 font-black flex items-center justify-between gap-4">
          <span>寮や住み込みのサポートはありますか？</span>
          <span class="text-yellow-400 text-2xl group-open:rotate-45 transition">
            +
          </span>
        </summary>

        <div class="px-5 sm:px-6 pb-6 text-sm text-zinc-400 leading-relaxed">
          完備しております。家具家電付きの寮を用意していますので、遠方からのご応募も大歓迎です。
        </div>
      </details>

    </div>
  </div>
</section>
`;

const faqContainer = document.getElementById('faq-container');

if (faqContainer) {
  faqContainer.innerHTML = faqHTML;
}