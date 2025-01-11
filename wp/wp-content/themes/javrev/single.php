<?php get_header(); ?>
<?php
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<nav class="list__breadcrumb margin-top">', '</nav>');
  }
?>
<main class="main__common">
  <article class="article__wrap">
    <header class="article__header">
      <div class="ttl__article">
        <div class="inner-layout layout__article">
          <time datetime="<?php echo get_the_date('c'); ?>">
            <?php echo date_i18n(get_option('date_format'), strtotime(get_the_date())); ?>
          </time>
          <h1>SNSで話題の美人アスリートに直撃インタビュー！未だ知らない、鈴木ナナの真相に迫る！</h1>
        </div>
      </div>
      <div class="cta__small">
        <div class="inner-layout layout__article">
          <div class="btn__normal pri iconright">
            <a href="#" target="_blank" rel="noopener" class="icon__normal before icon-external-link white" aria-label="サンプル動画を見るボタン">サンプル動画を見る</a>
          </div>
          <div class="details js--acmenu">
            <div class="click">
              <p class="text icon__normal after icon-add white">入会案内</p>
            </div>
            <div class="btn__normal cta twoline js--acmenu-content iconright">
              <a href="#" target="_blank" rel="noopener" class="icon__normal before icon-external-link white medium" aria-label="英語版の入会案内に遷移するボタン">
                <span class="twolinelarge">今すぐ無料で試す</span>
                <span class="twolinesmall">入会案内（英語）</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper__fv inner-layout">
        <div class="swiper article__mainslider" aria-label="メインスライダー。○○の画像を表示します。">
          <div class="swiper-wrapper">
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/9.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/10.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/11.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/12.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/7.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/8.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/1.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/3.jpg" alt="">
            </div>
          </div>
          <!-- ナビゲーション矢印 -->
          <div class="swiper-button-prev" aria-label="前の画像に戻るボタン"></div>
          <div class="swiper-button-next" aria-label="次の画像に進むボタン"></div>
          <div class="swiper-pagination-counter">
            <span class="swiper-pagination-current">1</span> /
            <span class="swiper-pagination-total">0</span>
          </div>
        </div>
        <div class="swiper article__tmbslider" aria-label="メインスライダーのサムネイルです。">
          <div class="swiper-wrapper">
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/9.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/10.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/11.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/12.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/7.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/8.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/1.jpg" alt="">
            </div>
            <div class="swiper-slide js--contain-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <section class="list__meta">
        <h2 class="ttlmetalarge">鈴木ナナに赤裸々告白のインタビューを実施！ Vol.1（作品タイトル）</h2>
        <div class="list__metabox">
          <div class="inner-layout">
            <h4 class="ttlmetasmall">評価</h4>
            <div class="icon__rate" data-rating="3.5">
              <span class="average-score">3.5</span>
              <div class="stars"></div>
            </div>
            <nav class="tagwrap" aria-label="映像形式タグリスト">
              <ul class="btn__tag">
                <li><a href="#" class="tag tag-rev">REV</a></li>
                <li><a href="#" class="tag tag-vr">VR</a></li>
                <li><a href="#" class="tag tag-4k">4K</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="list__metabox">
          <div class="inner-layout">
            <h4 class="ttlmetasmall">出演</h4>
            <nav class="tagwrap" aria-label="出演タグリスト">
              <ul class="btn__tag">
                <li><a href="#" class="tag">鈴木ナナ</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="list__metabox">
          <div class="inner-layout">
            <h4 class="ttlmetasmall">配信 / 再生時間</h4>
            <div class="col2 col2-aline-item-center">
              <nav class="tagwrap" aria-label="配信タグリスト">
                <ul class="btn__tag">
                  <li>
                    <a href="#" class="tag media">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/media/caribbeancom/logo-jp.png" alt="カリビアンコム">
                    </a>
                  </li>
                </ul>
              </nav>
              <time class="playtime" datetime="PT48M">0時間48分</time>
            </div>
            <p class="icon__helpwrap js--tooltip">
              配信元の○○○について
              <button type="button" class="icon" aria-label="サービス先についての説明を読む"></button>
              <span class="tooltip">
                ここにサービス先の詳細説明を記載します。ここにサービス先の詳細説明を記載します。ここにサービス先の詳細説明を記載します。ここにサービス先の詳細説明を記載します。<br>テキスト
                <button type="button" class="tooltip-close" aria-label="閉じる"></button>
              </span>
            </p>
          </div>
        </div>
        <div class="list__metabox">
          <div class="inner-layout">
            <h4 class="ttlmetasmall">料金プラン</h4>
            <dl class="list__dlcolon">
              <dt>無料トライアルプラン</dt>
              <dd class="free">$0（三日間）</dd>
            </dl>
            <dl class="list__dlcolon">
              <dt>月額プラン</dt>
              <dd>$44</dd>
            </dl>
            <dl class="list__dlcolon">
              <dt>年間プラン</dt>
              <dd>$440</dd>
            </dl>
            <p class="price">
              <a href="" target="_blank" class="icon__normal after icon-external-link gray-light" rel="noopener">料金プランの詳細を確認する（遷移先は英語です）</a>
            </p>
          </div>
        </div>
        <div class="list__metabox">
          <div class="inner-layout">
            <h4 class="ttlmetasmall">タグ</h4>
            <nav class="tagwrap" aria-label="タグリスト">
              <ul class="btn__tag">
                <li><a href="#" class="tag">タグA</a></li>
                <li><a href="#" class="tag">タグB</a></li>
                <li><a href="#" class="tag">タグC</a></li>
                <li><a href="#" class="tag">タグD</a></li>
                <li><a href="#" class="tag">タグE</a></li>
                <li><a href="#" class="tag">タグF</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </section>
    </header>
    <section class="article__the_contents">
      <div class="inner-layout layout__article">
        <section class="sec">
          <h2>吾輩は猫である</h2>
          <p>吾輩わがはいは猫である。名前はまだ無い。どこで生れたかとんと見当けんとうがつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。</p>
          <section class="conversation">
            <div class="dialog">
              <figure>
                <img src="actor.jpg" alt="男優のアイコン">
                <figcaption>男優</figcaption>
              </figure>
              <p>リリちゃん素敵です！</p>
            </div>
            <div class="dialog">
              <figure>
                <img src="lily.jpg" alt="リリちゃんのアイコン">
                <figcaption>リリちゃん</figcaption>
              </figure>
              <p>わー！ありがとう😊</p>
            </div>
          </section>
          <p>吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪どうあくな種族であったそうだ。この書生というのは時々我々を捕つかまえて煮にて食うという話である。</p>
          <div class="img js--contain-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/7.jpg" alt="">
          </div>
        </section>
        <section class="sec">
          <h2>しかしその当時は何という考もなかったから別段恐しい</h2>
          <p>ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。</p>
          <div class=""></div>
          <p>ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。</p>
          <div class="img col2 js--contain-img">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/9.jpg" alt="">
              <figcaption>キャプションは必ず存在します</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/5.jpg" alt="">
              <figcaption>キャプションは必ず存在します</figcaption>
            </figure>
          </div>
        </section>
      </div>
    </section>
    <footer class="article__footer">
      <div class="cta__large inner-layout layout__article">
        <div class="ttllayout">
          <h2>JAVの素晴らしさを<br>もっと世界に。</h2>
          <ul>
            <li><img src="" alt="サービス先logo"></li>
            <li><img src="" alt="JAVREV"></li>
          </ul>
        </div>
        <ul class="list__benefits">
          <li>全動画見放題</li>
          <li>3日間の無料体験</li>
          <li>月間 / 年間契約</li>
        </ul>
        <p>高品質で安心・安全な有償日本動画。<br>広告に煩わされる事の無い極上の時間を、<br>あなたへお届けします。</p>
        <div class="btn__normal cta twoline js--acmenu-content iconright">
          <a href="#" target="_blank" rel="noopener" class="icon__normal before icon-external-link white medium" aria-label="英語版の入会案内に遷移するボタン">
            <span class="twolinelarge">今すぐ無料で試す</span>
            <span class="twolinesmall">入会案内（英語）</span>
          </a>
        </div>
        <a href="" aria-label="日本語版の入会案内に遷移するボタン">入会案内（日本語）</a>
        <div class="box">
          <h3><img src="" alt="サービス先logo"></h3>
          <p>配信元は2001年から運営している、信頼と実績ある老舗日本動画専門サイトです。</p>
        </div>
        <ul class="list__rice">
          <li>無料トライアルプラン$0、月間プラン$44、年間プラン$4403つのプランをご用意しております。</li>
          <li>無料トライアルプラン$0は英語ページ専用の特典となります。</li>
        </ul>
      </div>
    </footer>
  </article>
  <nav class="btn__prevnext" aria-label="前の記事と次の記事のナビゲーション">
    <ul>
      <li><a href="/previous-article" rel="prev">前の記事</a></li>
      <li><a href="/next-article" rel="next">次の記事</a></li>
    </ul>
  </nav>
</main>
<aside class="sidebar__layout">
  <?php get_template_part('assets/inc/parts/popular-tags'); ?>
  <?php get_template_part('assets/inc/parts/search-by-criteria'); ?>
</aside>
<?php get_footer(); ?>