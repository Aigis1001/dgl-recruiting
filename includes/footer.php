<?php
$base = $base ?? '../';
?>

<footer class="bg-black border-t border-zinc-800 py-16">

  <div class="max-w-7xl mx-auto px-6 sm:px-8">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- GROUP -->
      <div>
        <h3 class="font-black text-lg mb-5">
          グループについて
        </h3>

        <ul class="space-y-3 text-sm text-gray-400">

          <li>
            <a
              href="<?= $base ?>index.php#about"
              class="hover:text-yellow-400 transition"
            >
              第一総合レジャーグループとは？
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>pages/about.php"
              class="hover:text-yellow-400 transition"
            >
              会社情報
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>pages/works.php"
              class="hover:text-yellow-400 transition"
            >
              DAISOの一週間
            </a>
          </li>

        </ul>
      </div>


      <!-- RECRUITMENT -->
      <div>
        <h3 class="font-black text-lg mb-5">
          採用情報
        </h3>

        <ul class="space-y-3 text-sm text-gray-400">

          <li>
            <a
              href="<?= $base ?>pages/jobs.php"
              class="hover:text-yellow-400 transition"
            >
              求人を探す
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>pages/stores.php"
              class="hover:text-yellow-400 transition"
            >
              店舗一覧
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>pages/career.php"
              class="hover:text-yellow-400 transition"
            >
              キャリアステップ
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>pages/flow.php"
              class="hover:text-yellow-400 transition"
            >
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

        <ul class="space-y-3 text-sm text-gray-400">

          <li>
            <a
              href="<?= $base ?>index.php#members"
              class="hover:text-yellow-400 transition"
            >
              社員紹介 (INTERVIEW)
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>index.php#video"
              class="hover:text-yellow-400 transition"
            >
              動画で見るDAISO
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>index.php#shindan"
              class="hover:text-yellow-400 transition"
            >
              働き方診断
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>index.php#news"
              class="hover:text-yellow-400 transition"
            >
              新着情報
            </a>
          </li>

          <li>
            <a
              href="<?= $base ?>index.php#faq"
              class="hover:text-yellow-400 transition"
            >
              よくある質問
            </a>
          </li>

        </ul>
      </div>


      <!-- CONTACT -->
      <div>
        <h3 class="font-black text-lg mb-5">
          お問い合わせ・応募
        </h3>

        <ul class="space-y-3 text-sm text-gray-400">

          <li>
            <a
              href="<?= $base ?>pages/contact.php"
              class="hover:text-yellow-400 transition"
            >
              WEBエントリー
            </a>
          </li>

          <li>
            <a
              href="#"
              class="hover:text-yellow-400 transition"
            >
              LINE公式相談
            </a>
          </li>

        </ul>
      </div>

    </div>


    <!-- FOOTER BOTTOM -->
    <div class="mt-14 pt-8 border-t border-zinc-800">

      <p class="text-xs sm:text-sm text-gray-500 leading-relaxed">
        ※当グループの運営施設は18歳未満の方のご利用・ご応募はできません。（高校生不可）
      </p>


      <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

        <p class="text-xs text-gray-600">
          © DAIICHI GENERAL LEISURE GROUP All Rights Reserved.
        </p>

        <div class="flex items-center gap-5 text-xs text-gray-600">

          <a
            href="#"
            class="hover:text-gray-300 transition"
          >
            プライバシーポリシー
          </a>

          <a
            href="#"
            class="hover:text-gray-300 transition"
          >
            運営会社概要
          </a>

        </div>

      </div>

    </div>

  </div>

</footer>