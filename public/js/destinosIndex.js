document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('destinoCarousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const destinos = document.querySelectorAll('.destino-card');
    
    let currentIndex = 0;
    const visibleCards = 3; // Número fijo de tarjetas visibles
    const intervalTime = 5000; // Tiempo en milisegundos (5 segundos)
    let autoSlideInterval; // Variable para el intervalo automático

    // Función para calcular el ancho de cada tarjeta
    function setCardWidths() {
        const containerWidth = carousel.parentElement.offsetWidth;
        const cardWidth = (containerWidth - (15 * (visibleCards - 1))) / visibleCards; // Restar los gaps
        destinos.forEach((card) => {
            card.style.flex = `0 0 ${cardWidth}px`; // Ajustar el ancho de las tarjetas
        });
    }

    // Mover el carrusel
    function moveCarousel(direction) {
        const cardWidth = destinos[0].offsetWidth + 15; // Ancho de cada tarjeta (más el gap)
        const totalCards = destinos.length;

        // Si estamos moviendo hacia la derecha
        if (direction === 1) {
            if (currentIndex < totalCards - visibleCards) {
                currentIndex += 1;
            } else {
                currentIndex = 0; // Regresar al inicio cuando llegue al final
            }
        }
        // Si estamos moviendo hacia la izquierda
        else if (direction === -1) {
            if (currentIndex > 0) {
                currentIndex -= 1;
            } else {
                currentIndex = totalCards - visibleCards; // Ir al final cuando estamos al inicio
            }
        }

        // Mover el carrusel
        carousel.style.transition = 'transform 0.6s ease-in-out';
        carousel.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
    }

    // Ajustar el ancho de las tarjetas al cargar la página
    setCardWidths();

    // Función para reiniciar el intervalo automático
    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(() => moveCarousel(1), intervalTime);
    }

    // Eventos de clic para mover el carrusel manualmente
    nextBtn.addEventListener('click', () => {
        moveCarousel(1); // Desplazar hacia la derecha
        resetAutoSlide(); // Reiniciar el temporizador
    });

    prevBtn.addEventListener('click', () => {
        moveCarousel(-1); // Desplazar hacia la izquierda
        resetAutoSlide(); // Reiniciar el temporizador
    });

    // Recalcular el ancho de las tarjetas al redimensionar la ventana
    window.addEventListener('resize', setCardWidths);

    // Iniciar el movimiento automático al cargar la página
    autoSlideInterval = setInterval(() => moveCarousel(1), intervalTime);
});
