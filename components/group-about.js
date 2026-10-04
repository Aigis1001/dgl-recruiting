const groupAboutHTML = `
<!-- GROUP ABOUT -->
<section id="group-about" class="group-about-section">

  <!-- 背景アニメーション -->
  <div class="group-about-bg-motion" aria-hidden="true"></div>

  <div class="group-about-inner">

    <div class="group-about-copy">

      <p class="group-about-en font-en">BEYOND ENTERTAINMENT.</p>

      <h2>
        まだ、エンターテインメントに<br class="sm:hidden">
        できることがある。
      </h2>

      <div class="group-about-line"></div>

      <p class="group-about-lead">
        楽しさをつくる。<br>
        その先まで、仕事にする。
      </p>

      <p class="group-about-text">
        第一総合レジャーグループは、<br>
        レジャーをもっと自由に、もっと面白くするために、<br>
        変化を恐れず新しい価値をつくり続けるグループです。
        <br><br>
        目の前のサービスだけではなく、<br>
        そこで生まれる時間や体験までデザインする。<br>
        そんな仕事の可能性を、私たちは追いかけています。
      </p>

      <a href="pages/about.html" class="group-about-more">
        <span>詳しくはコチラ▶</span>
      </a>

    </div>

    <div class="group-about-visual">
      <img
        src="assets/images/about/about-person.png"
        alt=""
        class="group-about-person"
      >
    </div>

  </div>
</section>
`;

const groupAboutContainer = document.getElementById('group-about-container');

if (groupAboutContainer) {
  groupAboutContainer.innerHTML = groupAboutHTML;
}