$(document).ready(function(){
	if( $('body').hasClass('home') ){ scrollMenu(); }

	mobileMenu();
	mobileSetActiveCardService();
	setHeaderBackground();
	setNavigation();
	slickCarousel();

	function mobileMenu(){
		$('.icon-mobile-menu').on('click', function() {
			var $menu = $('.menu');

			$menu.find('a').on('click', function(){ $menu.removeClass('open'); });
			$menu.toggleClass('open');
		});
	}

	function mobileSetActiveCardService(){
		$('#portfolio .card-service').on('click', function(){
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			} else{
				$('#portfolio .card-service').removeClass('active');
				$(this).addClass('active');
			}				
		});
	}

	function setHeaderBackground(){
		$(window).on('scroll', function(){
			if($(this).width() > 992){
				var $currentPos = $(this).scrollTop();
				var $homeHeight = $('#home').outerHeight() - 1;

				if($currentPos >= $homeHeight){
					$('header').addClass('background-color');
				} else {
					$('header').removeClass('background-color');
				}
			}
		})

		var $currentPos = $(this).scrollTop();
		var $homeHeight = $('#home').outerHeight() - 1;

		if($(this).width() > 992){
			if($currentPos >= $homeHeight){
				$('header').addClass('background-color');
			} else {
				$('header').removeClass('background-color');
			}
		}
	}

	function scrollMenu(){
		$('a.scroll').on('click', function(element){
			element.preventDefault();
			var $href = $(this).attr('href');

			$('html,body').animate({ scrollTop: $($href).offset().top }, 800);
		});
	}

	function setNavigation(){
		var $sections = $('section.section');
		var $header = $('header');
		var $headerHeight = $header.outerHeight();

		$(window).on('scroll', function() {
			var $currentPos = $(this).scrollTop();

			$sections.each(function() {
				var top = $(this).offset().top - $headerHeight;
				var bottom = top + $(this).outerHeight();

				if( $currentPos >= top && $currentPos <= bottom ){
					$header.find('a').removeClass('active');
					$header.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
				}

			});

		});

		// When occur a reload on window
		var $currentPosReload = $(this).scrollTop();

		$sections.each(function() {
			var top = $(this).offset().top - $headerHeight;
			var bottom = top + $(this).outerHeight();

			if( $currentPosReload >= top && $currentPosReload <= bottom ){
				$header.find('a').removeClass('active');
				$header.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
			}

		});

	}

	function slickCarousel(){
		$('.slick-carousel').slick({
			autoplay: true,
			autoplaySpeed: 3000
		});
	}
});