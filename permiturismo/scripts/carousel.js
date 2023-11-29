const emblaNode = document.querySelector('.carousel-container');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

const options = { loop: true };
const plugins = [EmblaCarouselAutoplay()];

const embla = EmblaCarousel(emblaNode, options, plugins);

prevBtn.addEventListener('click', () => embla.scrollPrev());
nextBtn.addEventListener('click', () => embla.scrollNext());
