document.addEventListener('DOMContentLoaded', function () {

  /*
   * 現在は最小構成。
   * TOPページの基本動作を確保する。
   */

});


function toggleMenu() {
  const menu = document.getElementById('global-menu');

  if (!menu) {
    return;
  }

  menu.classList.toggle('hidden');
}