<?php get_header(); ?>

<section class="p-mv">
  <div class="p-mv__slick">
    <div class="p-slick">
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/common/mv1.jpg" alt="mv1"></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/common/mv2.jpg" alt="mv2"></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/common/mv3.jpg" alt="mv3"></div>
    </div>
  </div>
</section>

<!-- 当院について -->
<section class="l-margin p-about">
  <div class="p-about__inner l-inner">
    <h2 class="p-about__title">当院について</h2>
    <div class="p-about__wrapper">
      <div class="p-about__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/mv3.jpg" alt="mv3">
      </div>
      <div class="p-about__textbox">
        <p class="p-about__text">一宮市にあるHiro歯科クリニックです。
        <p class="p-about__text">歯科医療に関しては、さまざまな価値観をお持ちの患者さまがいらっしゃいます。当院では、治療の選択肢や適切な治療方法を示したうえで、患者さまが納得される治療をおこないます。患者さまと正面で向き合い、よくお話をして接していくうちに信頼関係を築き上げることが重要と考えます。</p>
      </div>
    </div>
    <!-- ボタン -->
    <div class="p-about__btn c-btn">
  <a href="#">当院についてはこちらから</a>
</div>
  </div>
</section>

<!-- 診察案内 -->
<section class="l-margin p-info">
  <div class="p-info__inner l-inner">
    <h2 class="p-info__title">診察案内</h2>
    <div class="p-info__cards">

    </div>

    <a href="" class="c-card">
      <figure class="c-card__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/mv3.jpg" alt="mv3">
      </figure>
      <div class="c-card__body">
        <h3 class="c-card__title">カードタイトル</h3>
        <p class="c-card__text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <div class="c-card__info">
          <div class="c-card__category">カテゴリ</div>
          <time class="c-card__time" datetime="2021-01-01">2021/01/01</time>
        </div>
      </div>
    </a>
    
    <div class="p-info__btn c-btn">
      <a href="#">診察案内はこちらから</a>
    </div>
  </div>
</section>

<!-- 診察時間 -->
<section class="l-margin p-consultation">
  <div class="p-consultation__inner l-inner">
    <h2 class="p-consultation__title">診療時間</h2>
    <div class="p-consultation__table">
      <table class="c-timetable">
        <thead>
          <tr>
            <th class="c-timetable__title">診察時間</th>
            <th class="c-timetable__text">月</th>
            <th class="c-timetable__text">火</th>
            <th class="c-timetable__text">水</th>
            <th class="c-timetable__text">木</th>
            <th class="c-timetable__text">金</th>
            <th class="c-timetable__text">土</th>
            <th class="c-timetable__text">日</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>9:30〜12:30</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
            <td>ー</td>
            <td>●</td>
            <td>●</td>
            <td>ー</td>
          </tr>
          <tr>
            <td>14:30〜19:00</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
            <td>ー</td>
            <td>●</td>
            <td>●</td>
            <td>ー</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="p-consultation__textbox">
        <p class="p-consultation__text">※休診日：木曜日・日曜日・祝祭日</p>
        <p class="p-consultation__text">※祝祭日がある週は木曜日診療する場合があります。</p>
    </div>
  </div>
  </section>

<?php get_footer(); ?>