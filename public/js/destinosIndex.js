let currentIndex = 0;
const destinos = document.querySelectorAll('.destino-display .card');
const destinosPorPagina = 4;

function mostrarDestinos() {
    const wrapper = document.querySelector('.destino-wrapper');
    const cardWidth = destinos[0].offsetWidth + 30; // Ajustamos con el gap
    const offset = -currentIndex * cardWidth;
    wrapper.style.transform = `translateX(${offset}px)`;
}

function moveDestinos(direction) {
    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = 0;
    } else if (currentIndex > destinos.length - destinosPorPagina) {
        currentIndex = destinos.length - destinosPorPagina;
    }

    mostrarDestinos();
}

mostrarDestinos();

