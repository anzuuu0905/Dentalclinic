<?php get_header(); ?>
<div class="p-sub-access">
  <!-- 共通タイトル -->
  <div class="c-comon-title">
    <div class="c-comon-title__inner">
      <h1 class="c-comon-title__title"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="p-sub-access__inner l-inner">
    <div class="p-sub-access__map p-map fadeUpTrigger">
      <h2 class="p-map__title">アクセスマップ</h2>
      <div class="p-map__iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3256.181243653627!2d136.79548386459334!3d35.30147775831357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5oSb55-l55yM5LiA5a6u5biC5qCE77yT5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1635602613956!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    <div class="p-sub-access__box fadeUpTrigger">
      <div class="p-sub-access__item">
        <dl class="p-sub-access__title"><i class="fa fa-home"></i> 住所</dl>
        <dt class="p-sub-access__text">〒491-0858 愛知県一宮市栄３丁目１</dt>
      </div>
      <div class="p-sub-access__item">
        <dl class="p-sub-access__title"><i class="fa fa-train"></i> 電車でのお越しの方</dl>
        <dt class="p-sub-access__text">「〇〇駅」6番出口から徒歩3分です。</dt>
      </div>
      <div class="p-sub-access__item">
        <dl class="p-sub-access__title"><i class="fa fa-bus"></i> バスでお越しの方</dl>
        <dt class="p-sub-access__text">「〇〇」バス停より、北に徒歩2分です。</dt>
      </div>
      <div class="p-sub-access__item">
        <dl class="p-sub-access__title"><i class="fa fa-car"></i> 車でお越しの方</dl>
        <dt class="p-sub-access__text">駐車場10台完備。〇〇方面から「〇〇」交差点の「△△」隣です。</dt>
      </div>
    </ｄiv>
  </div>
</div>
<?php get_footer(); ?>