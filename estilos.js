// script.js
let currentSlide = 0;

function showSlide(index) {
  const slides = document.querySelectorAll('.carousel-item');
  if (index >= slides.length) {
    currentSlide = 0;
  } else if (index < 0) {
    currentSlide = slides.length - 1;
  } else {
    currentSlide = index;
  }
  const offset = -currentSlide * 100;
  document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
  showSlide(currentSlide + 1);
}

function prevSlide() {
  showSlide(currentSlide - 1);
}

// Optional: Auto-play functionality
setInterval(nextSlide, 3000);

let scrollAmount = 0;

        function scrollRight() {
            const carousel = document.getElementById('carousel');
            const maxScroll = carousel.scrollWidth - carousel.clientWidth;
            if (scrollAmount < maxScroll) {
                scrollAmount += 220;
                carousel.style.transform = `translateX(-${scrollAmount}px)`;
            }
        }

        function scrollLeft() {
            const carousel = document.getElementById('carousel');
            if (scrollAmount > 0) {
                scrollAmount -= 220;
                carousel.style.transform = `translateX(-${scrollAmount}px)`;
            }
        }