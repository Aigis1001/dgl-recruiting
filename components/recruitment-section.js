const recruitmentHTML = `
<!-- RECRUITMENT -->
<section id="findjob" class="recruit-v2">

  <!-- SECTION TITLE -->
  <div class="recruit-v2-header">

    <p class="recruit-v2-en">
      RECRUITMENT &amp; CONTENTS
    </p>

    <h2 class="recruit-v2-title">
      採用情報・コンテンツ
    </h2>

  </div>


  <!-- CARDS -->
  <div class="recruit-v2-grid">

    <!-- 01 求人を探す -->
    <div class="recruit-v2-card recruit-v2-card-yellow">
      <div class="recruit-v2-text">
        <span class="recruit-v2-label">JOB LIST</span>
        <h3 class="recruit-v2-heading">求人を探す</h3>
        <p class="recruit-v2-description">
          自分に合った仕事を<br>
          見つけよう。
        </p>

        <a href="pages/jobs.html" class="recruit-v2-arrow">
          <span class="recruit-v2-arrow-mark">→</span>
          詳しく見る
        </a>
      </div>

      <div class="recruit-v2-person">
        <img src="assets/images/recruit/recruit-person-01.png" alt="">
      </div>
    </div>

    <!-- 02 キャリアパス -->
    <div class="recruit-v2-card recruit-v2-card-blue">
      <div class="recruit-v2-text">
        <span class="recruit-v2-label">CAREER PATH</span>
        <h3 class="recruit-v2-heading">キャリアパス</h3>
        <p class="recruit-v2-description">
          あなたの未来を<br>
          一緒に描きましょう。
        </p>

        <a href="pages/career.html" class="recruit-v2-arrow">
          <span class="recruit-v2-arrow-mark">→</span>
          詳しく見る
        </a>
      </div>

      <div class="recruit-v2-person">
        <img src="assets/images/recruit/recruit-person-02.png" alt="">
      </div>
    </div>

    <!-- 03 選考の流れ -->
    <div class="recruit-v2-card recruit-v2-card-pink">
      <div class="recruit-v2-text">
        <span class="recruit-v2-label">FLOW</span>
        <h3 class="recruit-v2-heading">選考の流れ</h3>
        <p class="recruit-v2-description">
          応募から内定までの<br>
          ステップをご紹介します。
        </p>

        <a href="pages/flow.html" class="recruit-v2-arrow">
          <span class="recruit-v2-arrow-mark">→</span>
          詳しく見る
        </a>
      </div>

      <div class="recruit-v2-person">
        <img src="assets/images/recruit/recruit-person-03.png" alt="">
      </div>
    </div>

    <!-- 04 DAISOの一週間 -->
    <div class="recruit-v2-card recruit-v2-card-green">
      <div class="recruit-v2-text">
        <span class="recruit-v2-label">DAISO WEEK</span>
        <h3 class="recruit-v2-heading">DAISOの一週間</h3>
        <p class="recruit-v2-description">
          働く環境や1週間の<br>
          スケジュールをご紹介します。
        </p>

        <a href="pages/works.html" class="recruit-v2-arrow">
          <span class="recruit-v2-arrow-mark">→</span>
          詳しく見る
        </a>
      </div>

      <div class="recruit-v2-person">
        <img src="assets/images/recruit/recruit-person-04.png" alt="">
      </div>
    </div>

  </div>

</section>
`;

const recruitmentContainer = document.getElementById('recruitment-container');

if (recruitmentContainer) {
  recruitmentContainer.innerHTML = recruitmentHTML;
}