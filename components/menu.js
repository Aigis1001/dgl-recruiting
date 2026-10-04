const menuHTML = `
<!-- MENU -->
<div
  id="menuOverlay"
  class="fixed inset-0 z-[60] hidden bg-black/95 backdrop-blur-lg overflow-y-auto"
>
  <div class="min-h-full flex flex-col">

    <div class="h-16 sm:h-20 px-5 sm:px-6 flex items-center justify-between border-b border-zinc-800">
      <img
        src="assets/images/check-rules-01.png"
        alt="DAISO RECRUIT"
        class="h-8 sm:h-10 w-auto"
      >

      <button
        type="button"
        onclick="toggleMenu()"
        class="bg-white text-black px-5 py-3 font-black"
      >
        CLOSE ×
      </button>
    </div>


    <nav class="max-w-5xl w-full mx-auto px-5 sm:px-6 py-10">

      <div class="grid sm:grid-cols-2 gap-4">

        <a href="index.html" class="menu-link">
          TOP
        </a>

        <a href="#about" class="menu-link">
          第一総合レジャーグループとは？
        </a>

        <a href="pages/jobs.html" class="menu-link">
          求人を探す
        </a>

        <a href="pages/stores.html" class="menu-link">
          店舗一覧
        </a>

        <a href="pages/career.html" class="menu-link">
          キャリアステップ
        </a>

        <a href="pages/flow.html" class="menu-link">
          選考の流れ
        </a>

        <a href="pages/works.html" class="menu-link">
          DAISOの一週間
        </a>

        <a href="#members" class="menu-link">
          社員紹介
        </a>

        <a href="#video" class="menu-link">
          動画で見るDAISO
        </a>

        <a href="#shindan" class="menu-link">
          働き方診断
        </a>

        <a href="#news" class="menu-link">
          新着情報
        </a>

        <a href="#faq" class="menu-link">
          よくある質問
        </a>

      </div>


      <a
        href="pages/contact.html"
        class="block mt-8 bg-yellow-400 text-black text-center px-6 py-5 rounded-xl font-black text-lg"
      >
        WEBからエントリー ➔
      </a>

    </nav>

  </div>
</div>
`;

const menuContainer = document.getElementById('menu-container');

if (menuContainer) {
  menuContainer.innerHTML = menuHTML;
}