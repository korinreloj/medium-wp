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