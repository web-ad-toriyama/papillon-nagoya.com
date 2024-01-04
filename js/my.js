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


	// TOPページ花びらひらひら設定
	(function () {
	var divSakura = document.createElement('div');	/* 大枠になるdivを作る */
	divSakura.id = "sakura";	/* id を追加する */

	let sakuraStyle = `
<style>
	html,body{overflow-x:hidden;}
	.hana{
		position:absolute;height:0;width:0;
		border-radius: 20px;
		border-top-right-radius: 15px;
		border-bottom-left-radius: 5px;
	}
	
	.hana.hana1::after{
		background: url(images/img_confetti_01.png) 0 0 no-repeat;content:"";display:block;position:absolute;top:-10px;left:-12px;height:25px;width:25px
	}
	.hana.hana2::after{
		background: url(images/img_confetti_02.png) 0 0 no-repeat;content:"";display:block;position:absolute;top:-10px;left:-12px;height:25px;width:25px;
	}
	.hana.hana3::after{
		background: url(images/img_confetti_03.png) 0 0 no-repeat;content:"";display:block;position:absolute;top:-10px;left:-12px;height:25px;width:25px;
	}
	.hana.hana4::after{
		background: url(images/img_confetti_04.png) 0 0 / cover no-repeat;content:"";display:block;position:absolute;top:-10px;left:-12px;height:50px;width:35px;
	}

	.y1{-webkit-animation:v1 10s infinite;}
	.y2{-webkit-animation:v2 10s infinite;}
	.y3{-webkit-animation:v3 9s infinite;}
	.y4{-webkit-animation:v4 9s infinite;}
	.y5{-webkit-animation:v5 8s infinite;}
	@-webkit-keyframes v1{
		from{-webkit-transform: rotate(0deg) scale(.9);}
		50%{-webkit-transform: rotate(270deg) scale(.9);}
		to{-webkit-transform: rotate(1deg) scale(.9);}
	}
	@-webkit-keyframes v2{
		from{-webkit-transform: rotate(-90deg) scale(.8);}
		50%{-webkit-transform: rotate(-360deg) scale(.8);}
		to{-webkit-transform: rotate(-89deg) scale(.8);}
	}
	@-webkit-keyframes v3{
		from{-webkit-transform: rotate(30deg) scale(.7);}
		50%{-webkit-transform: rotate(300deg) scale(.7);}
		to{-webkit-transform: rotate(29deg) scale(.7);}
	}
	@-webkit-keyframes v4{
		from{-webkit-transform: rotate(-120deg) scale(.6);}
		50%{-webkit-transform: rotate(-390deg) scale(.6);}
		to{-webkit-transform: rotate(-119deg) scale(.6);}
	}
	@-webkit-keyframes v5{
		from{-webkit-transform: rotate(60deg) scale(.5);}
		50%{-webkit-transform: rotate(330deg) scale(.5);}
		to{-webkit-transform: rotate(59deg) scale(.5);}
	}
</style>
`;

	/* 以下 div の中に追加する html（style タグと css を追加しています） */
	divSakura.innerHTML = sakuraStyle;


	document.body.appendChild(divSakura);	/* body タグに大枠の div を追加します */

	var windowHeight = window.innerHeight;	/* ウィンドウの高さを取得 */
	var scroll = document.documentElement.scrollTop || document.body.scrollTop;	/* スクロールの位置を取得 */
	var styleZindex = 0;	/* 花びらの z-index （9999から開始） */
	var styleTop = new Array();	/* 花びらの top 位置配列 */
	var styleLeft = new Array();	/* 花びらの left 位置配列 */
	var yuragi = new Array();	/* ゆらぐ幅の配列 */
	var sokudo = new Array();	/* 落下速度の配列 */
	var hanabiraId = new Array();	/* 花びらのIDの配列 */
	var yuragiConut = new Array();	/* 揺らぎのカウンター配列 */
	var kazeCount = 0;	/* 横風のカウンター */

	/* スクロール時のイベント登録（スクロールされても花びらがウィンドウ内に収まる様に） */
	document.addEventListener('scroll', function(){ scroll = document.documentElement.scrollTop || document.body.scrollTop; }, false);

	/* 花びら40枚用意する */
	for(var i = 0; i < 40; i++){

		// 1 - 4でランダム
		// var hanaClazz = `hana${Math.floor( Math.random() * (4 + 1 - 1) ) + 1}`; 
		
		var hanaClazz;
		// hana4のみ出現率を下げる
		if (Math.random() < 0.05) {
			// 5%の確率でhana4を生成
			hanaClazz = 'hana4';
		} else {
			// 95%の確率でhana4以外のクラスを生成
			hanaClazz = `hana${Math.floor(Math.random() * 3) + 1}`;
		}

		var divHanabira = document.createElement('div');	/* 花びらの div を作る */
		divHanabira.id = 'hanabira' + i;	/* id を追加する（例：<div id="hanabira0">） */
		styleTop[i] = Math.random() * -500 + scroll;	/* 初期表示位置（top）をランダムに取得 */
		styleLeft[i] = Math.random() * window.innerWidth;	/* 初期表示位置（left）をウィンドウの幅内でランダムに取得 */
		divHanabira.setAttribute('style', 'z-index:' + (styleZindex + i) + ';top:' + styleTop[i] + 'px;left:' + styleLeft[i] + 'px;');	/* 花びら div に style を追加 */
		// var hanabiraClass = 'hana t' + (Math.floor(Math.random() * 5) + 1) + ' y' + (Math.floor(Math.random() * 5) + 1);
		var hanabiraClass = 'hana ' + hanaClazz + ' t' + (Math.floor(Math.random() * 5) + 1) + ' y' + (Math.floor(Math.random() * 5) + 1);	/* 花びら div の class を用意 */
		divHanabira.setAttribute('class', hanabiraClass);	/* 花びら div に class を追加 */
		divSakura.appendChild(divHanabira);	/* 大枠の div に花びら div を追加 */
		yuragi[i] = Math.random() * 20 + 25;	/* 揺らぐ幅をランダムに取得 */
		sokudo[i] = Math.random() * 3 + 1;	/* 落下速度をランダムに取得 */
		hanabiraId[i] = document.getElementById('hanabira' + i);	/* あとあと扱いやすい様に花びらに id を配列に格納 */
		yuragiConut[i] = 0;	/* 揺らぎカウンターの初期値は0 */
	}

	/* 花びらを動かす（45ミリ秒毎に繰り返し） */
	setInterval(function(){

		/* 花びらの位置を制御（40枚動かす） */
		for(var i = 0; i < 40; i++){
			if(styleTop[i] < scroll + windowHeight - 40){	/* 花びらの位置（top）がウィンドウ内なら */
				if(yuragi[i] >= yuragiConut[i]){	/* 揺らぐ幅（右へ移動）内なら */
					styleLeft[i] = styleLeft[i] + 0.3 + Math.random() * 0.3;
				}else{	/* 揺らぐ幅（左へ移動）内なら */
					styleLeft[i] = styleLeft[i] - 0.3 - Math.random() * 0.3;
				}
				if((yuragi[i] * 2) <= yuragiConut[i]){	/* ゆらぎの幅の2倍なら */
					yuragiConut[i] = 0;	/* カウンターリセット */
				}
			}else{	/* 花びらがウィンドウの下まできたら */
				styleTop[i] = scroll;	/* 花びらを上に戻す */
				styleLeft[i] = Math.random() * window.innerWidth;	/* 花びら表示位置（left）をランダムに */
			}

			styleTop[i] = styleTop[i] + sokudo[i];	/* 表示位置（top）に速度分追加 */
			hanabiraId[i].style.top = styleTop[i] + 'px';	/* 実際に top に数値を反映させる */
			hanabiraId[i].style.left = styleLeft[i] + 'px';	/* 実際に left 数値を反映させる */
			yuragiConut[i]++;	/* 揺らぎカウンターに1足す */
		}
		kazeCount += 0.5;	/* 風カウンターに0.5足す */
	}, 30);

	// メインビジュアル波紋のバグ修正
	var style = '<link rel="stylesheet" href="css/animation.css">';
    $('head link:last').after(style);
	
})();


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