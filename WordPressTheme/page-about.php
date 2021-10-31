<?php get_header(); ?>
<div class="p-sub-about">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h1 class="c-comon-title__title"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="p-sub-about__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <div class="p-sub-about__messagebox fadeUpTrigger">
      <p class="p-sub-about__message">一宮市の「Hiro歯科クリニック」は、一宮駅直結の歯医者です。</p>
      <p class="p-sub-about__message">当院では、患者さまと二人三脚で、その方に合った予防処置を行うことで、口から全身の健康を改善していただけるよう努めています。</p>
    </div>
    <section class="p-sub-about__features">
      <h2 class="p-sub-about__subtitle fadeUpTrigger">当院の５つの特徴</h2>
      <div class="p-sub-about__featurebox">
        <div class="p-sub-about__feature p-sub-feature">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature1.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">01</p>
              <h3 class="p-sub-feature__title">地域に根差した医療</h3>
            </div>
              <p class="p-sub-feature__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
          </div>
        </div>
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature2.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">02</p>
              <h3 class="p-sub-feature__title">丁寧な説明による信頼関係の構築</h3>
            </div>
              <p class="p-sub-feature__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
          </div>
        </div>
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature3.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">03</p>
              <h3 class="p-sub-feature__title">二人三脚で進める予防診療</h3>
            </div>
              <p class="p-sub-feature__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
          </div>
        </div>
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature4.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">04</p>
              <h3 class="p-sub-feature__title">安心・安全な診療環境</h3>
            </div>
              <p class="p-sub-feature__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
          </div>
        </div>
        <div class="p-sub-about__feature p-sub-feature fadeUpTrigger">
          <figure class="p-sub-feature__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature5.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="p-sub-feature__body">
            <div class="p-sub-feature__titlebox">
              <p class="p-sub-feature__no">05</p>
              <h3 class="p-sub-feature__title">常に成長するクリニック</h3>
            </div>
              <p class="p-sub-feature__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="p-sub-about__introduction fadeUpTrigger">
      <h2 class="p-sub-about__subtitle fadeUpTrigger">院内紹介</h2>
      <div class="p-sub-about__cards p-cardlist">  <!-- p-cardlistは、3つのカードの集合体を示す -->
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction1.jpg" alt="feature1" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h3 class="c-card__title">駐車場</h3>
            <p class="c-card__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction2.jpg" alt="feature2" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h3 class="c-card__title">受付</h3>
            <p class="c-card__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction3.jpg" alt="feature3" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h3 class="c-card__title">待合室</h3>
            <p class="c-card__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction4.jpg" alt="feature4" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h3 class="c-card__title">診察室</h3>
            <p class="c-card__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction5.jpg" alt="feature5" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h3 class="c-card__title">レントゲン</h3>
            <p class="c-card__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          </div>
        </div>
        <!-- カード -->
        <div class="c-card p-cardlist__item fadeUpTrigger">
          <figure class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/introduction6.jpg" alt="feature6" loading="lazy">
          </figure>
          <div class="c-card__body">
            <h3 class="c-card__title">滅菌器</h3>
            <p class="c-card__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          </div>
        </div>
      </div>
    </section>
  </div>

</div>
<?php get_footer(); ?>