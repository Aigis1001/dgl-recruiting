const footerHTML = `
<!-- FOOTER -->
<footer class="bg-black text-white">

  <div class="max-w-7xl mx-auto px-5 sm:px-6 py-12 sm:py-16">

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- GROUP -->
      <div>
        <h3 class="font-black text-lg mb-5">
          グループについて
        </h3>

        <ul class="space-y-3 text-sm text-zinc-400">
          <li>
            <a href="#about" class="hover:text-yellow-400 transition">
              第一総合レジャーグループとは？
            </a>
          </li>

          <li>
            <a href="pages/about.html" class="hover:text-yellow-400 transition">
              会社情報
            </a>
          </li>

          <li>
            <a href="pages/works.html" class="hover:text-yellow-400 transition">
              DAISOの一週間
            </a>
          </li>
        </ul>
      </div>


      <!-- RECRUIT -->
      <div>
        <h3 class="font-black text-lg mb-5">
          採用情報
        </h3>

        <ul class="space-y-3 text-sm text-zinc-400">
          <li>
            <a href="pages/jobs.html" class="hover:text-yellow-400 transition">
              求人を探す
            </a>
          </li>

          <li>
            <a href="pages/stores.html" class="hover:text-yellow-400 transition">
              店舗一覧
            </a>
          </li>

          <li>
            <a href="pages/career.html" class="hover:text-yellow-400 transition">
              キャリアステップ
            </a>
          </li>

          <li>
            <a href="pages/flow.html" class="hover:text-yellow-400 transition">
              選考の流れ
            </a>
          </li>
        </ul>
      </div>


      <!-- CONTENTS -->
      <div>
        <h3 class="font-black text-lg mb-5">
          コンテンツ
        </h3>

        <ul class="space-y-3 text-sm text-zinc-400">
          <li>
            <a href="#members" class="hover:text-yellow-400 transition">
              社員紹介
            </a>
          </li>

          <li>
            <a href="#video" class="hover:text-yellow-400 transition">
              動画で見るDAISO
            </a>
          </li>

          <li>
            <a href="#shindan" class="hover:text-yellow-400 transition">
              働き方診断
            </a>
          </li>

          <li>
            <a href="#news" class="hover:text-yellow-400 transition">
              新着情報
            </a>
          </li>

          <li>
            <a href="#faq" class="hover:text-yellow-400 transition">
              よくある質問
            </a>
          </li>
        </ul>
      </div>


      <!-- ENTRY -->
      <div>
        <h3 class="font-black text-lg mb-5">
          お問い合わせ・応募
        </h3>

        <ul class="space-y-3 text-sm text-zinc-400">
          <li>
            <a href="pages/contact.html" class="hover:text-yellow-400 transition">
              WEBエントリー
            </a>
          </li>

          <li>
            <a href="#" class="hover:text-yellow-400 transition">
              LINE公式相談
            </a>
          </li>
        </ul>
      </div>

    </div>


    <div class="mt-12 pt-8 border-t border-zinc-800">

      <p class="text-xs text-zinc-500 leading-relaxed">
        ※当グループの運営施設は18歳未満の方のご利用・ご応募はできません。（高校生不可）
      </p>

      <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

        <p class="font-en text-xs text-zinc-600">
          © DAIICHI GENERAL LEISURE GROUP All Rights Reserved.
        </p>

        <div class="flex gap-5 text-xs text-zinc-500">
          <a href="#" class="hover:text-white transition">
            PRIVACY POLICY
          </a>

          <a href="#" class="hover:text-white transition">
            COMPANY
          </a>
        </div>

      </div>

    </div>

  </div>
</footer>
`;

const footerContainer = document.getElementById('footer-container');

if (footerContainer) {
  footerContainer.innerHTML = footerHTML;
}