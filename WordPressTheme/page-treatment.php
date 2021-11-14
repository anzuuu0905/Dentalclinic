<?php get_header(); ?>
<section class="p-sub-treatment">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title"><?php the_title(); ?></h2>
    </div>
  </div>
  <div class="p-sub-treatment__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <div class="p-sub-treatment__list">
      <div class="p-sub-treatment__item p-treatment fadeUpTrigger" id="p-treatment__content1">
        <div class="p-treatment__inner">
          <h3 class="p-treatment__title">一般歯科</h3>
          <div class="p-treatment__box">
            <figure class="p-treatment__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature1.jpg" alt="feature1"  loading="lazy">
            </figure>
            <div class="p-treatment__body">
              <h4 class="p-treatment__title">タイトルが入ります</h4>
              <p class="p-treatment__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-sub-treatment__item p-treatment fadeUpTrigger"  id="p-treatment__content2">
        <div class="p-treatment__inner">
          <h3 class="p-treatment__title">小児歯科</h3>
          <div class="p-treatment__box">
            <figure class="p-treatment__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature1.jpg" alt="feature1"  loading="lazy">
            </figure>
            <div class="p-treatment__body">
              <h4 class="p-treatment__title">タイトルが入ります</h4>
              <p class="p-treatment__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-sub-treatment__item p-treatment fadeUpTrigger"  id="p-treatment__content3">
        <div class="p-treatment__inner">
          <h3 class="p-treatment__title">予防歯科</h3>
          <div class="p-treatment__box">
            <figure class="p-treatment__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature1.jpg" alt="feature1"  loading="lazy">
            </figure>
            <div class="p-treatment__body">
              <h4 class="p-treatment__title">タイトルが入ります</h4>
              <p class="p-treatment__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-sub-treatment__item p-treatment fadeUpTrigger"  id="p-treatment__content4">
        <div class="p-treatment__inner">
          <h3 class="p-treatment__title">矯正歯科</h3>
          <div class="p-treatment__box">
            <figure class="p-treatment__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/feature1.jpg" alt="feature1"  loading="lazy">
            </figure>
            <div id="works4" class="p-treatment__body">
              <h4 class="p-treatment__title">タイトルが入ります</h4>
              <p class="p-treatment__text">テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。テキストです。</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>