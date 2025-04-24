document.addEventListener("DOMContentLoaded", function () {
    const heroDecoration = document.querySelector(".full-width-text");
    const parent = heroDecoration.parentElement;
  
    function adjustFontSize() {
      const parentWidth = parent.offsetWidth * 1.0035; // Légèrement plus grand pour éviter un débordement
      let fontSize = 10; // Taille de police initiale
      heroDecoration.style.fontSize = `${fontSize}px`;
  
      // Augmente la taille de la police jusqu'à ce que le texte dépasse la largeur du parent
      while (heroDecoration.offsetWidth < parentWidth && fontSize < 500) {
        fontSize++;
        heroDecoration.style.fontSize = `${fontSize}px`;
      }
  
      // Réduit légèrement pour éviter un débordement
      //heroDecoration.style.fontSize = `${fontSize - 0}px`;

      // Décalage vers la gauche pour corriger le débordement
      const offset = 6; // Ajustez cette valeur si nécessaire
      heroDecoration.style.transform = `translateX(-${offset}px)`;
    }
  
    // Ajuste la taille de la police au chargement et lors du redimensionnement de la fenêtre
    adjustFontSize();
    window.addEventListener("resize", adjustFontSize);
  });