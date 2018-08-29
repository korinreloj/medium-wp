
// sticky navbar
const categoryNav = document.querySelector('.category-nav');
const categoryNavTop = categoryNav.offsetTop;

window.addEventListener('scroll', () => {
  if (window.scrollY >= categoryNavTop) {
    categoryNav.style.position = 'fixed';
    categoryNav.style.top = 0;
    categoryNav.style.zIndex = 1;
  } else {
    categoryNav.style.position = '';
    categoryNav.style.top = '';
    categoryNav.style.zIndex = '';
  }
});



//carousel navbar

// get all the necessary variables needed
const prevBtn = document.querySelector('.btn-left');
const nextBtn = document.querySelector('.btn-right');
const trackContainer = document.querySelector('.category-nav__links-ctr');
const track = document.querySelector('.category-nav__track');

const containerWidth = trackContainer.getBoundingClientRect().width;


// compute the width of the track
const items = Array.from(track.querySelectorAll('.item'));
let newTrackWidth = 0;
items.forEach(item => {
  newTrackWidth += item.getBoundingClientRect().width;
});

track.style.width = `${newTrackWidth}px`;

const bound = newTrackWidth - containerWidth;

// add click listener to prev and next btn
prevBtn.addEventListener('click', e => {
  e.preventDefault();
  goToPrev();
});

nextBtn.addEventListener('click', e => {
  e.preventDefault();
  goToNext();
});

function goToPrev() {
  if (getTrackOffset() < 0) {
    let offset = (getTrackOffset() + containerWidth) > 0 ? 0 : (getTrackOffset() + containerWidth);
    track.style.transform = `translateX(${offset}px)`; 
  }
}

function goToNext() {
  let offset = getTrackOffset() - containerWidth;
 
  if (Math.abs(offset) < bound) {
    track.style.transform = `translateX(${offset}px)`;
  } else {
    track.style.transform = `translateX(-${bound}px)`;
  }
}

function getTrackOffset() {
  const style = window.getComputedStyle(track);
  const matrix = new WebKitCSSMatrix(style.webkitTransform);
  return matrix.m41;
}