document.addEventListener('DOMContentLoaded', function () {

  const container = document.getElementById('stores-container');

  if (!container) {
    return;
  }

  const stores = [
    'The White',
    'KOBE GOLD',
    'モンテクラブ',
    'プラチナ本館',
    'プラチナ別館',
    'ホワイト宮殿',
    'パリス宮殿',
    'ダイヤモンド宮殿',
    'ダイヤモンド宮殿別館'
  ];

  let html = `
    <section id="stores" class="stores-section">
      <div class="stores-inner">
  `;

  stores.forEach(function (store, index) {

    const number = String(index + 1).padStart(2, '0');

    html += `
      <article class="store-block">

        <div class="store-heading">
          <span class="store-number font-en">
            ${number}
          </span>

          <h2>
            ${store}
          </h2>
        </div>

        <div class="store-main-image">
          <span class="font-en">
            STORE IMAGE
          </span>
        </div>

        <div class="cast-list">

          <div class="cast-card">
            <div class="cast-image">
              CAST 01
            </div>
            <p>CAST NAME</p>
          </div>

          <div class="cast-card">
            <div class="cast-image">
              CAST 02
            </div>
            <p>CAST NAME</p>
          </div>

          <div class="cast-card">
            <div class="cast-image">
              CAST 03
            </div>
            <p>CAST NAME</p>
          </div>

          <div class="cast-card">
            <div class="cast-image">
              CAST 04
            </div>
            <p>CAST NAME</p>
          </div>

          <div class="cast-card">
            <div class="cast-image">
              CAST 05
            </div>
            <p>CAST NAME</p>
          </div>

        </div>

        <a href="pages/stores.html" class="store-link">
          ${store} 詳細を見る ➔
        </a>

      </article>
    `;

  });

  html += `
      </div>
    </section>
  `;

  container.innerHTML = html;

});