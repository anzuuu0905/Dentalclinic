// ローディング判定
jQuery(function ($) {
	jQuery(window).on("load", function () {
		jQuery("body").attr("data-loading", "true");
	});

	//ヘッダー追従（PC）
	jQuery(window).on('scroll', function () {
		if (50 < jQuery(this).scrollTop()) { // 50px以上スクロールしたら
			jQuery('.p-gnav').addClass('m_fixed');
		} else {
			jQuery('.p-gnav').removeClass('m_fixed');
		}
	});

	//ヘッダー追従（スマホ）
	jQuery(window).on('scroll', function () {
		if (50 < jQuery(this).scrollTop()) { // 50px以上スクロールしたら
			jQuery('.p-header__sp').addClass('m_fixed');
		} else {
			jQuery('.p-header__sp').removeClass('m_fixed');
		}
	});

	// TOPへボタンの作成
	var $top = $('.c-top');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$top.fadeIn();
		} else {
			$top.fadeOut();
		}
	});
	$top.on('click', function () {
		$('body,html').animate({
			scrollTop: 0
		}, 300);
		return false;
		// });
	});

	// ナビバートグル
	$('.js-hamburger').on('click', function () {
		if ($('.js-hamburger').hasClass('open')) {
			$('.js-drawer-menu').fadeOut();
			$('.js-overlay').fadeOut();
			$(this).removeClass('open');
			$("html").removeClass("is-fixed");  // 背景固定解除！
		} else {
			$('.js-drawer-menu').fadeIn();
			$('.js-overlay').fadeIn();
			$('.js-hamburger').addClass('open');
			$("html").addClass("is-fixed");     // 背景固定！
		}
	});

	// ナビバートグル
	$('.js-overlay').on('click', function () {
		$('.js-drawer-menu').fadeOut();
		$('.js-overlay').fadeOut();
		$('.js-hamburger').removeClass('open');
	});

	// スライダー
	$('.p-slick').slick({
		autoplay: true,
		dots: true,
		arrows: false,
		variableWidth: true,
		centerPadding: 0
	});

	// 下からフェードインさせるアニメーション
	function fadeAnime() {
		// ふわっ
		$('.fadeUpTrigger').each(function () { //fadeUpTriggerというクラス名が
			var elemPos = $(this).offset().top - 50;//要素より、50px上の
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight) {
				$(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
			}
			if (scroll >= elemPos - windowHeight) {
				$(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
			}
		});
	}
	// 画面をスクロールをしたら動かしたい場合の記述
	$(window).scroll(function () {
		fadeAnime();/* アニメーション用の関数を呼ぶ*/
	});// ここまで画面をスクロールをしたら動かしたい場合の記述
	// 画面が読み込まれたらすぐに動かしたい場合の記述
	$(window).on('load', function () {
		fadeAnime();/* アニメーション用の関数を呼ぶ*/
	});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

	// jQuery(function () {//不要だと思うのでコメントアウト　※１
	// スクロール判定
	jQuery(window).on("scroll", function () {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function (e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function () {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function (e) {
				e.preventDefault();
			});
	}
	// });　//不要だと思うのでコメントアウト※１
});








// p-mv__textにappeartextというクラス名を付ける定義
function EachTextAnimeControl() {
	$('.p-mv__text').each(function () {
		// var elemPos = $(this).offset().top - 50;
		// var scroll = $(window).scrollTop();
		// var windowHeight = $(window).height();
		// if (scroll >= elemPos - windowHeight) {
		$(this).addClass("appeartext");

		// } else {
		// 	$(this).removeClass("appeartext");
		// }
	});
}


// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	//spanタグを追加する
	var element = $(".p-mv__text");
	element.each(function () {
		var text = $(this).text();
		var textbox = "";
		text.split('').forEach(function (t, i) {
			if (t !== " ") {
				if (i < 10) {
					textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
				} else {
					var n = i / 10;
					textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
				}

			} else {
				textbox += t;
			}
		});
		$(this).html(textbox);
	});

	EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述