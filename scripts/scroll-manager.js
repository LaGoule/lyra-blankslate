function updateNoScroll() {
  const menuOpen = document.querySelector('.main-menu-items.active');
  const popupOpen = document.getElementById('team-popup')?.style.display === 'flex';
  if (menuOpen || popupOpen) {
    document.body.classList.add('no-scroll');
    if (menuOpen && popupOpen) {
      
    }
  } else {
    document.body.classList.remove('no-scroll');
  }
}