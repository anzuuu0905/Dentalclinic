<?php
    $home = esc_url(home_url('/'));
  ?>

<?php get_header(); ?>
<section class="l-sub-contact p-sub-contact">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title"><?php the_title(); ?></h2>
    </div>
  </div>
  <div class="p-sub-contact__inner l-inner">
    <div class="p-sub-contact__textBox">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="p-sub-contact__item c-btn">
        <a href="<?php echo $home ?>">TOPページへ</a>
    </div>

</section>    

<?php get_footer(); ?>