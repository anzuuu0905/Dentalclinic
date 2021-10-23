// ローディング判定
jQuery(function ($) {
	jQuery(window).on("load", function () {
		jQuery("body").attr("data-loading", "true");
	});

	//ヘッダー追従
	jQuery(window).on('scroll', function () {
		if (50 < jQuery(this).scrollTop()) { // 50px以上スクロールしたら
			jQuery('.p-gnav').addClass('m_fixed');
		} else {
			jQuery('.p-gnav').removeClass('m_fixed');
		}
	});

	// ナビバートグル
	$('.js-hamburger').on('click', function () {
		if ($('.js-hamburger').hasClass('open')) {
			$('.js-drawer-menu').fadeOut();
			$('.js-overlay').fadeOut();
			$(this).removeClass('open');
		} else {
			$('.js-drawer-menu').fadeIn();
			$('.js-overlay').fadeIn();
			$('.js-hamburger').addClass('open');
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

	jQuery(function () {
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
	});
});

