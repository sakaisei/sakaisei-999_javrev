<article class="card__normal small">
  <a href="#" class="link">
    <div class="swiper mainslider">
      <div class="swiper-wrapper">
        <div class="swiper-slide mainslider-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/3.jpg" alt="画像3">
        </div>
        <div class="swiper-slide mainslider-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/2.jpg" alt="画像2">
        </div>
        <div class="swiper-slide mainslider-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/4.jpg" alt="画像3">
        </div>
      </div>
      <div class="quality">
        <ul class="btn__tag small">
          <li class="tag black alpha">HD</li>
          <li class="tag black alpha">VR</li>
        </ul>
      </div>
      <div class="playtime">
        <ul class="btn__tag small">
          <li class="tag black alpha pointer-events-none" data-duration="PT1H26M12S">1時間26分</li>
        </ul>
      </div>
    </div>
    <div class="inner-layout-1">
      <div class="layoutcol2">
        <div class="icon__ratesmall">
          <div class="stars">
            <span class="star star-filled"></span>
          </div>
          <span class="average-score">3.6</span>
        </div>
        <time datetime="<?php echo get_the_date('c'); ?>">
          <?php echo date_i18n(get_option('date_format'), strtotime(get_the_date())); ?>
        </time>
      </div>
      <h3 class="ttl">SNSで話題の美人アスリートに直撃してみようかなとか考えた。未だ知らない、鈴木ナナの真相に迫る！</h3>
    </div>
  </a>
  <div class="inner-layout-2">
    <div class="tmbsliderwrap">
      <div class="swiper tmbslider">
        <div class="swiper-wrapper">
          <div class="swiper-slide tmbslider-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/3.jpg" alt="画像3">
          </div>
          <div class="swiper-slide tmbslider-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/2.jpg" alt="画像2">
          </div>
          <div class="swiper-slide tmbslider-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/4.jpg" alt="画像3">
          </div>
        </div>
      </div>
    </div>
    <nav class="tagwrap" aria-label="タグリスト">
      <ul class="btn__tagtext">
        <li><a href="#" class="tag">テスト</a></li>
        <li><a href="#" class="tag">タグのテスト</a></li>
        <li><a href="#" class="tag">アスリート</a></li>
        <li><a href="#" class="tag">筋肉</a></li>
        <li><a href="#" class="tag">SNS</a></li>
        <li><a href="#" class="tag">話題性抜群</a></li>
        <li><a href="#" class="tag">炎上</a></li>
        <li><a href="#" class="tag">芸能人</a></li>
        <li><a href="#" class="tag">美人アスリート</a></li>
      </ul>
    </nav>
    <div class="btn__normal pri small">
      <button class="btn" type="button" onclick="location.href='#'">もっと見る</button>
    </div>
  </div>
</article>