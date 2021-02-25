$(() => {

	//On Scroll Functionality
	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
		windowTop > 100 ? $('ul').css('top', '100px') : $('ul').css('top', '160px');
	});


	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.link').addClass('black') : $('.link').removeClass('black');
	});

	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.hvr-underline-reveal').addClass('hvr-underline-reveal-before') : $('.hvr-underline-reveal').removeClass('hvr-underline-reveal-before');
	});

	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.top-div').addClass('top-div-sec') : $('.top-div').removeClass('top-div-sec');
	});

	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.main-logo').addClass('block-none') : $('.main-logo').removeClass('block-none');
	});
	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.socials').addClass('invert') : $('.socials').removeClass('invert');
	});



	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.logo_black').addClass('block') : $('.logo_black').removeClass('block');
	});

	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.tss-label_pic').addClass('black') : $('.tss-label_pic').removeClass('black');
	});

	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.tss-label').addClass('top_another') : $('.tss-label').removeClass('top_another');
	});

	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.phone_link').addClass('black') : $('.phone_link').removeClass('black');
	});

	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 20 ? $('.tss--close').addClass('white') : $('.tss--close').removeClass('white');
	});


	//Click Logo To Scroll To Top
	$('#logo').on('click', () => {
		$('html,body').animate({
			scrollTop: 0
		}, 500);
	});

	//Smooth Scrolling Using Navigation Menu
	$('a.anim').on('click', function (e) {
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 100
		}, 700);
		e.preventDefault();
	});

	var swiper = new Swiper('.front_slider', {
		effect: 'fade',
		loop: true,
		/*autoplay: {
			delay: 10000,
			disableOnInteraction: false,
		},*/
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},

	});

	var swiper = new Swiper('.reviews_slider', {
		spaceBetween: 25,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.myswiper-button-next',
			prevEl: '.myswiper-button-prev',
		},
	});

	var swiper = new Swiper('.afbe_slider', {
		direction: 'vertical',
		spaceBetween: 25,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},

		navigation: {
			nextEl: '.myswiper-button-next2',
			prevEl: '.myswiper-button-prev2',
		},

	});

	var show = true;
	var countbox = ".benefits__inner";
	$(window).on("scroll load resize", function () {
		if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
		var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
		var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
		var w_height = $(window).height(); // Высота окна браузера
		var d_height = $(document).height(); // Высота всего документа
		var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
		if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
			$('.animate_count').css('opacity', '1');
			$('.animate_count').spincrement({
				thousandSeparator: "",
				duration: 2200
			});

			show = false;
		}
	});



	(function ($) {
		$('.accordion > li:eq(0) a').addClass('active').next().slideDown();

		$('.accordion a').click(function (j) {
			var dropDown = $(this).closest('li').find('p');

			$(this).closest('.accordion').find('p').not(dropDown).slideUp();

			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			} else {
				$(this).closest('.accordion').find('a.active').removeClass('active');
				$(this).addClass('active');
			}

			dropDown.stop(false, true).slideToggle();

			j.preventDefault();
		});
	})(jQuery);

	$.mask.definitions['9'] = '';
	$.mask.definitions['n'] = '[0-9]';
	$(function () {
		$("#phone_input").mask("+998 (nn) nnn-nn-nn");
	});
});


$(function () {
	$("#gallery2").unitegallery({
		gallery_theme: "tiles",
		tiles_type: "justified",
		tile_enable_shadow: true,
		tile_show_link_icon: true,
		theme_gallery_padding: 0,
		tiles_justified_space_between: 25,
		tiles_justified_row_height: 200,
		tile_enable_image_effect: true,
		tile_image_effect_reverse: true,
		tile_image_effect_type: "blur",
	});

	var config = {
		elementID: 'touchSideSwipe',
		elementWidth: 300, //px
		elementMaxWidth: 0.8, // *100%
		sideHookWidth: 44, //px
		moveSpeed: 0.5, //sec
		opacityBackground: 0.5,
		shiftForStart: 50, // px
		windowMaxWidth: 1024, // px
	}
	var touchSideSwipe = new TouchSideSwipe(config);

});

// (function () {
// 	lightGallery(document.getElementById('lightgallery'), {
// 		apager: true,
// 		thumbnail: true
// 	});
// })();
// var isTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;

// Hide controls if isTouch is true 
// $('#lightgallery').lightGallery({
// 	controls: isTouch ? false : true
// });

