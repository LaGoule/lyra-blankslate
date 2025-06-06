document.addEventListener("DOMContentLoaded", function () {
    // Fonction pour calculer et appliquer les marges dynamiques
    function initializeSwipers() {
        const rootStyles = getComputedStyle(document.documentElement);
        const widthMaxContent = parseInt(rootStyles.getPropertyValue('--width-max-content').trim());
        const canvasMargin = parseInt(rootStyles.getPropertyValue('--canvas-margin').trim());
        const dynamicMargin = Math.max((window.innerWidth - widthMaxContent) / 2, canvasMargin);

        const swiperContainers = document.querySelectorAll('.swiper-container');

        swiperContainers.forEach((container) => {
            // Désactive Swiper sous 720px
            if (window.innerWidth <= 720) {
                if (container.swiperInstance) {
                    container.swiperInstance.destroy(true, true);
                    container.swiperInstance = null;
                }
                return; // On ne fait rien d'autre sur mobile
            }

            // Si déjà instancié, on met à jour les marges
            if (container.swiperInstance) {
                container.swiperInstance.params.slidesOffsetBefore = dynamicMargin;
                container.swiperInstance.params.slidesOffsetAfter = dynamicMargin;
                container.swiperInstance.update();
            } else {
                // Sinon, on instancie Swiper
                // Calcule slidesOffsetAfter dynamiquement selon la largeur de la fenêtre
                let slidesOffsetAfter;
                if (window.innerWidth < widthMaxContent) {
                    slidesOffsetAfter = dynamicMargin + 160;
                } else {
                    // Par exemple, ajoute 10% de la différence entre window et widthMaxContent
                    slidesOffsetAfter = dynamicMargin + Math.round((window.innerWidth - widthMaxContent) * 0.1);
                }

                container.swiperInstance = new Swiper(container, {
                    slidesPerView: 2.45,
                    slidesPerGroup: 1,
                    spaceBetween: 30,
                    speed: 500,
                    // loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next-team',
                        prevEl: '.swiper-button-prev-team',
                    },
                    slidesOffsetBefore: dynamicMargin,
                    slidesOffsetAfter: dynamicMargin + 160,
                    autoHeight: false,
                    freeMode: false,
                    grabCursor: true,
                    breakpoints: {
                        0: { slidesPerView: 1.45 },
                        580: { slidesPerView: 1.45 },
                        768: { slidesPerView: 1.8 },
                        1024: { slidesPerView: 2.45 },
                        1400: { slidesPerView: 3 },
                        1980: { slidesPerView: 4.3 },
                    },
                });
            }
        });
    }

    // Initialiser Swipers au chargement de la page
    initializeSwipers();

    // Réinitialiser Swipers lors du redimensionnement de la fenêtre
    window.addEventListener('resize', initializeSwipers);
});