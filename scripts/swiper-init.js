document.addEventListener("DOMContentLoaded", function () {
    // Fonction pour calculer et appliquer les marges dynamiques
    function initializeSwipers() {
        // Récupérer les variables CSS
        const rootStyles = getComputedStyle(document.documentElement);
        const widthMaxContent = parseInt(rootStyles.getPropertyValue('--width-max-content').trim());
        const canvasMargin = parseInt(rootStyles.getPropertyValue('--canvas-margin').trim());
        
        // Calculer les marges dynamiques
        const dynamicMargin = Math.max((window.innerWidth - widthMaxContent) / 2, canvasMargin);

        // Trouver tous les conteneurs Swiper sur la page
        const swiperContainers = document.querySelectorAll('.swiper-container');

        // Initialiser chaque Swiper
        swiperContainers.forEach((container, index) => {
            // Vérifier si une instance Swiper existe déjà pour ce conteneur
            if (container.swiperInstance) {
                // Mettre à jour les marges dynamiques
                container.swiperInstance.params.slidesOffsetBefore = dynamicMargin;
                container.swiperInstance.params.slidesOffsetAfter = dynamicMargin;
                container.swiperInstance.update(); // Met à jour Swiper
            } else {
                // Initialiser une nouvelle instance Swiper
                container.swiperInstance = new Swiper(container, {
                    slidesPerView: 2.45, // Nombre de cartes visibles
                    spaceBetween: 30, // Espace entre les cartes
                    navigation: {
                        nextEl: '.swiper-button-next-team', // Bouton suivant
                        prevEl: '.swiper-button-prev-team', // Bouton précédent
                    },
                    slidesOffsetBefore: dynamicMargin, // Appliquer la marge dynamique à gauche
                    slidesOffsetAfter: dynamicMargin, // Appliquer la marge dynamique à droite
                    
                    autoHeight: false,// Centrer les diapositives
                    
                    freeMode: false, // Permet un défilement libre
                    grabCursor: true, // Ajoute un curseur "main" pour indiquer que le glisser est possible

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
                            slidesPerView: 3,
                        },
                        1980: {
                            slidesPerView: 4.3,
                        },
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