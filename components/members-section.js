const membersHTML = `
<!-- MEMBERS -->
<section id="members" class="members-v3">

  <div class="members-v3-inner">

    <!-- MEMBERS HEADER -->
    <div class="members-v3-header">

      <div class="members-v3-heading">

        <p class="members-v3-en font-en">
          INTERVIEW
        </p>

        <h2 class="members-v3-title">
          社員紹介
        </h2>

        <p class="members-v3-lead">
          現場で活躍する先輩社員のリアルな声と成長ストーリー
        </p>

      </div>

      <a
        href="pages/member-detail.html"
        class="members-v3-more"
      >
        <span>紹介ページはこちら▶</span>
      </a>

    </div>


    <!-- MEMBER LIST -->
    <div class="members-v3-grid">


      <!-- MEMBER 01 -->
      <a
        href="pages/member-detail.html?id=1"
        class="members-v3-card members-v3-card-01"
      >

        <div class="members-v3-visual">

          <div class="members-v3-scene members-v3-scene-normal">

            <div class="members-v3-circle"></div>
            <div class="members-v3-dots"></div>
            <div class="members-v3-star">✦</div>
            <div class="members-v3-line"></div>

          </div>

          <div class="members-v3-scene members-v3-scene-hover">

            <div class="members-v3-circle"></div>
            <div class="members-v3-dots"></div>
            <div class="members-v3-star">✦</div>
            <div class="members-v3-line"></div>

          </div>


          <div class="members-v3-number">
            01
          </div>


          <img
            src="assets/images/members/member-01-normal.png"
            alt="店舗マネージャー"
            class="members-v3-person members-v3-person-normal"
          >

          <img
            src="assets/images/members/member-01-hover.png"
            alt="店舗マネージャー"
            class="members-v3-person members-v3-person-hover"
          >


          <div class="members-v3-role">
            STORE MANAGER
          </div>

        </div>


        <div class="members-v3-content">

          <div class="members-v3-name-row">

            <h3>
              高橋 恒一
            </h3>

            <span>
              店舗マネージャー
            </span>

          </div>

          <p>
            未経験からのスタートでしたが、サポート体制のおかげで1年半で店長へ昇格できました。
          </p>

          <div class="members-v3-read">
            INTERVIEW
            <span>→</span>
          </div>

        </div>

      </a>


      <!-- MEMBER 02 -->
      <a
        href="pages/member-detail.html?id=2"
        class="members-v3-card members-v3-card-02"
      >

        <div class="members-v3-visual">

          <div class="members-v3-scene members-v3-scene-normal">

            <div class="members-v3-circle"></div>
            <div class="members-v3-dots"></div>
            <div class="members-v3-star">✦</div>
            <div class="members-v3-line"></div>

          </div>

          <div class="members-v3-scene members-v3-scene-hover">

            <div class="members-v3-circle"></div>
            <div class="members-v3-dots"></div>
            <div class="members-v3-star">✦</div>
            <div class="members-v3-line"></div>

          </div>


          <div class="members-v3-number">
            02
          </div>


          <img
            src="assets/images/members/member-02-normal.png"
            alt="エリアマネージャー"
            class="members-v3-person members-v3-person-normal"
          >

          <img
            src="assets/images/members/member-02-hover.png"
            alt="エリアマネージャー"
            class="members-v3-person members-v3-person-hover"
          >


          <div class="members-v3-role">
            AREA MANAGER
          </div>

        </div>


        <div class="members-v3-content">

          <div class="members-v3-name-row">

            <h3>
              山本 直樹
            </h3>

            <span>
              エリアマネージャー
            </span>

          </div>

          <p>
            チーム全員で目標に向かい、「うれしい」を共有できる最高の職場環境です。
          </p>

          <div class="members-v3-read">
            INTERVIEW
            <span>→</span>
          </div>

        </div>

      </a>


      <!-- MEMBER 03 -->
      <a
        href="pages/member-detail.html?id=3"
        class="members-v3-card members-v3-card-03"
      >

        <div class="members-v3-visual">

          <div class="members-v3-scene members-v3-scene-normal">

            <div class="members-v3-circle"></div>
            <div class="members-v3-dots"></div>
            <div class="members-v3-star">✦</div>
            <div class="members-v3-line"></div>

          </div>

          <div class="members-v3-scene members-v3-scene-hover">

            <div class="members-v3-circle"></div>
            <div class="members-v3-dots"></div>
            <div class="members-v3-star">✦</div>
            <div class="members-v3-line"></div>

          </div>


          <div class="members-v3-number">
            03
          </div>


          <img
            src="assets/images/members/member-03-normal.png"
            alt="フロアスタッフ"
            class="members-v3-person members-v3-person-normal"
          >

          <img
            src="assets/images/members/member-03-hover.png"
            alt="フロアスタッフ"
            class="members-v3-person members-v3-person-hover"
          >


          <div class="members-v3-role">
            FLOOR STAFF
          </div>

        </div>


        <div class="members-v3-content">

          <div class="members-v3-name-row">

            <h3>
              森川 美咲
            </h3>

            <span>
              フロアスタッフ
            </span>

          </div>

          <p>
            自分の提案がすぐに店舗づくりに活かされるやりがいを毎日感じています。
          </p>

          <div class="members-v3-read">
            INTERVIEW
            <span>→</span>
          </div>

        </div>

      </a>

    </div>

  </div>

</section>
`;

const membersContainer = document.getElementById('members-container');

if (membersContainer) {
  membersContainer.innerHTML = membersHTML;
}