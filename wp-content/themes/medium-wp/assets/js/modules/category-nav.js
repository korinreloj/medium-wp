
// sticky navbar
const categoryNav = document.querySelector('.category-nav');
const categoryNavTop = categoryNav.offsetTop;

window.addEventListener('scroll', () => {
  if (window.scrollY >= categoryNavTop) {
    //add the following styles when scrolling down
    categoryNav.style.position = 'fixed';
    categoryNav.style.top = 0;
    categoryNav.style.zIndex = 1;
    categoryNav.style.borderBottom = '1px solid #e6e6e6';
  } else {
    //remove when scrollY is 0
    categoryNav.style.position = '';
    categoryNav.style.top = '';
    categoryNav.style.zIndex = '';
    categoryNav.style.borderBottom = '';
  }
});


//carousel navbar

// get all the necessary variables needed
const prevBtn = document.querySelector('.btn-left');
const nextBtn = document.querySelector('.btn-right');
const trackContainer = document.querySelector('.category-nav__links-ctr');
const track = document.querySelector('.category-nav__track');

let containerWidth = trackContainer.getBoundingClientRect().width;

// compute the width of the track
const items = Array.from(track.querySelectorAll('.item'));
let newTrackWidth = 0;
items.forEach(item => {
  newTrackWidth += item.getBoundingClientRect().width;
});

//new width of track is sum of all indiv. tracks
track.style.width = `${newTrackWidth}px`;

let bound = newTrackWidth - containerWidth;

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

  //value is negative so that it will move to the left
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

//when window is resized
window.addEventListener('resize', () => {
  //get new width
  containerWidth = trackContainer.getBoundingClientRect().width;
  
  bound = newTrackWidth - containerWidth;
  
  //go back to 0 position
  track.style.transform = 'translateX(0)';
});

