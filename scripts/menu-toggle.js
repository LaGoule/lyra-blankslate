document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const menuItems = document.querySelector(".main-menu-items");
    const icon = menuToggle.querySelector(".icon");

    // Fonction pour basculer l'état du menu
    function toggleMenu() {
        const isActive = menuItems.classList.toggle("active");
        menuToggle.setAttribute("aria-expanded", isActive);
        icon.setAttribute("name", isActive ? "close-outline" : "menu-outline");
    }

    // Fonction pour réinitialiser le menu
    function resetMenu() {
        menuItems.classList.remove("active");
        menuToggle.setAttribute("aria-expanded", false);
        icon.setAttribute("name", "menu-outline");
    }

    // Ouvrir/fermer le menu au clic sur le bouton
    menuToggle.addEventListener("click", toggleMenu);

    // Réinitialiser le menu si la fenêtre est redimensionnée au-delà de 1200px
    window.addEventListener("resize", function () {
        if (window.innerWidth > 1200) {
            resetMenu();
        }
    });

    // Fermer le menu si on clique en dehors
    document.addEventListener("click", function (event) {
        if (!menuToggle.contains(event.target) && !menuItems.contains(event.target)) {
            resetMenu();
        }
    });
});