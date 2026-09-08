<?php
$base = $base ?? '../';
?>

<header class="fixed top-0 left-0 w-full z-50 bg-black/90 backdrop-blur-md border-b border-gray-800 transition-all duration-300">

  <div class="max-w-7xl mx-auto px-0 h-16 sm:h-20 flex items-center justify-between">

    <!-- LOGO -->
    <div class="flex-1 flex items-center justify-center sm:justify-start px-4 sm:px-8 h-full">

      <a
        href="<?= $base ?>index.php"
        class="flex items-center justify-center h-full group shrink-0"
      >
        <img
          src="<?= $base ?>assets/images/check-rules-01.png"
          alt="DAISO RECRUIT"
          class="h-8 sm:h-10 w-auto object-contain transition group-hover:opacity-90"
        >
      </a>

    </div>


    <!-- HEADER BUTTONS -->
    <div class="flex h-full w-[60%] sm:w-auto shrink-0">

      <!-- TEL -->
      <a
        href="tel:0120-000-000"
        class="bg-blue-600 hover:bg-blue-500 text-white flex-1 sm:w-28 flex flex-col items-center justify-center px-1 sm:px-2 transition whitespace-nowrap"
      >
        <span class="font-en font-black text-[11px] sm:text-base italic tracking-wider leading-none mb-1">
          TEL
        </span>

        <span class="text-[8px] sm:text-xs font-bold leading-none tracking-tighter sm:tracking-normal">
          電話問合せ
        </span>
      </a>


      <!-- LINE -->
      <a
        href="#"
        class="bg-emerald-600 hover:bg-emerald-500 text-white flex-1 sm:w-28 flex flex-col items-center justify-center px-1 sm:px-2 transition whitespace-nowrap"
      >
        <span class="font-en font-black text-[11px] sm:text-base italic tracking-wider leading-none mb-1">
          LINE
        </span>

        <span class="text-[8px] sm:text-xs font-bold leading-none tracking-tighter sm:tracking-normal">
          LINE相談
        </span>
      </a>


      <!-- ENTRY -->
      <a
        href="<?= $base ?>pages/contact.php"
        class="bg-yellow-400 hover:bg-yellow-300 text-black flex-1 sm:w-28 flex flex-col items-center justify-center px-1 sm:px-2 transition whitespace-nowrap"
      >
        <span class="font-en font-black text-[11px] sm:text-base italic tracking-wider leading-none mb-1">
          ENTRY
        </span>

        <span class="text-[8px] sm:text-xs font-bold leading-none tracking-tighter sm:tracking-normal">
          エントリー
        </span>
      </a>


      <!-- MENU -->
      <button
        type="button"
        onclick="toggleMenu()"
        class="bg-white hover:bg-gray-100 text-black flex-1 sm:w-28 flex flex-col items-center justify-center px-1 sm:px-2 transition cursor-pointer whitespace-nowrap"
      >
        <span class="font-en font-black text-[11px] sm:text-base italic tracking-wider leading-none mb-1">
          MENU
        </span>

        <span class="text-[8px] sm:text-xs font-bold leading-none tracking-tighter sm:tracking-normal">
          メニュー
        </span>
      </button>

    </div>

  </div>

</header>