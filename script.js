document.addEventListener('DOMContentLoaded', () => {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const carouselContainer = document.querySelector('.carousel-container');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const numVisibleItems = 3;
    let currentIndex = 0;

    if (carouselContainer) {
        const scrollAmount = carouselContainer.offsetWidth / 4;

        // Mostra apenas as imagens visíveis inicialmente
        updateCarousel();

        // Adiciona o evento click para rolar para trás
        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = carouselItems.length - numVisibleItems;
            }
            updateCarousel();
        });

        // Adiciona o evento click para rolar para frente
        nextBtn.addEventListener('click', () => {
            if (currentIndex < carouselItems.length - numVisibleItems) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
        });

        // Atualiza a exibição do carrossel
        function updateCarousel() {
            for (let i = 0; i < carouselItems.length; i++) {
                if (i >= currentIndex && i < currentIndex + numVisibleItems) {
                    carouselItems[i].style.display = 'block';
                } else {
                    carouselItems[i].style.display = 'none';
                }
            }
        }
    }

    // Configuração do menu
    const menuToggle = document.getElementById('mobile-menu');
    const sideNav = document.getElementById('side-nav');
    const closeBtn = document.getElementById('close-btn');

    if (menuToggle && sideNav) {
        // Adiciona o evento click para abrir o menu
        menuToggle.addEventListener('click', () => {
            sideNav.classList.toggle('active');
        });

        // Adiciona o evento click para fechar o menu
        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                sideNav.classList.remove('active');
            });
        }
    }
});
