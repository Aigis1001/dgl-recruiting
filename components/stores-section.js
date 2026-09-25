document.addEventListener('DOMContentLoaded', function () {

  const container = document.getElementById('stores-container');

  if (!container) {
    return;
  }


  /*
   * 店舗情報
   *
   * メイン画像
   * → store-main.jpg
   *
   * キャスト画像
   * → cast-01.jpg ～ cast-05.jpg
   *
   * キャスト名だけ後から変更すればOK。
   */
  const stores = [

    /*
     * 01 The White
     */
    {
      name: 'The White',
      topUrl: 'https://www.cityheaven.net/hyogo/A2801/A280101/the_white/',
      girlUrl: 'https://fuzoku.jp/fukuharawhite/girllist/',
      mainImage: 'assets/images/stores/the-white/store-main.jpg',
      casts: [
        {
          name: 'おもち',
          image: 'assets/images/stores/the-white/cast-01.jpg'
        },
        {
          name: 'みるく',
          image: 'assets/images/stores/the-white/cast-02.jpg'
        },
        {
          name: 'りん',
          image: 'assets/images/stores/the-white/cast-03.jpg'
        },
        {
          name: 'はつこい',
          image: 'assets/images/stores/the-white/cast-04.jpg'
        },
        {
          name: 'ことり',
          image: 'assets/images/stores/the-white/cast-05.jpg'
        }
      ]
    },


    /*
     * 02 KOBE GOLD
     */
    {
      name: 'KOBE GOLD',
      topUrl: 'https://www.cityheaven.net/hyogo/A2801/A280102/kobe_gold/',
      girlUrl: 'https://fuzoku.jp/kobegoldff/girllist/',
      mainImage: 'assets/images/stores/kobe-gold/store-main.jpg',
      casts: [
        {
          name: '誘-いざな-リョウ',
          image: 'assets/images/stores/kobe-gold/cast-01.jpg'
        },
        {
          name: '霧島 明日香',
          image: 'assets/images/stores/kobe-gold/cast-02.jpg'
        },
        {
          name: '小川 陽花里',
          image: 'assets/images/stores/kobe-gold/cast-03.jpg'
        },
        {
          name: '月乃 澪',
          image: 'assets/images/stores/kobe-gold/cast-04.jpg'
        },
        {
          name: '白雪 めいぷる',
          image: 'assets/images/stores/kobe-gold/cast-05.jpg'
        }
      ]
    },


    /*
     * 03 モンテクラブ
     */
    {
      name: 'モンテクラブ',
      topUrl: 'https://www.cityheaven.net/hyogo/A2801/A280102/monte/',
      girlUrl: 'https://fuzoku.jp/soapsakura/girllist/',
      mainImage: 'assets/images/stores/monte-club/store-main.jpg',
      casts: [
        {
          name: '水瀬 すい',
          image: 'assets/images/stores/monte-club/cast-01.jpg'
        },
        {
          name: '月島 らむ',
          image: 'assets/images/stores/monte-club/cast-02.jpg'
        },
        {
          name: '美竹 ゆりあ',
          image: 'assets/images/stores/monte-club/cast-03.jpg'
        },
        {
          name: '朝比奈 梨央',
          image: 'assets/images/stores/monte-club/cast-04.jpg'
        },
        {
          name: '長澤 せな',
          image: 'assets/images/stores/monte-club/cast-05.jpg'
        }
      ]
    },


    /*
     * 04 プラチナ本館
     */
    {
      name: 'プラチナ本館',
      topUrl: 'https://www.cityheaven.net/fukui/A1801/A180101/hot-heaven/',
      girlUrl: 'https://fuzoku.jp/hot2009/girllist/',
      mainImage: 'assets/images/stores/platinum-main/store-main.jpg',
      casts: [
        {
          name: 'えま',
          image: 'assets/images/stores/platinum-main/cast-01.jpg'
        },
        {
          name: 'かほ',
          image: 'assets/images/stores/platinum-main/cast-02.jpg'
        },
        {
          name: 'ありあ',
          image: 'assets/images/stores/platinum-main/cast-03.jpg'
        },
        {
          name: '†˚ʚ大天使るちɞ˚†',
          image: 'assets/images/stores/platinum-main/cast-04.jpg'
        },
        {
          name: 'みみ',
          image: 'assets/images/stores/platinum-main/cast-05.jpg'
        }
      ]
    },


    /*
     * 05 プラチナ別館
     */
    {
      name: 'プラチナ別館',
      topUrl: 'https://www.cityheaven.net/fukui/A1801/A180101/hien_b/',
      girlUrl: 'https://fuzoku.jp/hot2009/girllist/',
      mainImage: 'assets/images/stores/platinum-annex/store-main.jpg',
      casts: [
        {
          name: 'ことね',
          image: 'assets/images/stores/platinum-annex/cast-01.jpg'
        },
        {
          name: 'ちむ',
          image: 'assets/images/stores/platinum-annex/cast-02.jpg'
        },
        {
          name: 'サツキ',
          image: 'assets/images/stores/platinum-annex/cast-03.jpg'
        },
        {
          name: 'まゆ',
          image: 'assets/images/stores/platinum-annex/cast-04.jpg'
        },
        {
          name: 'れいん',
          image: 'assets/images/stores/platinum-annex/cast-05.jpg'
        }
      ]
    },


    /*
     * 06 ホワイト宮殿
     */
    {
      name: 'ホワイト宮殿',
      topUrl: 'https://www.cityheaven.net/shiga/A2501/A250101/ogoto_otemachi/',
      girlUrl: 'https://fuzoku.jp/ogotoogoto/girllist/',
      mainImage: 'assets/images/stores/white-palace/store-main.jpg',
      casts: [
        {
          name: 'みひろ',
          image: 'assets/images/stores/white-palace/cast-01.jpg'
        },
        {
          name: 'おこめ♥',
          image: 'assets/images/stores/white-palace/cast-02.jpg'
        },
        {
          name: 'あり',
          image: 'assets/images/stores/white-palace/cast-03.jpg'
        },
        {
          name: 'まみ',
          image: 'assets/images/stores/white-palace/cast-04.jpg'
        },
        {
          name: 'なこ',
          image: 'assets/images/stores/white-palace/cast-05.jpg'
        }
      ]
    },


    /*
     * 07 パリス宮殿
     */
    {
      name: 'パリス宮殿',
      topUrl: 'https://www.cityheaven.net/shiga/A2501/A250101/ogoto_men/',
      girlUrl: 'https://fuzoku.jp/mensspa/girllist/',
      mainImage: 'assets/images/stores/paris-palace/store-main.jpg',
      casts: [
        {
          name: '美波 かな',
          image: 'assets/images/stores/paris-palace/cast-01.jpg'
        },
        {
          name: 'ドMのめい♡',
          image: 'assets/images/stores/paris-palace/cast-02.jpg'
        },
        {
          name: 'こあ',
          image: 'assets/images/stores/paris-palace/cast-03.jpg'
        },
        {
          name: 'まゆか',
          image: 'assets/images/stores/paris-palace/cast-04.jpg'
        },
        {
          name: 'みかづき女王',
          image: 'assets/images/stores/paris-palace/cast-05.jpg'
        }
      ]
    },


    /*
     * 08 ダイヤモンド宮殿
     */
    {
      name: 'ダイヤモンド宮殿',
      topUrl: 'https://www.cityheaven.net/kumamoto/A4301/A430101/marin_premium_k/',
      girlUrl: 'https://fuzoku.jp/Diamondkyuden/girllist/',
      mainImage: 'assets/images/stores/diamond-palace/store-main.jpg',
      casts: [
        {
          name: 'ゆいり',
          image: 'assets/images/stores/diamond-palace/cast-01.jpg'
        },
        {
          name: 'あお',
          image: 'assets/images/stores/diamond-palace/cast-02.jpg'
        },
        {
          name: 'おこめ',
          image: 'assets/images/stores/diamond-palace/cast-03.jpg'
        },
        {
          name: 'もも',
          image: 'assets/images/stores/diamond-palace/cast-04.jpg'
        },
        {
          name: 'かすみ',
          image: 'assets/images/stores/diamond-palace/cast-05.jpg'
        }
      ]
    },


    /*
     * 09 ダイヤモンド宮殿別館
     */
    {
      name: 'ダイヤモンド宮殿別館',
      topUrl: 'https://www.cityheaven.net/kumamoto/A4301/A430101/churippu_girls/',
      girlUrl: 'https://fuzoku.jp/Diamondkyuden/girllist/',
      mainImage: 'assets/images/stores/diamond-palace-annex/store-main.jpg',
      casts: [
        {
          name: 'らぶ',
          image: 'assets/images/stores/diamond-palace-annex/cast-01.jpg'
        },
        {
          name: 'あいす',
          image: 'assets/images/stores/diamond-palace-annex/cast-02.jpg'
        },
        {
          name: 'ゆあな',
          image: 'assets/images/stores/diamond-palace-annex/cast-03.jpg'
        },
        {
          name: 'あやね',
          image: 'assets/images/stores/diamond-palace-annex/cast-04.jpg'
        },
        {
          name: 'みやび',
          image: 'assets/images/stores/diamond-palace-annex/cast-05.jpg'
        }
      ]
    }

  ];


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
      const mainImage = `
        <img
          src="${store.mainImage}"
          alt="${store.name}"
          class="store-main-image-content"
          loading="lazy"
        >
      `;


      /*
       * キャスト5名
       */
      const castHtml = store.casts
        .slice(0, 5)
        .map(function (cast) {

          return `
            <div class="cast-card">

              <img
                src="${cast.image}"
                alt="${cast.name}"
                class="cast-image-content"
                loading="lazy"
              >

              <p>
                ${cast.name}
              </p>

            </div>
          `;

        })
        .join('');


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


  renderStores(stores);

});