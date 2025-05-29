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
  const toggleBtn = document.getElementById('menu-toggle');

  document.querySelectorAll('.team-member-card').forEach(card => {
    card.addEventListener('click', function () {
      
      // Vérification de l'existence de l'image
      const imgElement = card.querySelector('.team-member-card-image img');
      
      if (imgElement) {
        // Si l'image existe, on affiche l'image
        popupImg.src = imgElement.src;
        popupImg.alt = card.querySelector('.team-member-card-info-name').textContent;
        popupImg.style.display = ''; // Assurez-vous que l'image est visible
      } else {
        // Si pas d'image, on masque l'élément img et on affiche le placeholder
        popupImg.style.display = 'none';
        
        // On peut insérer un div de placeholder avant l'image
        if (!popup.querySelector('.team-no-image')) {
          const placeholder = document.createElement('div');
          placeholder.className = 'team-popup-no-image';
          placeholder.style = 'width: 100%; height: 100%; background: #e0e0e0; display: flex; align-items: center; justify-content: center;';
          placeholder.innerHTML = '<span style="color: #aaa; font-size: 1.2rem;">No image</span>';
          popupImg.parentNode.insertBefore(placeholder, popupImg);
        }
      }

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
      toggleBtn.style.display = 'none';
      updateNoScroll();
      // Change logo to back arrow
    if (logo) {
      logo.innerHTML = `
        <a href="#" id="team-back-arrow" class="back-arrow" title="Back to team">
            <img src="${window.themeUrl}/assets/svg/back_arrow.svg" alt="Back" />
        </a>
        `;

        // Ajoute l'eventListener juste après l'injection
        document.getElementById('team-back-arrow').addEventListener('click', function(e) {
            e.preventDefault();
            popup.style.display = 'none';
            toggleBtn.style.display = 'flex';
            updateNoScroll();
            // Restore logo
            logo.innerHTML = `
            <a href="/" title="Lyra" rel="home">
                <img class="main-logo" width="15.72px" height="31.06px" src="${window.themeUrl}/assets/svg/lyra_02_symbol_white_rgb.svg" alt="Symbol" style="margin-right: 16px;">
                <img class="main-logo" width="103px" height="31.06px" src="${window.themeUrl}/assets/svg/lyra_01_logotype_white_rgb.svg" alt="Lyra" itemprop="logo">
            </a>
            `;
            // Scroll to team section if it exists
            const teamSection = document.getElementById('team-section');
            if (teamSection) {
                teamSection.scrollIntoView({ behavior: 'smooth' });
            }
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