<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- 自動リンクを無効にする -->
  <meta name="format-detection" content="telephone=no">
  <!-- fontawesomを使用する -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- スライダー -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->

  <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php
    $home = esc_url(home_url('/'));
    $about = esc_url(home_url('/about/'));
    $treatment = esc_url(home_url('/treatment/'));
    $staff = esc_url(home_url('/staff/'));
    $topics = esc_url(home_url('/topics/'));
    $access = esc_url(home_url('/access/'));
  ?>

  <header class="l-header p-header
    <?php if(is_front_page()){
      echo 'js-top-header';
    }else{
      echo 'js-sub-header';}  
    ?>">
    <div class="p-header__inner">
      <!-- PCの場合使用 -->
      <div class="p-header__box l-inner u-hidden-sp">
        <!-- <div class="p-header__logobox u-hidden-sp"> -->
        <div class="p-header__logobox">
          <div class="p-header__logo">
            <a href="<?php echo $home ?>">
            <!-- Hiro歯科クリニック -->
              <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"
              　　　srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"
                  alt="Hiro歯科クリニック" loading="lazy">
            </a>
          </div>
          <!-- <h1 class="p-header__title v u-hidden-sp">一宮市の「Hiro歯科クリニック」は、一宮駅直結の歯医者さん</h1> -->
          <h1 class="p-header__title">一宮市の「Hiro歯科クリニック」は、一宮駅直結の歯医者さん</h1>
        </div>
        <!-- <div class="p-header__telbox p-tel u-hidden-sp"> -->
        <div class="p-header__telbox p-tel">
          <p class="p-tel__text">ご予約・お問い合わせはお気軽にどうぞ</p>
          <p class="p-tel__no"><i class="fa fa-phone fa-rotate-90"></i> 999-999-9999</p>
        </div>
        <!-- スマホのみ表示 -->
        <!-- <div class="p-header__menubox u-hidden-pc">
          <div class="p-header__drawer c-hamburger js-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="p-header__menutext">
            <span>メニュー</span>
          </div>
        </div> -->
      </div>
      <!-- スマホの場合使用 -->
      <div class="p-header__sp  l-inner u-hidden-pc">
        <div class="p-header__logo">
        <a href="<?php echo $home ?>">
          <!-- Hiro歯科クリニック -->
            <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"
            　　　srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"
                alt="Hiro歯科クリニック" loading="lazy">
          </a>
        </div>
        <div class="p-header__spbox">
          <div class="p-header__sptel">
            <a href="tel:000-1234-5678"><i class="fa fa-phone fa-rotate-90"></i></a>
            <span>電話</span>
          </div>
          <!-- スマホのみ表示 -->
          <div class="p-header__menubox">
            <div class="p-header__drawer c-hamburger js-hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="p-header__menutext">
              <span>メニュー</span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-header__menu p-drawer-menu js-drawer-menu  l-inner">
        <nav class="p-drawer-menu__menu">
          <ul class="p-drawer-menu__items">
            <li class="p-drawer-menu__item"><a href="<?php echo $about ?>">当院について</a></li>
            <li class="p-drawer-menu__item"><a href="<?php echo $treatment ?>">診療案内</a></li>
            <li class="p-drawer-menu__item"><a href="<?php echo $staff ?>">スタッフ紹介</a></li>
            <li class="p-drawer-menu__item"><a href="<?php echo $topics ?>">お知らせ</a></li>
            <li class="p-drawer-menu__item"><a href="<?php echo $access ?>">アクセス</a></li>
          </ul>
        </nav>
        <div class="p-header__telbox p-tel">
          <p class="p-tel__text">ご予約・お問い合わせはお気軽にどうぞ</p>
          <p class="p-tel__no"><i class="fa fa-phone fa-rotate-90"></i> <a href="tel:000-1234-5678">000-1234-5678</a></p>
        </div>

      </div>
      <div class="p-header__overlay js-overlay"></div>
        <!-- PCのみ表示 -->
        <div class="p-header__nav p-gnav u-hidden-sp">
        <nav class="p-gnav__menu">
          <ul class="p-gnav__items">
          <li class="p-gnav__item"><a href="<?php echo $about ?>">当院について</a></li>
            <li class="p-gnav__item"><a href="<?php echo $treatment ?>">診療案内</a></li>
            <li class="p-gnav__item"><a href="<?php echo $staff ?>">スタッフ紹介</a></li>
            <li class="p-gnav__item"><a href="<?php echo $topics ?>">お知らせ</a></li>
            <li class="p-gnav__item"><a href="<?php echo $access ?>">アクセス</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
