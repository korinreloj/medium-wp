const searchBtn = document.querySelector('.fa-search');
const desktopSearchBar = document.querySelector('.header__search');
const mobileSearch = document.querySelector('.search-page__bar');
const mobileSearchBar = document.querySelector('.search-page__search');
const body = document.querySelector('body');
const mobileForm = document.querySelector('.search');
const desktopForm = document.querySelector('#search');

searchBtn.addEventListener('click', checkClicked, false);

function checkClicked(){
	if(mobileSearch.classList.contains('insert-full__styling')
		|| desktopSearchBar.classList.contains('insert-search__desktop')){
		
		mobileSearch.style.height = 0;
		mobileSearch.classList.remove('insert-full__styling');
		body.classList.remove('insert-fixed');
		desktopSearchBar.classList.remove('insert-search__desktop');
	
	}else{
		
		let newHeight = window.innerHeight;
		if(window.innerWidth < 1020){
			mobileSearch.style.height = newHeight + 'px';
			mobileSearch.classList.add('insert-full__styling');
			body.classList.add('insert-fixed');
			mobileSearchBar.focus();
		}else{
			desktopSearchBar.classList.add('insert-search__desktop');
			mobileSearch.style.height = 0;
			mobileSearch.classList.remove('insert-full__styling');
			body.classList.remove('insert-fixed');
			desktopSearchBar.focus();
		}

	}
}

desktopSearchBar.addEventListener('blur', function () {
	mobileSearch.style.height = 0;
	mobileSearch.classList.remove('insert-full__styling');
	body.classList.remove('insert-fixed');
	desktopSearchBar.classList.remove('insert-search__desktop');
});

mobileSearchBar.addEventListener('blur', function () {
	mobileSearch.style.height = 0;
	mobileSearch.classList.remove('insert-full__styling');
	body.classList.remove('insert-fixed');
	desktopSearchBar.classList.remove('insert-search__desktop');
});

mobileForm.addEventListener('submit', function(e){
	e.preventDefault();
	console.log("Hello");
});

desktopForm.addEventListener('submit', function(e){
	e.preventDefault();
	console.log("Hello");
});