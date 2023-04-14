window.onload = function () {
	window.addEventListener('scroll', function (e) {
		if (window.pageYOffset > 100) {
			document.querySelector("header").classList.add('is-scrolling');
		} else {
			document.querySelector("header").classList.remove('is-scrolling');
		}
	});

	const menu_btn = document.querySelector('.hamburger');
	const mobile_menu = document.querySelector('.nav_menu nav');
	
	menu_btn.addEventListener('click', function () {
		if(!menu_btn.classList.contains('is-active')){
			menu_btn.classList.toggle('is-active');
			mobile_menu.style.transform = 'translateY(0%)';
		}else{
			menu_btn.classList.remove('is-active');
			mobile_menu.style.transform = 'translateY(-130%)';
		}
		
	});
}
