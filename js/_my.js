;jQuery(function($){


	// ドロワー
  $('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    return false;
  });
  $('.btn-trigger').on('click', function() {
      $('body').toggleClass('open');
  });

	//スライドショー for ヘッドライン
	$('.headline ul').cycle({
		fx: "scrollHorz",
		speed: 1000,
		manualSpeed: 100
	});
	//スライドショー for ヘッドライン
		$('#section_covergirl .cast_box').cycle({
		speed: 2000,
		manualSpeed: 100
	});

	//スライドショー for メインビジュアル(Ver.flexslider)
	$('#mainvisual').flexslider({
		slideshow: true,
		animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
		animationLoop: true,
		pauseOnAction: false,
		touch: true,
		video: true,
	});

	//スライドショー for event(Ver.flexslider)
	$('#section_event').flexslider({
		slideshow: true,
		animation: "fade",
		slideshowSpeed: 5000,
		directionNav: true,
		animationLoop: true,
		pauseOnAction: false,
		touch: true,
		video: true,
	});

	//スライドショー for recruit(Ver.flexslider)
	$('#section_recruit').flexslider({
		slideshow: true,
		animation: "fade",
		slideshowSpeed: 5000,
		directionNav: true,
		animationLoop: true,
		pauseOnAction: false,
		touch: true,
		video: true,
	});

	$('.matchHeight').matchHeight();

	// 本日の出勤セラピストスライド設定
	var fade = new Swiper('#section_today.slider .swiper-container', {
		loop: false,
		speed: 2000,
		spaceBetween: 10,
		effect: 'slide',
		slidesPerView: 4,
		centeredSlides: false,
		autoplay: {
			delay: 3000,
			stopOnLastSlide: false,
			disableOnInteraction: false,
			reverseDirection: false
		},
		pagination: {
			// el: '.pagination',
			// clickable: true,
		},
		navigation: {
			nextEl: '.next',
			prevEl: '.prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 3,
				spaceBetween: 5,
			},
			480: {
				slidesPerView: 2,
				spaceBetween: 5,
			}
		}
	});

	// 本日の出勤セラピストスライド設定
	var fade = new Swiper('#section_new.slider .swiper-container', {
		loop: false,
		speed: 2000,
		spaceBetween: 10,
		effect: 'slide',
		slidesPerView: 4,
		centeredSlides: false,
		autoplay: {
			delay: 3000,
			stopOnLastSlide: false,
			disableOnInteraction: false,
			reverseDirection: false
		},
		pagination: {
			// el: '.pagination',
			// clickable: true,
		},
		navigation: {
			nextEl: '.next',
			prevEl: '.prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 3,
				spaceBetween: 5,
			},
			480: {
				slidesPerView: 2,
				spaceBetween: 5,
			}
		}
	});

	// フェードイン
  $(window).scroll(function (){
    $('.fadein').each(function(){
      var POS = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > POS - windowHeight){
        $(this).css({
          'opacity':'1',
          'transform':'translateY(0)',
          '-webkit-transform':'translateY(0)',
          '-moz-transform':'translateY(0)',
          '-ms-transform':'translateY(0)'
        });
      } else {
        $(this).css({
          'opacity':'0',
          'transform':'translateY(100px)',
          '-webkit-transform':'translateY(100px)',
          '-moz-transform':'translateY(100px)',
          '-ms-transform':'translateY(100px)'
        });
      }
    });
  });
  // 上からフェードイン
  $(window).scroll(function (){
    $('.top_fadein').each(function(){
      var POS = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > POS - windowHeight){
        $(this).css({
          'opacity':'1',
          'transform':'translateY(0)',
          '-webkit-transform':'translateY(0)',
          '-moz-transform':'translateY(0)',
          '-ms-transform':'translateY(0)'
        });
      } else {
        $(this).css({
          'opacity':'0',
          'transform':'translateY(-100px)',
          '-webkit-transform':'translateY(-100px)',
          '-moz-transform':'translateY(-100px)',
          '-ms-transform':'translateY(-100px)'
        });
      }
    });
  });
  // 右からフェードイン
  $(window).scroll(function (){
    $('.right_fadein').each(function(){
      var POS = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > POS - windowHeight){
        $(this).css({
          'opacity':'1',
          'transform':'translateX(0)',
          '-webkit-transform':'translateX(0)',
          '-moz-transform':'translateX(0)',
          '-ms-transform':'translateX(0)'
        });
      } else {
        $(this).css({
          'opacity':'0',
          'transform':'translateX(60px)',
          '-webkit-transform':'translateX(60px)',
          '-moz-transform':'translateX(60px)',
          '-ms-transform':'translateX(60px)'
        });
      }
    });
  });
  // 左からフェードイン
  $(window).scroll(function (){
    $('.left_fadein').each(function(){
      var POS = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > POS - windowHeight){
        $(this).css({
          'opacity':'1',
          'transform':'translateX(0)',
          '-webkit-transform':'translateX(0)',
          '-moz-transform':'translateX(0)',
          '-ms-transform':'translateX(0)'
        });
      } else {
        $(this).css({
          'opacity':'0',
          'transform':'translateX(-60px)',
          '-webkit-transform':'translateX(-60px)',
          '-moz-transform':'translateX(-60px)',
          '-ms-transform':'translateX(-60px)'
        });
      }
    });
  });

	// フッターナビがふわっと登場！
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 100) {
			$('#bottom_nav').addClass('fade');
		} else {
			$('#bottom_nav').removeClass('fade');
		}
	});

	// ヘッダーをスクロール途中から表示
	$(function() {
		var header = $('header');    
		header.hide();
		//スクロールが50に達したらボタン表示
		$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
						header.fadeIn();
				} else {
						header.fadeOut();
				}
		});
	});

	var topBtn = $('#Page-Top');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});

	//スクロールしてトップ
	topBtn.click(function () {
		$('body,html').stop().animate({
			scrollTop: 0
		}, 500, 'linear');
		return false;
	});

	//体験漫画
	$('#manga').flexslider({
		slideshow: false,
		animation: "slide",
		slideshowSpeed: 8000
	});



	// RSS
	// var mySwiper = new Swiper('.swiper-container', {
	// 	direction: 'vertical',
	// 	// 自動再生
	// 	autoplay: {
	//     delay: 4000,
	//   	},
	// 	speed: 4000,
	// 	//一度に表示する個数を選択
	// 	slidesPerView: 3,
	// });
});