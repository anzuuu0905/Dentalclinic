<?php get_header(); ?>
<?php
    $topics = esc_url(home_url('/topics/'));
    $products = esc_url(home_url('/archives/products/'));
  ?>
<section class="p-sub-product">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h2 class="c-comon-title__title">商品</h2>
    </div>
  </div>
  <div class="p-sub-product__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>

        <div class="p-sub-product__box fadeUpTrigger">
          <figure class="p-sub-product__img c-card__img">
              <?php if( get_field('product_image') ): ?>
                <img src="<?php the_field('product_image'); ?>" />
              <?php endif; ?>
            </figure>

          <!-- <time datetime="<?php the_time('c') ?>" class="p-sub-product__date"><?php the_time('Y.m.d') ?>
          </time> -->
          <div class="p-sub-product__textbox">
            <h3 class="p-sub-product__title"><?php the_title(); ?></h3>
            <p class="p-sub-product__price">
              <?php if( get_field('product_price') ): ?>
                <?php echo number_format(get_field('product_price')); ?> 円
              <?php endif; ?>
            </p>
            <table class="p-sub-product__lists">
              <tr>
                <?php 
                  $number = get_field('product_number');
                  if( $number ):
                    $fielddata = get_field_object('product_number');
                ?>
                  <td class="p-sub-product__label">
                    <label>
                      <?php echo $fielddata['label']; ?>
                      </label>
                  </td>
                  <td class="p-sub-product__text">
                      <?php the_field('product_number'); ?>
                  </td>
                <?php endif; ?>
              </tr>
              <tr>
                <?php 
                  $count = get_field('product_count');
                  if( $count ):
                    $fielddata = get_field_object('product_count');
                ?>
                  <td class="p-sub-product__label">
                    <label>
                      <?php echo $fielddata['label']; ?>
                    </label>
                  </td>
                  <td class="p-sub-product__text">
                      <?php the_field('product_count'); ?>
                  </td>
                <?php endif; ?>
              </tr>
              <tr>
                <?php 
                  $number = get_field('product_color');
                  if( $number ):
                    $fielddata = get_field_object('product_color');
                ?>
                  <td class="p-sub-product__label">
                    <label>
                      <?php echo $fielddata['label']; ?>
                    </label>
                  </td>
                  <td class="p-sub-product__text">
                      <?php the_field('product_color'); ?>
                  </td>
                <?php endif; ?>
              </tr>
            </table>
          </div>
          <!-- <p class="p-sub-product__text"><?php the_content(); ?></p> -->
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <div class="p-sub-product__comment fadeUpTrigger">
      <?php comments_template(); ?>
    </div>


  </div>

  <div class="p-sub-product__pager p-pager">
    <div class="p-pager__before">
      <?php next_post_link('%link', '&lt; 前の記事'); ?>
    </div>
    <div class="p-pager__btn c-btn">
        <a href="<?php echo $products ?>">商品一覧</a>
    </div>
    <div class="p-pager__after">
      <?php previous_post_link('%link', '次の記事 &gt;'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>