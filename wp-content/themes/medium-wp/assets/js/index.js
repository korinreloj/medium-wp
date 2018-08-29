// import './feed-sidebar';
// import { header } from 'header';

var header = document.querySelector('.header');
var footer = document.querySelector('.footer');

var scroll = 0;
window.addEventListener('scroll', function()  {

	if (window.scrollY > scroll) {
		header.classList.add('is-hidden');
		footer.classList.add('is-hidden');
	} else {
		header.classList.remove('is-hidden');
		footer.classList.remove('is-hidden');
	}

	scroll = window.scrollY;
});