const sliderTrack = document.querySelector('#containerProduct');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

// State to track the current scroll position
let currentPosition = 0;

const slide = (direction) => {
  const sliderWidth = sliderTrack.offsetWidth; // Width of the visible slider area
  const totalWidth = sliderTrack.scrollWidth; // Total width of all cards

  const moveDistance = sliderWidth; // Move by the width of 2 cards

  if (direction === 'next') {
    // Move forward only if there's more content to slide
    if (currentPosition + moveDistance < totalWidth) {
      currentPosition += moveDistance;
    }
  } else if (direction === 'prev') {
    // Move backward only if we're not at the start
    if (currentPosition - moveDistance >= 0) {
      currentPosition -= moveDistance;
    }
  }

  // Move the slider track to the new position
  sliderTrack.style.transform = `translateX(-${currentPosition}px)`;
};

// Event listeners for navigation buttons
prevBtn.addEventListener('click', () => slide('prev'));
nextBtn.addEventListener('click', () => slide('next'));
