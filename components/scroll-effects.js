document.addEventListener('DOMContentLoaded', function () {

  const targets = document.querySelectorAll(
    '.reveal-pop, .reveal-up, .reveal-left, .reveal-right'
  );

  if (!targets.length) {
    return;
  }

  const observer = new IntersectionObserver(
    function (entries) {

      entries.forEach(function (entry) {

        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add('is-visible');

        observer.unobserve(entry.target);

      });

    },
    {
      threshold: 0.18,
      rootMargin: '0px 0px -5% 0px'
    }
  );

  targets.forEach(function (target) {
    observer.observe(target);
  });

});