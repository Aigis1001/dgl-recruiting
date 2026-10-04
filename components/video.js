/* =========================================================
   VIDEO / DAISO LIFE
========================================================= */

(() => {
  const container = document.getElementById("video-container");

  if (!container) return;


  /* =========================================================
     VIDEO DATA
  ========================================================== */

  const videoData = [
    {
      number: "01",
      path: "assets/video/daiso-video/daiso-video-01.mp4"
    },
    {
      number: "02",
      path: "assets/video/daiso-video/daiso-video-02.mp4"
    },
    {
      number: "03",
      path: "assets/video/daiso-video/daiso-video-03.mp4"
    },
    {
      number: "04",
      path: "assets/video/daiso-video/daiso-video-04.mp4"
    },
    {
      number: "05",
      path: "assets/video/daiso-video/daiso-video-05.mp4"
    }
  ];


  /* =========================================================
     CARD
  ========================================================== */

  const createCard = (video) => {

    return [
      '<div',
      '  class="video-intro-card"',
      `  data-video="${video.path}"`,
      '>',
      '  <video',
      '    muted',
      '    autoplay',
      '    loop',
      '    playsinline',
      '    preload="auto"',
      '    draggable="false"',
      '  >',
      `    <source src="${video.path}" type="video/mp4">`,
      '  </video>',
      '</div>'
    ].join("");

  };


  /*
   * 3セット用意する。
   *
   * 01 02 03 04 05
   * 01 02 03 04 05
   * 01 02 03 04 05
   *
   * 中央セットを表示位置にする。
   */
  const cardHtml = [
    ...videoData,
    ...videoData,
    ...videoData
  ]
    .map(createCard)
    .join("");


  /* =========================================================
     HTML
  ========================================================== */

  const html = [
    '<section id="video" class="video-intro-section">',

    '  <div class="video-intro-inner">',

    '    <div class="video-intro-copy">',

    '      <p class="video-intro-label">',
    '        VIDEO / DAISO LIFE',
    '      </p>',

    '      <h2 class="video-intro-title">',
    '        DAISOで働く<br>',
    '        リアルを動画で。',
    '      </h2>',

    '      <p class="video-intro-description">',
    '        仕事のこと、仲間のこと、<br>',
    '        ここで働く毎日を動画で紹介します。',
    '      </p>',

    '      <div class="video-intro-person-area">',

    '        <img',
    '          class="video-intro-person"',
    '          src="assets/images/video-intro/video-intro-person.png"',
    '          alt=""',
    '        >',

    '        <a',
    '          href="#"',
    '          class="video-intro-more"',
    '        >',
    '          詳しくは<br>コチラ▶',
    '        </a>',

    '      </div>',

    '    </div>',

    '    <div class="video-intro-content">',

    '      <div class="video-intro-slider">',

    '        <div class="video-intro-track">',

    cardHtml,

    '        </div>',
    '      </div>',
    '    </div>',

    '  </div>',

    '  <div',
    '    class="video-intro-modal"',
    '    aria-hidden="true"',
    '  >',

    '    <div class="video-intro-modal-inner">',

    '      <button',
    '        type="button"',
    '        class="video-intro-modal-close"',
    '        aria-label="閉じる"',
    '      >',
    '        ×',
    '      </button>',

    '      <video',
    '        class="video-intro-modal-video"',
    '        controls',
    '        playsinline',
    '      ></video>',

    '    </div>',

    '  </div>',

    '</section>'
  ].join("");


  container.innerHTML = html;


  /* =========================================================
     ELEMENTS
  ========================================================== */

  const section =
    container.querySelector("#video");

  const slider =
    section.querySelector(".video-intro-slider");

  const track =
    section.querySelector(".video-intro-track");

  const cards =
    Array.from(
      section.querySelectorAll(".video-intro-card")
    );

  const videos =
    Array.from(
      section.querySelectorAll(
        ".video-intro-card video"
      )
    );

  const modal =
    section.querySelector(".video-intro-modal");

  const modalVideo =
    section.querySelector(
      ".video-intro-modal-video"
    );

  const modalClose =
    section.querySelector(
      ".video-intro-modal-close"
    );


  /* =========================================================
     VIDEO PLAY
  ========================================================== */

  videos.forEach((video) => {

    video.muted = true;
    video.loop = true;
    video.playsInline = true;

    const play = () => {
      video.play().catch(() => {});
    };

    if (video.readyState >= 2) {
      play();
    } else {
      video.addEventListener(
        "loadeddata",
        play,
        { once: true }
      );
    }

  });


  setTimeout(() => {

    videos.forEach((video) => {
      video.play().catch(() => {});
    });

  }, 300);


  /* =========================================================
     CARD POSITION
  ========================================================== */

  let cardStep = 0;
  let setWidth = 0;

  let currentX = 0;


  const updateMeasurements = () => {

    if (!cards.length) return;

    const firstCard =
      cards[0];

    const secondCard =
      cards[1];

    if (!secondCard) return;

    const firstRect =
      firstCard.getBoundingClientRect();

    const secondRect =
      secondCard.getBoundingClientRect();

    cardStep =
      secondRect.left -
      firstRect.left;

    setWidth =
      cardStep * videoData.length;

  };


  /* =========================================================
     TRACK POSITION
  ========================================================== */

  const setTrackPosition = (
    position,
    animate = false
  ) => {

    track.style.transition =
      animate
        ? "transform 0.35s ease"
        : "none";

    track.style.transform =
      `translate3d(${position}px, 0, 0)`;

  };


  /* =========================================================
     CENTER SET
  ========================================================== */

  const initializePosition = () => {

    updateMeasurements();

    if (!setWidth) return;

    currentX =
      -setWidth;

    setTrackPosition(
      currentX,
      false
    );

  };


  /* =========================================================
     INFINITE POSITION
  ========================================================== */

  const normalizePosition = () => {

    if (!setWidth) return;


    while (
      currentX >
      -setWidth * 0.5
    ) {

      currentX -= setWidth;

    }


    while (
      currentX <
      -setWidth * 1.5
    ) {

      currentX += setWidth;

    }


    setTrackPosition(
      currentX,
      false
    );

  };


  /* =========================================================
     DRAG
  ========================================================== */

  let isDragging = false;

  let startPointerX = 0;

  let startTrackX = 0;

  let hasDragged = false;

  const DRAG_THRESHOLD = 5;


  const startDrag = (event) => {

    if (
      event.pointerType === "mouse" &&
      event.button !== 0
    ) {
      return;
    }


    updateMeasurements();

    isDragging = true;

    hasDragged = false;

    startPointerX =
      event.clientX;

    startTrackX =
      currentX;

    track.style.transition =
      "none";

    slider.classList.add(
      "is-dragging"
    );

    slider.setPointerCapture?.(
      event.pointerId
    );

    if (event.cancelable) {
      event.preventDefault();
    }

  };


  const moveDrag = (event) => {

    if (!isDragging) return;


    const distance =
      event.clientX -
      startPointerX;


    if (
      Math.abs(distance) >
      DRAG_THRESHOLD
    ) {

      hasDragged = true;

    }


    /*
     * ここが今回の重要部分。
     *
     * スクロール位置ではなく、
     * カードを載せたtrackそのものを
     * ポインターと1:1で移動させる。
     */
    currentX =
      startTrackX +
      distance;


    setTrackPosition(
      currentX,
      false
    );


    /*
     * ドラッグ中も1周分ずれたら
     * 同じ見た目の位置へ瞬間移動。
     */
    normalizePosition();


    /*
     * normalize後の位置を、
     * 次のmousemoveの基準として保持する。
     */
    startPointerX =
      event.clientX;

    startTrackX =
      currentX;


    if (event.cancelable) {
      event.preventDefault();
    }

  };


  const endDrag = (event) => {

    if (!isDragging) return;


    isDragging = false;


    slider.releasePointerCapture?.(
      event.pointerId
    );

    slider.classList.remove(
      "is-dragging"
    );


    snapToNearestCard();

  };


  /* =========================================================
     SNAP
  ========================================================== */

  const snapToNearestCard = () => {

    if (!cardStep) {
      updateMeasurements();
    }

    if (!cardStep) return;


    /*
     * 現在のtrack位置から、
     * 一番近いカード位置へ丸める。
     */
    const snappedX =
      Math.round(
        currentX /
        cardStep
      ) *
      cardStep;


    currentX =
      snappedX;


    setTrackPosition(
      currentX,
      true
    );


    setTimeout(() => {

      normalizePosition();

    }, 380);

  };


  /* =========================================================
     POINTER EVENTS
  ========================================================== */

  slider.addEventListener(
    "pointerdown",
    startDrag
  );

  slider.addEventListener(
    "pointermove",
    moveDrag
  );

  slider.addEventListener(
    "pointerup",
    endDrag
  );

  slider.addEventListener(
    "pointercancel",
    endDrag
  );


  /* =========================================================
     MODAL
  ========================================================== */

  const openModal = (videoPath) => {

    if (!videoPath) return;

    modalVideo.src =
      videoPath;

    modal.classList.add(
      "is-open"
    );

    modal.setAttribute(
      "aria-hidden",
      "false"
    );

    modalVideo.currentTime = 0;

    modalVideo.play().catch(() => {});

  };


  const closeModal = () => {

    modal.classList.remove(
      "is-open"
    );

    modal.setAttribute(
      "aria-hidden",
      "true"
    );

    modalVideo.pause();

    modalVideo.removeAttribute(
      "src"
    );

    modalVideo.load();

  };


  cards.forEach((card) => {

    card.addEventListener(
      "click",
      () => {

        if (hasDragged) {

          hasDragged = false;

          return;

        }


        const videoPath =
          card.dataset.video;

        if (!videoPath) return;

        openModal(videoPath);

      }
    );

  });


  modalClose.addEventListener(
    "click",
    closeModal
  );


  modal.addEventListener(
    "click",
    (event) => {

      if (
        event.target === modal
      ) {

        closeModal();

      }

    }
  );


  document.addEventListener(
    "keydown",
    (event) => {

      if (
        event.key === "Escape" &&
        modal.classList.contains(
          "is-open"
        )
      ) {

        closeModal();

      }

    }
  );


  /* =========================================================
     RESIZE
  ========================================================== */

  window.addEventListener(
    "resize",
    () => {

      updateMeasurements();

      initializePosition();

    }
  );


  /* =========================================================
     INITIALIZE
  ========================================================== */

  requestAnimationFrame(() => {

    requestAnimationFrame(() => {

      initializePosition();

    });

  });

})();