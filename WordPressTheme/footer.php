<footer class="l-footer p-footer">
  <div class="p-footer__inner l-inner">
  <div class="p-reception">
  <div class="p-reception__inner">
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
        <div class="p-footer__logo">
          <!-- Hiro歯科クリニック -->
          <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"
          　　　srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"
              alt="Hiro歯科クリニック" loading="lazy">
        </div>
        <p class="p-footer__address">〒491-0858 愛知県一宮市栄３丁目１</p>
        <p class="p-footer__tel"><i class="fa fa-phone fa-rotate-90"></i>999-9999-9999</p>
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


    <div class="p-footer__copyright fadeUpTrigger">
      <small>&copy; 2021 Hiro Dental Clinic.</small>
    </div>
    <div class="c-top">
      <a href="#" class="c-top__link"><i class="fas fa-arrow-up" aria-hidden="true"></i></a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<!-- slickのJavaScript -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>