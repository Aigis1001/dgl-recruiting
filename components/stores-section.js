document.addEventListener('DOMContentLoaded', async function () {

  const container = document.getElementById('stores-container');

  if (!container) {
    return;
  }

  /*
   * 9店舗の基本情報
   *
   * 店舗メイン画像
   * → City Heaven TOP
   *
   * 女の子5名
   * → 風俗じゃぱん /girllist/
   *
   * 本館・別館がある場合は、
   * 女の子取得URLを本館と共有する。
   */
  const stores = [
    {
      name: 'The White',
      topUrl: 'https://www.cityheaven.net/hyogo/A2801/A280101/the_white/',
      girlUrl: 'https://fuzoku.jp/fukuharawhite/girllist/'
    },
    {
      name: 'KOBE GOLD',
      topUrl: 'https://www.cityheaven.net/hyogo/A2801/A280102/kobe_gold/',
      girlUrl: 'https://fuzoku.jp/kobegoldff/girllist/'
    },
    {
      name: 'モンテクラブ',
      topUrl: 'https://www.cityheaven.net/hyogo/A2801/A280102/monte/',
      girlUrl: 'https://fuzoku.jp/soapsakura/girllist/'
    },
    {
      name: 'プラチナ本館',
      topUrl: 'https://www.cityheaven.net/fukui/A1801/A180101/hot-heaven/',
      girlUrl: 'https://fuzoku.jp/hot2009/girllist/'
    },
    {
      name: 'プラチナ別館',
      topUrl: 'https://www.cityheaven.net/fukui/A1801/A180101/hien_b/',
      girlUrl: 'https://fuzoku.jp/hot2009/girllist/'
    },
    {
      name: 'ホワイト宮殿',
      topUrl: 'https://www.cityheaven.net/shiga/A2501/A250101/ogoto_otemachi/',
      girlUrl: 'https://fuzoku.jp/ogotoogoto/girllist/'
    },
    {
      name: 'パリス宮殿',
      topUrl: 'https://www.cityheaven.net/shiga/A2501/A250101/ogoto_men/',
      girlUrl: 'https://fuzoku.jp/mensspa/girllist/'
    },
    {
      name: 'ダイヤモンド宮殿',
      topUrl: 'https://www.cityheaven.net/kumamoto/A4301/A430101/marin_premium_k/',
      girlUrl: 'https://fuzoku.jp/Diamondkyuden/girllist/'
    },
    {
      name: 'ダイヤモンド宮殿別館',
      topUrl: 'https://www.cityheaven.net/kumamoto/A4301/A430101/churippu_girls/',
      girlUrl: 'https://fuzoku.jp/Diamondkyuden/girllist/'
    }
  ];


  /*
   * 本番サーバーにAPIが存在する場合のみ
   * 最新データを取得する。
   *
   * GitHub PagesではPHPが動作しないため、
   * API取得に失敗した場合は下記の仮表示へ戻す。
   */
  let liveStores = null;

  try {

    const response = await fetch('/api/stores.php', {
      method: 'GET',
      cache: 'no-store'
    });

    if (response.ok) {
      const data = await response.json();

      if (Array.isArray(data)) {
        liveStores = data;
      }
    }

  } catch (error) {

    console.log(
      'Store live data is not available yet. Using placeholder data.'
    );

  }


  /*
   * 本番サーバーから正常なデータが返ってきた場合
   * → 実データを使用
   *
   * それ以外
   * → 仮データを使用
   */
  const displayStores =
    Array.isArray(liveStores) && liveStores.length > 0
      ? liveStores
      : stores;


  renderStores(displayStores);


  /*
   * 店舗表示
   */
  function renderStores(storeList) {

    let html = `
      <section id="stores" class="stores-section">

        <div class="stores-inner">
    `;


    storeList.forEach(function (store, index) {

      const number =
        String(index + 1).padStart(2, '0');


      /*
       * 店舗メイン画像
       */
      const mainImage = store.mainImage
        ? `
          <img
            src="${store.mainImage}"
            alt="${store.name}"
            class="store-main-image-content"
            loading="lazy"
          >
        `
        : `
          <div class="store-main-image">

            <span class="font-en">
              STORE IMAGE
            </span>

          </div>
        `;


      /*
       * 女の子5名
       */
      let castHtml = '';


      if (
        Array.isArray(store.casts) &&
        store.casts.length > 0
      ) {

        castHtml = store.casts
          .slice(0, 5)
          .map(function (cast) {

            const image = cast.image
              ? `
                <img
                  src="${cast.image}"
                  alt="${cast.name}"
                  class="cast-image-content"
                  loading="lazy"
                >
              `
              : `
                <div class="cast-image">
                  CAST
                </div>
              `;


            return `
              <div class="cast-card">

                ${image}

                <p>
                  ${cast.name}
                </p>

              </div>
            `;

          })
          .join('');


      } else {

        /*
         * API未接続時の仮表示
         */
        castHtml = `

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

        `;
      }


      /*
       * 店舗ブロック
       */
      html += `

        <article class="store-block">

          <div class="store-heading">

            <span class="store-number font-en">
              ${number}
            </span>

            <h2>
              ${store.name}
            </h2>

          </div>


          ${mainImage}


          <div class="cast-list">
            ${castHtml}
          </div>


          <a
            href="${store.topUrl}"
            class="store-link"
            target="_blank"
            rel="noopener noreferrer"
          >
            ${store.name} 詳細を見る ➔
          </a>

        </article>

      `;

    });


    html += `

        </div>

      </section>

    `;


    container.innerHTML = html;

  }

});