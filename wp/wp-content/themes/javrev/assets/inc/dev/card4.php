<article class="card__normal">
  <a href="#" class="link">
    <div class="swiper mainslider">
      <div class="swiper-wrapper">
        <div class="swiper-slide mainslider-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/5.jpg" alt="画像3">
        </div>
        <div class="swiper-slide mainslider-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/8.jpg" alt="画像2">
        </div>
        <div class="swiper-slide mainslider-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/1.jpg" alt="画像3">
        </div>
      </div>
      <div class="quality">
        <ul class="btn__tag large">
          <li class="tag black alpha">HD</li>
          <li class="tag black alpha">VR</li>
        </ul>
      </div>
      <div class="playtime">
        <ul class="btn__tag large">
          <li class="tag black alpha" data-duration="PT1H26M12S">1時間26分</li>
        </ul>
      </div>
    </div>
    <div class="inner-layout-1">
      <div class="layoutcol2">
        <div class="icon__rate" data-rating="3.5">
          <span class="average-score">3.5</span>
          <div class="stars"></div>
        </div>
        <time datetime="<?php echo get_the_date('c'); ?>">
          <?php echo date_i18n(get_option('date_format'), strtotime(get_the_date())); ?>
        </time>
      </div>
      <h3 class="ttl">我が輩は猫である。名前はまだ無い。どこで産まれたのかとんと検討もつかぬ。</h3>
    </div>
  </a>
  <div class="inner-layout-2">
    <div class="tmbsliderwrap">
      <div class="swiper tmbslider">
        <div class="swiper-wrapper">
          <div class="swiper-slide tmbslider-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/5.jpg" alt="画像3">
          </div>
          <div class="swiper-slide tmbslider-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/8.jpg" alt="画像2">
          </div>
          <div class="swiper-slide tmbslider-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/1.jpg" alt="画像3">
          </div>
        </div>
      </div>
    </div>
    <nav class="tagwrap" aria-label="タグリスト">
      <ul class="btn__tag">
        <li><a href="#" class="tag">テスト</a></li>
        <li><a href="#" class="tag">タグのテスト</a></li>
        <li><a href="#" class="tag">アスリート</a></li>
        <li><a href="#" class="tag">タグのテスト</a></li>
        <li><a href="#" class="tag">アスリート</a></li>
      </ul>
    </nav>
    <div class="btn__normal pri w87--sp">
      <button class="btn" type="button" onclick="location.href='#'">もっと見る</button>
    </div>
  </div>
</article>