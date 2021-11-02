<?php get_header(); ?>
<?php
    $topics = esc_url(home_url('/topics/'));
  ?>
<section class="p-sub-topic">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h1 class="c-comon-title__title">お知らせ</h1>
    </div>
  </div>
  <div class="p-sub-topic__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

          <div class="p-sub-topic__box">
            <time datetime="<?php the_time('c') ?>" class="p-sub-topic__date"><?php the_time('Y.m.d') ?>
            </time>
            <h2 class="p-sub-topic__title"><?php the_title(); ?></h2>
            <p class="p-sub-topic__text"><?php the_content(); ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

  </div>

  <div class="p-sub-topic__pager">
    <div class="p-sub-topic__before">
      <?php next_post_link('%link', '&lt; 前の記事'); ?>
    </div>
    <div class="p-sub-topic__btn c-btn">
        <a href="<?php echo $topics ?>">お知らせ一覧</a>
    </div>
    <div class="p-sub-topic__after">
      <?php previous_post_link('%link', '次の記事 &gt;'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>