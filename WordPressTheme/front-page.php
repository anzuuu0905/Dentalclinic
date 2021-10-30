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
<section class="l-margin p-about fadeUpTrigger">
  <div class="p-about__inner l-inner">
    <h2 class="p-about__title">当院について</h2>
    <div class="p-about__textbox">
        <p class="p-about__text">一宮市の「Hiro歯科クリニック」は、一宮駅直結の歯医者です。</p>
        <p class="p-about__text">当院では、患者さまと二人三脚で、その方に合った予防処置を行うことで、口から全身の健康を改善できるよう努めています。</p>
    </div>
    <div class="p-about__feature p-feature">
      <h3 class="p-feature__title">当院の５つの特徴</h3>
      <div class="p-feature__textbox">
        <div class="p-feature__leftbox">
          <p class="p-feature__text">１．地域に根差した医療</p>
          <p class="p-feature__text">２．丁寧な説明による信頼関係の構築</p>
          <p class="p-feature__text">３．二人三脚で進める予防診療</p>
        </div>
        <div class="p-feature__rightbox">
          <p class="p-feature__text">４．安心・安全な診療環境</p>
          <p class="p-feature__text">５．常に成長するクリニック</p>
        </div>
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
    <h2 class="p-info__title fadeUpTrigger">診察案内</h2>
    <div class="p-info__cards p-cardlist">  <!-- p-cardlistは、3つのカードの集合体を示す -->
      <!-- カード -->
      <a href="" class="c-card p-cardlist__item fadeUpTrigger">
        <figure class="c-card__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/treatment1.jpg" alt="mv3">
        </figure>
        <div class="c-card__body">
          <h3 class="c-card__title">一般歯科</h3>
          <p class="c-card__text">単に痛いところを治すだけでなく、根本的な原因を特定し、お口の中を健康することを目的として治療します。</p>
        </div>
        <!-- <div class="c-card__info">
          <span class="c-card__category">カテゴリ</span>
          <time class="c-card__time" datetime="2021-01-01">2021/01/01</time>
        </div> -->
      </a>
      <!-- カード -->
      <a href="" class="c-card p-cardlist__item fadeUpTrigger">
        <figure class="c-card__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/treatment2.jpg" alt="mv3">
        </figure>
        <div class="c-card__body">
          <h3 class="c-card__title">小児歯科</h3>
          <p class="c-card__text">一生大切な歯を守るために、歯医者嫌いにしない診療を心がけています。無理やり治療することはせず、お子さまのペースに合わせて診療を行います。</p>
        </div>
        <!-- <div class="c-card__info">
          <span class="c-card__category">カテゴリ</span>
          <time class="c-card__time" datetime="2021-01-01">2021/01/01</time>
        </div> -->
      </a>
      <!-- カード -->
      <a href="" class="c-card p-cardlist__item fadeUpTrigger">
        <figure class="c-card__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/treatment3.jpg" alt="mv3">
        </figure>
        <div class="c-card__body">
          <h3 class="c-card__title">予防歯科</h3>
          <p class="c-card__text">むし歯や歯周病は、「症状が発生してから治療する」のではなく「症状が発生する前に予防する」ことが大切です。定期的に検査することで、見落とされがちな口の病気を早期発見・早期治療できます。</p>
        </div>
        <!-- <div class="c-card__info">
          <span class="c-card__category">予防診療</span>
          <time class="c-card__time" datetime="2021-01-01">2021/01/01</time>
        </div> -->
      </a>

    </div>
    <div class="p-info__btn c-btn fadeUpTrigger">
      <a href="#">診察案内はこちらから</a>
    </div>
  </div>
</section>

<!-- 診察時間 -->
<div class="p-reception">
  <div class="p-reception__inner l-inner ">
    <section class="l-reception p-consultation fadeUpTrigger">
      <div class="p-consultation__inner">
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
    <section class="l-reception p-calendar fadeUpTrigger">
      <div class="p-calender__inner">
        <h2 class="p-calender__title">診療日</h2>
        <div class="p-calender__box">
          <?php echo do_shortcode( '[xo_event_calendar holidays="all,pm"]' ); ?>
        </div>
      </div>
    </section>
  </div>
</div>


<?php get_footer(); ?>