$(document.body).on('load', function () {
	setTimeout(function(){
		window.scrollTo(0, 0);
	}, 1);

});


$(window).load(function() {
	$('.block-work,.content-none').delay(100).fadeIn().animate({left:0, opacity:1}, 500);
	$('.btn-pink').delay(500).fadeIn().animate({left:0, opacity:1}, 1500);
	$('.yellow, .white').fadeIn().animate({opacity:1}, 100).css({"visibility":"visible"});
    $('.section-projects').fadeIn().animate({opacity:1}, 100).css({"visibility":"visible"});

	if($(window).width() > 680){
		var $element = $('.header-aplic');

		/*$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			var offset = $element.offset().top + 150;
			console.log(offset);

			if (scroll > offset) {
				$('.visibility').addClass('header_fixed');
			}
			else if(scroll < offset){
				$('.visibility').removeClass('header_fixed');
			}
		});*/

		$(window).scroll(function() {

			var scroll = $(window).scrollTop();
			if(scroll> 100){
				$('.header_soc').addClass('header_fixed');
				/*$('.white-ul li.current-lang').hide();*/
			} else{
				$('.header_soc').removeClass('header_fixed');
				$('.white-ul li.current-lang').show();
			}

		});
	};



	/* ------------------------------------------------
	wow START
	------------------------------------------------ */

	var wow = new WOW({
		boxClass: 'wow', 
		animateClass: 'animated', 
		offset: 0,
		mobile: true, 
		live: true 
	});
	wow.init();

	 /* ------------------------------------------------
	wow END
	------------------------------------------------ */


	/* ------------------------------------------------
	fullpage START
	------------------------------------------------ */
	/*	document.querySelector('.layout-page').onwheel = e => e.stopPropagation();*/
	/*document.querySelector('.layout-page-google').onwheel = e => e.stopPropagation();*/
/*	document.querySelector('.layout-page-facebook').onwheel = e => e.stopPropagation();
	document.querySelector('.layout-page-apll').onwheel = e => e.stopPropagation();
	document.querySelector('.layout-page-tab').onwheel = e => e.stopPropagation();*/
	if($('#fullpage').length){
		$('body').addClass('fullpageBody');
		$('#fullpage').fullpage({
			anchors: ['01', '02', '03', '04'],
			scrollingSpeed  : 600,
			autoScrolling   : true,
			controlArrows: true,
			navigation: true,
			normalScrollElements: '.layout-page',
			navigationPosition: 'right',
			responsiveWidth: 820,
			scrollBar: true,
			afterLoad: function(origin, destination, direction, index){
				if(destination.index == 3){	
				}
			},
			onLeave: function(origin, destination, direction, index) {

				if(destination.index == 0 || destination.index == 1 || destination.index == 2){
					$('.scroll-top').removeClass('to_top').css({'transform':'rotate(180deg)'});
				}
				else if(destination.index == 3){
					$('.scroll-top').addClass('to_top').css({'transform':'rotate(0deg)'});
				}


			}
		});

		$('.scroll-top').on('click', function(event) {
			if(!$(this).hasClass('to_top')){
				fullpage_api.moveSectionDown();
			}
			else{
				fullpage_api.moveTo('01');
			}
		});


	}
	
	/* ------------------------------------------------
	fullpage END
	------------------------------------------------ */


	/* ------------------------------------------------
	TABS
	------------------------------------------------ */
	$('.tab-head-cont-mobile').on('click',function(){
		$('.tab-head-cont-mobile').each(function(){
			$(this).toggleClass('show');
			$(this).on('click',function(e){
				e.preventDefault();
				var attr = $(this).attr('data-attr');
				$('.tab-head-cont-mobile:first-child').find('a').text(attr);
				$('.container-tab-mobile > section').each(function(){
					if($(this).attr('data-attr') == attr){
						$(this).addClass('is-open');
					}
					else{
						$(this).removeClass('is-open');
					}
				});
			});
		});
	});
	$('.container-tab-mobile').each(function(){
		$(this).find('.accordion-tabs-mobile li').first().addClass('is-open');
		$(this).find('section').first().addClass('is-open');
	});
	
	$('.accordion-tabs').each(function(index){
		$(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open');
		$(this).on('click', 'li > a', function(event) {
			if (!$(this).hasClass('is-active')) {
				event.preventDefault();
				$('.accordion-tabs .is-open').removeClass('is-open');
				$(this).next().addClass('is-open');
				$('.accordion-tabs').find('.is-active').removeClass('is-active');
				$(this).addClass('is-active');
			} else {
				event.preventDefault();
			}
		});
	});
	$('.accordion-tabs2').each(function(index){
		$('.accordion-tabs2').children('li').first().children('a').addClass('is-active').next().addClass('is-open');
		$(this).on('click', 'li > a', function(event) {
			if (!$(this).hasClass('is-active')) {
				event.preventDefault();
				$('.accordion-tabs2 .is-open').removeClass('is-open');
				$(this).next().addClass('is-open');
				$('.accordion-tabs2').find('.is-active').removeClass('is-active');
				$(this).addClass('is-active');
			} else {
				event.preventDefault();
			}
		});
	});

});

$(document).ready(function(){
	$(document).pjax('a','#pjax-container',{fragment: '#pjax-container'});
			/* ------------------------------------------------
	MENU
	------------------------------------------------ */
/*	$('.lang_home li').on('click',function(){
		if(!$(this).hasClass('active')){
			$(this).addClass('active');
		}
	});*/
				/* ------------------------------------------------
	MENU
	------------------------------------------------ */

	$('.activat-tab').on('click',function(e){
		var data = $(this).attr('data');
		var title = $(this).attr('data-title');
		$('.btn-r.pd22').show().addClass(title);
		$('.btn-r.btn-back-home,.section-projects').hide();
		$('.section-project').show();
		$('.layout-page').show(); 
		$('.section-project').children('.sec-worck').each(function(){
			if($(this).attr('data-attr') == title){
				$(this).removeClass('none').show();
			}
		});
		$('.section-each').each(function(index){
			if($(this).attr('data-title') == title){
				$(this).removeClass('none').show().animate({left:0, opacity:1}, 100).css("visibility","visible");
				console.log('11');
			}
			else{
				$(this).delay(100).fadeOut().animate({left:0, opacity:0}, 100).css("visibility","hidden");
				$('.btn-pink').delay(100).fadeOut().animate({left:0, opacity:0}, 100).css("visibility","hidden");
				console.log('0');
			}
		});

		$('.accordion-tabs li').each(function(){
			if($(this).attr('data-attr') == data){
				$(this).children('a').addClass('is-active');
				$(this).children('section').addClass('is-open');
			}
			else{
				$(this).children('a').removeClass('is-active');
				$(this).children('section').removeClass('is-open');
			}

		});
		$('.accordion-tabs-mobile li a').each(function(){
			if($(this).text() == data){
				$('.accordion-tabs-mobile li a').first().text(data);
			}
		});
		$('.container-tab-mobile section').each(function(index){
			if($(this).attr('data-attr') == data){
				$(this).addClass('is-open');
				console.log(1);
			}
			else{
				$(this).removeClass('is-open');
				console.log(0);
			}
		});
		
	});


			/* ------------------------------------------------
	FORM
	------------------------------------------------ */

	$('input, textarea').on('click',
		function(){
			$('input, textarea').each(function(){
				if($(this).hasClass('active')){
					$(this).removeClass('active');
					$('.error').fadeOut(700);
				}
			});
		}
		);
	var name = $(".name");
	var phone = $(".phone");
	var email = $(".email");
	var captcha = $('.captcha');
	var captcha_data = $('.captcha').attr('data_captcha');
	var reg = /[0-9 -()+]+$/;
	var regEmail =  /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
	name.change(function(){
		if(name.val() == "" || name.val().length < 3){
			name.addClass('error');
			name.prev('.error').fadeIn(800);
		}
		else{
			name.removeClass('error');
			name.prev('.error').fadeOut(800);
		}
	});
	captcha.change(function(){
		if($(this).val() == "" && $(this).val() != captcha_data){
			$(this).addClass('error');
			$('.wrap-captcha').prev('.error').fadeIn(800);
		}
		else{
			$(this).removeClass('error');
			$('.wrap-captcha').prev('.error').fadeOut(800);
		}
	});
	email.change(function(){
		if($(this).val() != ''){
			if($(this).val().search(regEmail) == 0){
				$(this).removeClass('error');
				$(this).prev('.error').fadeOut(800);

			}else{
				$(this).addClass('error');
				$(this).prev('.error').fadeIn(800);
			}
		}else{
			$(this).addClass('error');
			$(this).prev('.error').fadeIn(800);
		}
	});
	phone.change(function(){
		if($(this).val() != ''){
			if($(this).val().search(reg) == 0){
				$(this).removeClass('error');
				$(this).prev('.error').fadeOut(800);

			}else{
				$(this).addClass('error');
				$(this).prev('.error').fadeIn(800);
			}
		}else{
			$(this).addClass('error');
			$(this).prev('.error').fadeIn(800);
		}
	});




	$('.btn-form').click(function(e){
		e.preventDefault();
		var name = $(".name").val();
		var phone = $(".phone").val();
		var email = $(".email").val();
		var msg   = $(".msg").val();
		var captcha = $('.captcha');
		var captcha_data = $('.captcha').attr('data_captcha');

		var reg = /[0-9 -()+]+$/;
		var regEmail =  /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;

		if(name == "" || name.length < 3){
			$(".name").addClass('error');
			$(".name").prev('.error').fadeIn(800);
		}

		if(phone == '' || phone.search(reg) != 0){
			$(".phone").addClass('error');
			$(".phone").prev('.error').fadeIn(800);
		}
		if(email == '' || email.search(regEmail) != 0){
			$(".email").addClass('error');
			$(".email").prev('.error').fadeIn(800);
		}
		if(captcha.val() == "" || captcha.val() != captcha_data ){
			captcha.addClass('error');
			captcha.prev('.error').fadeIn(800);
			$('.wrap-captcha').prev('.error').fadeIn(800);
		}
		else{
			captcha.removeClass('error');
			$('.wrap-captcha').prev('.error').fadeOut(800);
			var data = {
				'action': 'footer_form',
				'name': name,
				'phone': phone,
				'email' : email,
				'msg'   : msg,
			};
			jQuery.ajax({
				url:my_ajax_object.ajax_url,
				data:data, 
				type:'POST',
				success:function(data){
					$(".form").trigger('reset');
					$('.result').text(data).css({"padding":"20px"});
					setTimeout(function(){$('.result').fadeOut('fast')},10000);
					
				}
			});
		}




	});

	


			/* ------------------------------------------------
	END FORM
	------------------------------------------------ */

/* ------------------------------------------------
	SCROLL
	------------------------------------------------ */





 	/* ------------------------------------------------
	
 	------------------------------------------------ */

 	$('.btn').click(function(){
 		$('#block').slideUp();
 	});



/* ------------------------------------------------
	BUTTON
	------------------------------------------------ */

	$('.icon-goole, .btn-g-step').each(

		function(){
			$(this).hover(
				function(){
					$(this).siblings('.watch-google').fadeIn(800);
				}

				);
		}

		);
	$('.key_block').each(function(){
		$(this).find('.watch-google.none:first').css( "display", "block" );
	});
	
	$('.watch-google').each(function(){
		$(this).hover(function(){
			if($(this).hasClass('none')){
				$(this).removeClass('none').fadeIn(800);
			}
			else{
				$(this).addClass('none').fadeOut(300);
			}
		});
	});

	$('.link-key-wrap').each(function(){
		$(this).hover(
			function(){
				$(this).find('.alt-google').show();
			},
			function(){
				$(this).find('.alt-google').hide()
			}

			);
	});
	$('.title-hover').each(function(){
		var title = $(this).attr('data-hover');
		var txt = $(this).text();
		$(this).hover(
			function(){
				$(this).html(title);
			},
			function(){
				$(this).html(txt);
			}

			);
	});


	if($(window).width() <= 880){
		$('.mobile-t').attr('href','#tabs2');
		;
	};
	$('.tb-page').on('click',function(){
		var $data = $(this).attr('data');
		$('.tab-head-cont-mobile a').each(function(){
			if($(this).attr('data') == $data){
				var $text = $(this).text();
				$('.tab-head-cont-mobile:first-child').find('a').text($text);
			}
		});

		$('.container-tab-mobile section').each(function(){
			if($(this).attr('data') == $data){
				$(this).addClass('is-open');
			}
			else{
				$(this).removeClass('is-open');
			}
		});


		$('.accordion-tabs li').each(function(index){
			if($(this).attr('data') == $data){
				console.log('1');
				$(this).children('a').addClass('is-active').next().addClass('is-open');
			}
			else{
				console.log('0');
				$(this).children('a').removeClass('is-active').next().removeClass('is-open');
			}
			$('.accordion-tabs2').children('li').first().children('a').addClass('is-active').next().addClass('is-open');
			$(this).on('click', 'li > a', function(event) {
				if (!$(this).hasClass('is-active')) {
					event.preventDefault();
					$('.accordion-tabs2 .is-open').removeClass('is-open');
					$(this).next().addClass('is-open');
					$('.accordion-tabs2').find('.is-active').removeClass('is-active');
					$(this).addClass('is-active');
				} else {
					event.preventDefault();
				}
			});
		});
	});
	if($(window).width() <= 680){
		$('.btn-white a, .btn-yellow a').attr('href','#');
		$('.yellow').removeClass('wow fadeInLeft  none2');
		$('.white').removeClass('wow fadeInRight none2');
		$('header').removeClass('wow fadeInDown ')
		$('.wrap-personal > img').attr('data-wow-delay','1s').attr('data-wow-duration','1s');
		$('.group-money > img').attr('data-wow-delay','1.2s').attr('data-wow-duration','1.2s');
		$('.btn-page').on('click',function(){
			$('.btn-list').hide().css({'opacity':'1'}); 
			$('.btn-site,.imgs-polygon2,.imgs-polygon').removeClass('show');
			$('.btn-site2').toggleClass('show').removeClass('none2');

		});
		$('.btn-white').on('click',function(){
			$('.mobile-logo, .btn-site').removeClass('show');
			$('.mobile-logo2').toggleClass('show');
		});
		$('.btn-yellow').on('click',function(){
			if($('.btn-site').hasClass("show")){
				$('.mobile-logo').toggleClass('show');
				$('.mobile-logo2, .btn-site2').removeClass('show');
				$('.btn-site,.btn-site,.imgs-polygon2,.imgs-polygon,.imgs-polygon5,.imgs-polygon6').removeClass("show");
				if($(window).width() <= 480){
					$('body,html').animate({ scrollTop: -200 }, 300);
				};
			}
			else{
				$('.btn-site').addClass("show");
				$('.mobile-logo').toggleClass('show');
				$('.mobile-logo2, .btn-site2').removeClass('show');
				if($(window).width() <= 480){
					$('body,html').animate({ scrollTop: 280 }, 600);
				}
				
			}

			$('.btn-site2').removeClass("show");
		});
	}
	else{
		$('.btn-page').on('click',function(){
			$('.btn-list').show().css({'opacity':'1'}); 
			$(this).hide();
			$('.wrapper-section').hide();
			$('.layout-page').slideDown(700).css({'opacity':'1'});
			$('#fp-nav').hide();
			$('.btn-site,.imgs-polygon2,.imgs-polygon').removeClass('show');
			$('.btn-site2').removeClass('show');
		});
		$('.btn-page, .btn-list').hover(
			function(e){
				$('.btn-site').removeClass("show");
				$('.btn-site2').addClass("show");
				$('.imgs-polygon3,.imgs-polygon4,.imgs-polygon5,.imgs-polygon6').addClass("show");
			},
			function(){
				$('.btn-site').removeClass("show");
				$('.btn-site2').removeClass("show");
				$('.imgs-polygon3,.imgs-polygon4,.imgs-polygon5,.imgs-polygon6').removeClass("show");
			}
			);

		$('.btn-list').on('click',function(){
			$('.btn-page').show().css({'opacity':'1'}); 
			$(this).hide();
			$('.btn-site').removeClass("show");
			$('.btn-site2').addClass("show");
		});

		$('.btn-header').on('click',function(){
			if($('.imgs-polygon2,.imgs-polygon').hasClass("show")){
				$('.imgs-polygon2,.imgs-polygon').removeClass("show");
			}else{
				$('.imgs-polygon2,.imgs-polygon').addClass("show");
			}
			;
		});

		$('.btn-yellow').hover(
			function(){
				$('.btn-site').addClass("show");
				$('.btn-site2').removeClass("show");
				$('.imgs-polygon2,.imgs-polygon,.imgs-polygon5,.imgs-polygon6').addClass("show");
				$(this).css({"box-shadow":"0px 10px 20px rgba(0, 0, 0, 0.3)"});
			},
			function(){
				$('.btn-site').removeClass("show");
				$('.btn-site2').removeClass("show");
				$('.imgs-polygon2,.imgs-polygon,.imgs-polygon5,.imgs-polygon6').removeClass("show");
				$(this).css({"box-shadow":"0px 10px 20px rgba(0, 0, 0, 0.05)"});
			}
			);
		$('.btn-site').hover(
			function(){
				$(this).addClass('show');
				$('.imgs-polygon2,.imgs-polygon,.imgs-polygon5,.imgs-polygon6').addClass("show");
			},
			function(){
				$(this).removeClass('show');
				$('.imgs-polygon2,.imgs-polygon,.imgs-polygon5,.imgs-polygon6').removeClass("show");	
			}
			);
		$('.btn-site2').hover(
			function(){
				$(this).addClass('show');
				$('.imgs-polygon3,.imgs-polygon4,.imgs-polygon5,.imgs-polygon6').addClass("show");
			},
			function(){
				$(this).removeClass('show');
				$('.imgs-polygon3,.imgs-polygon4,.imgs-polygon5,.imgs-polygon6').removeClass("show");	
			}
			);

		$('.btn-site2').hover(
			function(){
				$('.btn-white').css({"box-shadow":"0px 10px 20px rgba(0, 0, 0, 0.3)"});
			},
			function(){
				$('.btn-white').css({"box-shadow":"0px 10px 20px rgba(0, 0, 0, 0.05)"});
			}
			);
		$('.btn-white').hover(
			function(){
				$(this).css({"box-shadow":"0px 10px 20px rgba(0, 0, 0, 0.3)"});
			},
			function(){
				$(this).css({"box-shadow":"0px 10px 20px rgba(0, 0, 0, 0.05)"});
			}
			);
		$('.btn-site').hover(
			function(){
				$('.btn-yellow ').css({"box-shadow":"0px 10px 20px rgba(0, 0, 0, 0.3)"});
			},
			function(){
				$('.btn-yellow').css({"box-shadow":"0px 10px 20px rgba(0, 0, 0, 0.05)"});
			}
			);

		$('.btn-yellow').on('click',function(){
			if($('.btn-site').hasClass("show")){
				$('.btn-site').removeClass("show")
			}
			else{
				$('.btn-site').addClass("show").removeClass("none hide")
			}

			$('.btn-site2').removeClass("show");
		});

	}

/*
	$('.btn-r.pd10,.btn-r.btn-back,.btn-r.btn-back-home').on('click',function(){
		$('.header_soc').removeClass('visibility').removeClass('header_fixed');
		$(".form").trigger('reset');
		$('html, body').animate({scrollTop: $("html, body").offset().top}, 800);
		$('.btn-site2,.imgs-polygon2,.imgs-polygon, .layout-page-tab').removeClass('show');
		$('.layout-page,.layout-page-google,.layout-page-tab,.layout-page-facebook, .layout-page-apll, .section-project-google').slideUp(1500);
		$('.wrapper-section').slideDown(2000).show();
		$('#fp-nav').show();
		$('.wrapper-section,.section-projects').removeClass('none').show();
		$('.section-project,.section-each').hide();
		$('.section-project').children('.sec-worck').each(function(){
			if(!$(this).hasClass('none') ){
				$(this).addClass('none').hide();
			}
		});
		$('.accordion-tabs').each(function(index){
			$(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open');
			$(this).on('click', 'li > a', function(event) {
				if (!$(this).hasClass('is-active')) {
					event.preventDefault();
					$('.accordion-tabs .is-open').removeClass('is-open').css('display','none');
					$(this).next().addClass('is-open');
					$('.accordion-tabs').find('.is-active').removeClass('is-active');
					$(this).addClass('is-active');
				} else {
					event.preventDefault();
				}
			});
		});
	});*/
	$('.btn-r.pd22').on('click',function(){
		$('.block-work').delay(1000).fadeIn().animate({left:0, opacity:1}, 800).css("visibility","visible");
		$('.btn-pink').delay(1500).fadeIn().animate({left:0, opacity:1}, 2500).css("visibility","visible");;
		$('.section-each').each(function(){
			var tit = $(this).attr('data-title');
			if($('.btn-r.pd22').hasClass(tit)){
				$(this).hide();
				$('.section-projects').removeClass('none').show();
				$('html, body').animate({scrollTop: $("html, body").offset().top}, 800);
				$('.btn-r.pd22').removeClass(tit).hide();
				$('.btn-r.btn-back,.btn-r.btn-back-home').show();

			}
		});
	});

	$('.activat-desc').on('click',function(){
		var tit  =  $(this).attr('data-title');
		$('.btn-r.btn-back').hide();
		$('.btn-r.pd22').show().addClass(tit);
		$('.section-projects').hide();
		$('.section-each').each(function(){
			if($(this).attr('data-title') == tit){
				$(this).show().removeClass('none');
			}
		});
	});

/*
	$('.btn-google').on('click',function(){
		$('.header-scloll-g').addClass('fixed-header').find('div.header_soc').addClass('visibility');
		$('html, body').animate({scrollTop: $("html, body").offset().top}, 800);
		$('.wrapper-section, #fp-nav').hide();
		$('.layout-page-google').slideDown(700).css({'opacity':'1'});
		$('.btn-site,.imgs-polygon2,.imgs-polygon').removeClass('show');
	});
	$('.btn-facebook').on('click',function(){
		$('.header-scloll-f').addClass('fixed-header').find('div.header_soc').addClass('visibility');
		$('html, body').animate({scrollTop: $("html, body").offset().top}, 800);
		$('.wrapper-section, #fp-nav').hide();
		$('.layout-page-facebook').show().css({'opacity':'1'});
		$('.btn-site,.imgs-polygon2,.imgs-polygon').removeClass('show');
	});

	$('.btn-mobile').on('click',function(){
		$('.header-scloll-a').addClass('fixed-header').find('div.header_soc').addClass('visibility');
		$('html, body').animate({scrollTop: $("html, body").offset().top}, 800);
		$('.wrapper-section, #fp-nav').hide();
		$('.layout-page-apll').slideDown(700).css({'opacity':'1'});
		$('.btn-site,.imgs-polygon2,.imgs-polygon').removeClass('show');
	});*/

	$('.all-project').on('click',function(){
		$('html, body').animate({scrollTop: $("html, body").offset().top}, 800);
		$('.wrapper-section,.layout-page, #fp-nav').hide();
		$('.layout-page-tab').slideDown(700).css({'opacity':'1'});
		$('.btn-site,.imgs-polygon2,.imgs-polygon').removeClass('show');

		$('.accordion-tabs').each(function(index){
			$(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open');
			$(this).on('click', 'li > a', function(event) {
				if (!$(this).hasClass('is-active')) {
					event.preventDefault();
					$('.accordion-tabs .is-open').removeClass('is-open');
					$(this).next().addClass('is-open');
					$('.accordion-tabs').find('.is-active').removeClass('is-active');
					$(this).addClass('is-active');
				} else {
					event.preventDefault();
				}
			});
		});
	});

	/*window.onload = function () {
		document.body.classList.add('loaded_hiding');
		window.setTimeout(function () {
			document.body.classList.add('loaded');
			document.body.classList.remove('loaded_hiding');
		}, 500);
	}
	*/



	/* ------------------------------------------------
	Owl START
	------------------------------------------------ */

	$('.owl-slider').owlCarousel({
		items: 4,
		loop:true,
		nav:true,
		dots: false,
		margin:20,
		margin:0,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 2000,
		navText: ["<img src='https://bucks-buddy.com/wp-content/themes/corporates/images/prev.png'>","<img src='https://bucks-buddy.com/wp-content/themes/corporates/images/next.png'>"],
		responsive:{
			0:{
				items:1,
				nav:false,
			},
			600:{
				items:1,
				nav:false,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplaySpeed: 2000,
				autoplayHoverPause: true,
			},
			900:{
				items:3,
				nav:false,
			},
			1000:{
				items:4,

			}
		}
	});

	$('.owl-slider2').owlCarousel({
		items: 2,
		loop:true,
		nav:true,
		dots: false,
		margin:0,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 2000,
		autoplayHoverPause: true,
		navText: ["<img src='https://bucks-buddy.com/wp-content/themes/corporates/images/prev.png'>","<img src='https://bucks-buddy.com/wp-content/themes/corporates/images/next.png'>"],
		responsive:{
			0:{
				items:1,
				nav:false,
			},
			720:{
				items:1,
				nav:false,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplaySpeed: 2000,
				autoplayHoverPause: true,
			},
			680:{
				items:1,
				nav:false,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplaySpeed: 2000,
				autoplayHoverPause: true,
			},

			1000:{
				items:2,

			}
		}
	});




	/* ------------------------------------------------
	SCROLL ANHCOR
	------------------------------------------------ */
	$('.block-work a[href*="#"]').click(function() {
		$("html, body").animate({
			scrollTop: $($(this).attr("href")).offset().top
		}, {
			duration: 1500,
			easing: "swing"
		});
		return false;
	});
	$('.top').click(function() {
		$("html, body").animate({
			scrollTop: $($(this).attr("href")).offset().top
		}, {
			duration: 900,
			easing: "swing"
		});
		return false;
	});
	jQuery(function(f){
		var element = f('.scroll-top2');
		f(window).scroll(function(){
			element['fade'+ (f(this).scrollTop() > 200 ? 'In': 'Out')](500);           
		});
	});
	
	/* ------------------------------------------------
	END SCROLL ANHCOR
	------------------------------------------------ */


	/* ------------------------------------------------
	VUE 3D CAROUSEL
	------------------------------------------------ */
	$('.example').each(function(index){
		/*console.log(index);*/
		new Vue({
			el: this,
			data: {
				slides: 7
			},
			components: {
				'carousel-3d': Carousel3d.Carousel3d,
				'slide': Carousel3d.Slide
			}

		});
	});

	


	$('.example2').each(function(index){
		new Vue({
			el: this,
			data: {
				slides: 7
			},
			components: {
				'carousel-3d': Carousel3d.Carousel3d,
				'slide': Carousel3d.Slide
			}

		});
	});


	$('.example3').each(function(index){
		new Vue({
			el: this,
			data: {
				slides: 7
			},
			components: {
				'carousel-3d': Carousel3d.Carousel3d,
				'slide': Carousel3d.Slide
			}

		});
	});




		/* ------------------------------------------------
	END VUE 3D CAROUSEL
	------------------------------------------------ */


});


