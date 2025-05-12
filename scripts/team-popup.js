document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth > 720) return; // Mobile only

  const popup = document.getElementById('team-popup');
  const popupImg = popup.querySelector('.team-popup-image');
  const popupName = popup.querySelector('.team-popup-name');
  const popupRole = popup.querySelector('.team-popup-role');
  const popupBio = popup.querySelector('.team-popup-bio');
  const popupLinkedin = popup.querySelector('.team-popup-linkedin');
  const closeBtn = popup.querySelector('.team-popup-close');
  const logo = document.querySelector('.site-logo');

  document.querySelectorAll('.team-member-card').forEach(card => {
    card.addEventListener('click', function () {
      popupImg.src = card.querySelector('.team-member-card-image img').src;
      popupImg.alt = card.querySelector('.team-member-card-info-name').textContent;
      popupName.textContent = card.querySelector('.team-member-card-info-name').textContent;
      popupRole.textContent = card.querySelector('.team-member-card-info-role').textContent;
      popupBio.innerHTML = card.querySelector('.team-member-card-info-bio').innerHTML;
      const linkedin = card.querySelector('.linkedin-link');
      if (linkedin) {
        popupLinkedin.href = linkedin.href;
        popupLinkedin.style.display = '';
      } else {
        popupLinkedin.style.display = 'none';
      }
      popup.style.display = 'flex';
      document.body.classList.add('no-scroll'); // Désactive le scroll
      // Change logo to back arrow
    if (logo) {
      logo.innerHTML = `
        <a href="#" id="team-back-arrow" class="back-arrow" title="Back to team" rel="home">
            <img src="${window.themeUrl}/assets/svg/back_arrow.svg" alt="Back" />
        </a>
        `;

        // Ajoute l'eventListener juste après l'injection
        document.getElementById('team-back-arrow').addEventListener('click', function(e) {
            e.preventDefault();
            popup.style.display = 'none';
            document.body.classList.remove('no-scroll'); // Réactive le scroll
            // Restore logo
            logo.innerHTML = `
            <a href="/" title="Lyra" rel="home">
                <img class="main-logo" width="15.72px" height="31.06px" src="${window.themeUrl}/assets/svg/lyra_02_symbol_white_rgb.svg" alt="Symbol" style="margin-right: 16px;">
                <img class="main-logo" width="103px" height="31.06px" src="${window.themeUrl}/assets/svg/lyra_01_logotype_white_rgb.svg" alt="Lyra" itemprop="logo">
            </a>
            `;
        });
    }
    });
  });

  closeBtn.addEventListener('click', function () { 
    popup.style.display = 'none';
    // Restore logo
    if (logo) logo.innerHTML = `
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
            <img class="main-logo" width="15.72px" height="31.06px" src="${window.themeUrl}/assets/svg/lyra_02_symbol_white_rgb.svg" alt="Symbol" style="margin-right: 16px;">
            <img class="main-logo" width="103px" height="31.06px" src="${window.themeUrl}/assets/svg/lyra_01_logotype_white_rgb.svg" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" itemprop="logo">
        </a>
    `;
    });
});