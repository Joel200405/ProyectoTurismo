document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('destinoCarousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const destinos = document.querySelectorAll('.destino-card');

    let currentIndex = 0;
    const visibleCards = 4; // Cambia este valor si deseas 3 tarjetas visibles, por ejemplo.
    const gapSize = 15; // Tamaño del espacio entre las tarjetas.

    // Función para calcular el ancho exacto de las tarjetas
    function setCardWidths() {
        const containerWidth = carousel.parentElement.offsetWidth;
        const totalGapWidth = gapSize * (visibleCards - 1); // Espacio total entre tarjetas
        const cardWidth = (containerWidth - totalGapWidth) / visibleCards; // Ancho de cada tarjeta

        destinos.forEach((card) => {
            card.style.flex = `0 0 ${cardWidth}px`; // Ajustar el ancho de las tarjetas
        });
    }

    // Mover el carrusel
    function moveCarousel(direction) {
        const cardWidth = destinos[0].offsetWidth + gapSize; // Ancho de cada tarjeta (más el gap)
        const totalCards = destinos.length;
        
        if (direction === 1 && currentIndex < totalCards - visibleCards) {
            currentIndex += visibleCards;
        } else if (direction === -1 && currentIndex > 0) {
            currentIndex -= visibleCards;
        }

        carousel.style.transition = 'transform 0.6s ease-in-out';
        carousel.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
    }

    // Ajustar el ancho de las tarjetas al cargar la página
    setCardWidths();

    // Eventos de clic para mover el carrusel
    nextBtn.addEventListener('click', () => moveCarousel(1));  // Desplazar hacia la derecha
    prevBtn.addEventListener('click', () => moveCarousel(-1)); // Desplazar hacia la izquierda

    // Recalcular el ancho de las tarjetas al redimensionar la ventana
    window.addEventListener('resize', setCardWidths);
});