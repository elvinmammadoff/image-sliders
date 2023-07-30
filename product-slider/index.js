
const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
    ride: true,
    interval: 3000,
    pause: false,
})