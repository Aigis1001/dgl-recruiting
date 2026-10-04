const headerHTML = `
<!-- HEADER -->
<header class="fixed top-0 left-0 right-0 z-50 bg-transparent">

  <!-- =========================
       PC HEADER
       ========================= -->
  <div class="hidden sm:flex w-full h-36 lg:h-40 items-stretch">

    <!-- 左半分：ロゴ -->
    <div class="w-1/2 h-full flex items-center justify-start px-6 lg:px-10">
      <a
        href="index.html"
        class="h-full flex items-center"
      >
        <img
          src="assets/images/check-rules-01.png"
          alt="DAISO RECRUIT"
          class="block max-w-full max-h-[116px] lg:max-h-[128px] w-auto h-auto object-contain"
        >
      </a>
    </div>

    <!-- 右半分：3ボタン -->
    <div class="w-1/2 h-full flex items-center justify-end gap-2 pr-4">

      <!-- LINE -->
      <a
        href="#"
        class="w-28 h-20 flex flex-col items-center justify-center rounded-xl bg-emerald-500 hover:bg-emerald-400 transition text-white leading-none shadow-sm"
      >
        <span class="font-en font-black italic text-3xl whitespace-nowrap">
          LINE
        </span>
        <span class="mt-1 text-xs font-extrabold whitespace-nowrap">
          LINE相談
        </span>
      </a>

      <!-- ENTRY -->
      <a
        href="pages/contact.html"
        class="w-28 h-20 flex flex-col items-center justify-center rounded-xl bg-yellow-400 hover:bg-yellow-300 transition text-black leading-none shadow-sm"
      >
        <span class="font-en font-black italic text-3xl whitespace-nowrap">
          ENTRY
        </span>
        <span class="mt-1 text-xs font-extrabold whitespace-nowrap">
          エントリー
        </span>
      </a>

      <!-- MENU -->
      <button
        type="button"
        onclick="toggleMenu()"
        class="w-28 h-20 flex flex-col items-center justify-center rounded-xl bg-white hover:bg-zinc-200 transition text-black leading-none shadow-sm"
      >
        <span class="font-en font-black italic text-3xl whitespace-nowrap">
          MENU
        </span>
        <span class="mt-1 text-xs font-extrabold whitespace-nowrap">
          メニュー
        </span>
      </button>

    </div>
  </div>


  <!-- =========================
       SMARTPHONE HEADER
       ========================= -->

  <!-- 上部：ロゴのみ -->
  <div class="sm:hidden w-full h-24 bg-transparent flex items-center justify-center px-4">

    <a
      href="index.html"
      class="w-full h-full flex items-center justify-center"
    >
      <img
        src="assets/images/check-rules-01.png"
        alt="DAISO RECRUIT"
        class="block max-w-full max-h-[82px] w-auto h-auto object-contain"
      >
    </a>

  </div>


  <!-- 下部：スマホ専用固定ボタン -->
  <div
    class="sm:hidden !fixed !bottom-0 !left-0 !right-0 z-[9999] w-full h-16 flex"
  >

    <!-- TEL -->
    <a
      href="tel:0120-000-000"
      class="flex-1 min-w-0 h-full flex flex-col items-center justify-center bg-blue-600 active:bg-blue-500 text-white leading-none"
    >
      <span class="font-en font-black italic text-2xl whitespace-nowrap">
        TEL
      </span>
      <span class="mt-1 text-[11px] font-bold whitespace-nowrap">
        電話問合せ
      </span>
    </a>

    <!-- LINE -->
    <a
      href="#"
      class="flex-1 min-w-0 h-full flex flex-col items-center justify-center bg-emerald-500 active:bg-emerald-400 text-white leading-none"
    >
      <span class="font-en font-black italic text-2xl whitespace-nowrap">
        LINE
      </span>
      <span class="mt-1 text-[11px] font-bold whitespace-nowrap">
        LINE相談
      </span>
    </a>

    <!-- ENTRY -->
    <a
      href="pages/contact.html"
      class="flex-1 min-w-0 h-full flex flex-col items-center justify-center bg-yellow-400 active:bg-yellow-300 text-black leading-none"
    >
      <span class="font-en font-black italic text-2xl whitespace-nowrap">
        ENTRY
      </span>
      <span class="mt-1 text-[11px] font-bold whitespace-nowrap">
        エントリー
      </span>
    </a>

    <!-- MENU -->
    <button
      type="button"
      onclick="toggleMenu()"
      class="flex-1 min-w-0 h-full flex flex-col items-center justify-center bg-white active:bg-zinc-200 text-black leading-none"
    >
      <span class="font-en font-black italic text-2xl whitespace-nowrap">
        MENU
      </span>
      <span class="mt-1 text-[11px] font-bold whitespace-nowrap">
        メニュー
      </span>
    </button>

  </div>

</header>
`;

const headerContainer = document.getElementById('header-container');

if (headerContainer) {
  headerContainer.innerHTML = headerHTML;
}