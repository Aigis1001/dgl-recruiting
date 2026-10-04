const entryCtaHTML = `
<!-- ENTRY CTA -->
<section class="bg-yellow-400 text-black py-16 sm:py-24">

  <div class="max-w-5xl mx-auto px-5 sm:px-6 text-center">

    <h2 class="text-3xl sm:text-5xl md:text-6xl font-black leading-tight">
      さあ、あなたも「うれしい」の輪へ。
    </h2>

    <p class="mt-5 text-sm sm:text-base font-bold leading-relaxed">
      特別なスキルは必要ありません。<br>
      あなたの笑顔と挑戦意欲をお待ちしています。
    </p>

    <a
      href="pages/contact.html"
      class="inline-flex items-center justify-center mt-8 bg-black text-white px-8 sm:px-12 py-4 sm:py-5 rounded-xl font-black text-base sm:text-lg hover:bg-zinc-800 transition"
    >
      WEBから今すぐエントリー ➔
    </a>

  </div>
</section>
`;

const entryCtaContainer = document.getElementById('entry-cta-container');

if (entryCtaContainer) {
  entryCtaContainer.innerHTML = entryCtaHTML;
}