
// LET
let devtools_menu = document.querySelector('.devtools-menu');
let devtools_containerLink = document.querySelector('.devtools-containerLink');
let devtools_text = document.querySelector('.devtools-text');

let devtools_els = document.querySelectorAll('.devtools-menu .container-el .el');

let devtools_size = document.querySelector('.devtools-size');

let devtools_scrollposition = document.querySelector('.devtools-scrollposition');

let devtools_reset = document.querySelector('.devtools-menu .container-el .el[data-option="reset"]');
let devtools_html = document.querySelector('html');
let devtools_grid = document.querySelector('.devtools-grid');

let devtools_containerLinkBtn = document.querySelector('.devtools-containerLink .btn');
let devtools_containerLinkContainerEl = document.querySelector('.devtools-containerLink .container-el');

let devtools_btn_grid = document.querySelector('.devtools-menu .container-el .el[data-option="grid"]');
let devtools_btn_element = document.querySelector('.devtools-menu .container-el .el[data-option="element"]');
let devtools_btn_section = document.querySelector('.devtools-menu .container-el .el[data-option="section"]');
let devtools_btn_screensize = document.querySelector('.devtools-menu .container-el .el[data-option="screensize"]');
let devtools_btn_scrollposition = document.querySelector('.devtools-menu .container-el .el[data-option="scrollposition"]');


// ACTIVE
document.addEventListener('keydown', function(event){
	if(event.key === "Escape" || event.key === "d"){
		devtools_menu.classList.toggle('mode-active');
		devtools_containerLink.classList.toggle('mode-active');
		devtools_text.classList.toggle('style-active');
	}
	if (devtools_menu.classList.contains('mode-active')) {
		if(event.key === "r"){
			document.location.reload();
		}
		if(event.key === "t"){
			window.scrollTo({ top: 0, behavior: 'smooth' });
		}
		if(event.key === "b"){
			window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
		}
	}
	
});

devtools_els.forEach(function (el) {
	dataAttribute = el.getAttribute('data-option');
    el.addEventListener('click', function () {
		if (!dataAttribute === 'reset') {
			el.toggleClass('style-active');
		}

		el.classList.toggle('style-active');
    });
	
});


// SCREEN SIZE
function devtools_func_screensize(){
	let screenHeight = window.innerHeight;
	let screenWidth = window.innerWidth;
	let screensize_text = "H=" + screenHeight + ' X ' + "W=" + screenWidth;

	devtools_size.innerHTML = screensize_text;
}
window.addEventListener('resize', function(){
	devtools_func_screensize();
});
window.addEventListener('load', function(){
	devtools_func_screensize();
});


// SCROLL POSITION
function devtools_func_scrollposition(){
	let scrollValue = window.scrollY;
	let documentHeight = document.documentElement.clientHeight;
	let calcPercent = Math.round(scrollValue*100/ (documentHeight - window.innerHeight));
	let scrollposition_text = scrollValue+'px ' + calcPercent + '%';

	
	devtools_scrollposition.innerHTML = scrollposition_text;
}
window.addEventListener('scroll', function(){
	devtools_func_scrollposition();
});
window.addEventListener('load', function(){
	devtools_func_scrollposition();
})


// ACTIONS
devtools_reset.addEventListener('click', function () {
	devtools_els.forEach(function (el) {
		el.classList.remove('style-active');
	});
	devtools_html.classList.remove('mode-section');
	devtools_html.classList.remove('mode-element');

	devtools_size.classList.remove('style-active');

	devtools_grid.classList.remove('mode-active');

	devtools_scrollposition.classList.remove('style-active');

	devtools_containerLink.classList.remove('style-active');
	devtools_containerLinkBtn.classList.remove('style-active');
	devtools_containerLinkContainerEl.classList.remove('style-active');
})
devtools_btn_grid.addEventListener('click', function () {
	devtools_grid.classList.toggle('mode-active');
})
devtools_btn_element.addEventListener('click', function () {
	devtools_html.classList.toggle('mode-element');
})
devtools_btn_section.addEventListener('click', function () {
	devtools_html.classList.toggle('mode-section');
})
devtools_btn_screensize.addEventListener('click', function () {
	devtools_size.classList.toggle('style-active');
})
devtools_btn_scrollposition.addEventListener('click', function () {
	devtools_scrollposition.classList.toggle('style-active');
})

devtools_containerLinkBtn.addEventListener('click', function () {
	if(devtools_containerLinkBtn.classList.contains('style-active')){
		devtools_containerLinkBtn.classList.remove('style-active');
		devtools_containerLinkContainerEl.classList.remove('style-active');
	} else {
		devtools_containerLinkBtn.classList.add('style-active');
		devtools_containerLinkContainerEl.classList.add('style-active');
	}
})





