const scrollSnapCard = document.querySelector('.scroll-snap-card');
const slidesContainer = scrollSnapCard.querySelector('.slide');
const slideContent = slidesContainer.innerHTML;

function cloneSlides() {
  const newSlide = document.createElement('div');
  newSlide.classList.add('slide', 'green');
  newSlide.innerHTML = slideContent;
  slidesContainer.appendChild(newSlide);
}

scrollSnapCard.addEventListener('scroll', function () {
  if (scrollSnapCard.scrollTop + scrollSnapCard.clientHeight >= slidesContainer.offsetHeight) {
    cloneSlides();
  }
});

// Clone slides initially to enable endless scroll
cloneSlides();
