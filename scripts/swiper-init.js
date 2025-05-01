document.addEventListener("DOMContentLoaded", function () {
    // Récupérer les variables CSS
    const rootStyles = getComputedStyle(document.documentElement);
    const widthMaxContent = parseInt(rootStyles.getPropertyValue('--width-max-content').trim());
    const canvasMargin = parseInt(rootStyles.getPropertyValue('--canvas-margin').trim());

    // Calculer les marges dynamiques
    // Doit être recalculé à chaque fois que la fenêtre est redimensionnée
    const dynamicMargin = Math.max((window.innerWidth - widthMaxContent) / 2, canvasMargin);
    

    // Initialiser Swiper
    new Swiper('.swiper-container', {
        slidesPerView: 2.45, // Nombre de cartes visibles
        spaceBetween: 30, // Espace entre les cartes
        slidesOffsetBefore: dynamicMargin, // Appliquer la marge dynamique à gauche
        slidesOffsetAfter: dynamicMargin, // Appliquer la marge dynamique à droite

        freeMode: false, // Permet un défilement libre
        grabCursor: true, // Ajoute un curseur "main" pour indiquer que le glisser est possible
        // mousewheel: true, // Active le défilement avec la molette de la souris
        // shortSwipes: false, // Désactive le glissement court

        breakpoints: {
            0: {
                slidesPerView: 1.45, 
            },
            580: {
                slidesPerView: 1.45, 
            },
            768: {
                slidesPerView: 1.8, 
            },
            1024: {
                slidesPerView: 2.45,
            },
            1400: {
                slidesPerView: 2.8,
            },
            1980: {
                slidesPerView: 4.3,
            },
        },
    });
});