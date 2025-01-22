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
          <div class="stats">




            <div class="btn__small good">      <?php
// 翻訳グループ内の「いいね」数を表示
display_likes_by_translation_group();
?></div>




            <div class="btn__small good"><?php echo do_shortcode('[wp_ulike]'); ?></div>
            <div class="btn__small view"><?php echo do_shortcode('[post-views]'); ?></div>
            <time datetime="<?php echo get_the_date('c'); ?>">
              <?php echo date_i18n(get_option('date_format'), strtotime(get_the_date())); ?>
            </time>
          </div>
          <h1>SNSで話題の美人アスリートに直撃インタビュー！未だ知らない、鈴木ナナの真相に迫る！</h1>
        </div>
      </div>




      <div class="cta__small">
        <div class="inner-layout layout__article">
          <div class="btn__normal pri iconright max-width--small margin-inline-auto fixedsizenormall--pc">
            <a href="#" target="_blank" rel="noopener" class="icon__normal before icon-external-link white" aria-label="サンプル動画を見るボタン">サンプル動画を見る</a>
          </div>
          <div class="details js--acmenu">
            <div class="click">
              <p class="text icon__normal after icon-add white">入会案内</p>
            </div>
            <div class="btn__normal cta twoline js--acmenu-content iconright max-width--small margin-inline-auto fixedsizenormall--pc">
              <a href="#" target="_blank" rel="noopener" class="icon__normal before icon-external-link white fixedsizenormall--pc" aria-label="英語版の入会案内に遷移するボタン">
                <span class="twolinelarge fixedsize--pc">今すぐ無料で試す</span>
                <span class="twolinesmall fixedsize--pc">入会案内（英語）</span>
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
        <!-- ナビゲーション矢印 -->
        <div class="swiper-button-prev article__mainslider-prev" aria-label="前の画像に戻るボタン"></div>
        <div class="swiper-button-next article__mainslider-next" aria-label="次の画像に進むボタン"></div>
      </div>
      <section class="list__meta">
        <div class="list__metabox">
          <div class="inner-layout">
            <span class="ttlmetasmall icon__normal before video gray-light">作品名</span>
            <div class="ttlmetalargewrap">
              <div class="icon__rate fixedsize--pc" data-rating="3.5">
                <span class="average-score">3.5</span>
                <div class="stars"></div>
              </div>
              <h2 class="ttlmetalarge">鈴木ナナに赤裸々告白のインタビューを実施！ Vol.1</h2>
              <p class="read">鈴木ナナの衝撃告白！？お顔を真っ赤にしながら赤裸々に告白した内容に撮影スタッフ一同、唖然。それでも可愛いから許せちゃうなんて、もうお手上げですってば！</p>
            </div>
            <div class="ttl-localization js--copy">
              <span class="language-label" lang="ja">日本語作品名</span>
              <h3 class="ttl-localized js--copybtn icon__normal icon-copy after gray-3 small" aria-label="鈴木ナナに赤裸々告白のインタビューを実施！ Vol.1（日本語）" lang="ja">鈴木ナナに赤裸々告白のインタビューを実施！ Vol.1</h3>
              <div class="toast__content js--copycontent" data-message-success="<?php echo lang('copy-success'); ?>" data-message-error="<?php echo lang('copy-error'); ?>"></div>
            </div>
            <div class="ttl-localization js--copy">
              <span class="language-label" lang="en">英語作品名</span>
              <h3 class="ttl-localized js--copybtn icon__normal icon-copy after gray-3 small" aria-label="Exclusive Interview with Nana Suzuki! Vol.1 (English)" lang="en">Exclusive Interview with Nana Suzuki! Vol.1</h3>
              <div class="toast__content js--copycontent" data-message-success="<?php echo lang('copy-success'); ?>" data-message-error="<?php echo lang('copy-error'); ?>"></div>
            </div>
          </div>
        </div>
        <div class="list__metabox">
          <div class="inner-layout">
            <h4 class="ttlmetasmall">映像形式 / 再生時間</h4>
            <div class="col2 col2-aline-item-center">
              <nav class="tagwrap" aria-label="映像形式タグリスト">
                <ul class="btn__tag fixedsize--pc">
                  <li><a href="#" class="tag tag-rev">REV</a></li>
                  <li><a href="#" class="tag tag-vr">VR</a></li>
                  <li><a href="#" class="tag tag-4k">4K</a></li>
                </ul>
              </nav>
              <span>/</span>
              <time class="playtime" datetime="PT48M">0時間48分</time>
            </div>
          </div>
        </div>
        <div class="list__metabox">
          <div class="inner-layout">
            <h4 class="ttlmetasmall">出演</h4>
            <nav class="tagwrap" aria-label="出演タグリスト">
              <ul class="btn__tag fixedsize--pc">
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
                <ul class="btn__tag fixedsize--pc">
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
              <ul class="btn__tag fixedsize--pc">
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
                <span class="iconwrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-actor.png" alt="男優のアイコン">
                </span>
                <figcaption>男優</figcaption>
              </figure>
              <p>リリちゃん素敵です！めちゃくちゃ可愛い発言連発ですね！</p>
            </div>
            <div class="dialog">
              <figure>
                <span class="iconwrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/icon-actress.jpg" alt="リリちゃんのアイコン">
                </span>
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
          <section class="conversation">
            <div class="dialog">
              <figure>
                <span class="iconwrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-actor.png" alt="男優のアイコン">
                </span>
                <figcaption>男優</figcaption>
              </figure>
              <p>どーしてそんなに可愛いの？？笑</p>
            </div>
            <div class="dialog">
              <figure>
                <span class="iconwrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/icon-actress.jpg" alt="リリちゃんのアイコン">
                </span>
                <figcaption>リリちゃん</figcaption>
              </figure>
              <p>可愛いですか…？<br>なんでしょーね🤔</p>
            </div>
            <div class="dialog">
              <figure>
                <span class="iconwrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-actor.png" alt="男優のアイコン">
                </span>
                <figcaption>男優</figcaption>
              </figure>
              <p>自覚なしかよッ！笑笑笑</p>
            </div>
            <div class="dialog">
              <figure>
                <span class="iconwrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/icon-actress.jpg" alt="リリちゃんのアイコン">
                </span>
                <figcaption>リリちゃん</figcaption>
              </figure>
              <p>そういうお兄さんも格好良いです😊❤️</p>
            </div>
            <div class="dialog">
              <figure>
                <span class="iconwrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-actor.png" alt="男優のアイコン">
                </span>
                <figcaption>男優</figcaption>
              </figure>
              <p>ぐはッ……！！！</p>
            </div>
          </section>
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
    <footer class="article__footer layout__padding">
      <div class="cta__large inner-layout layout__article">
        <div class="ttllayout">
          <h2>JAVの素晴らしさを<br>もっと世界に。</h2>
          <ul>
          <li class="logo-dev">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/devlogo.png" alt="サービス先ロゴ" width="246" height="57">
          </li>
          <li class="logo-javrev">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="JAVREV" width="220" height="43">
          </li>
          </ul>
        </div>
        <ul class="list__benefits">
          <li>全動画見放題</li>
          <li>3日間の無料体験</li>
          <li>月間 / 年間契約</li>
        </ul>
        <div class="highlighttext">
          <p>高品質で安心・安全な有償JAV。</p>
          <p>広告に煩わされる事の無い極上の時間を、<br>あなたへお届けします。</p>
        </div>
        <div class="btn__normal cta twoline js--acmenu-content iconright max-width--normal margin-inline-auto fixedsizenormall--pc">
          <a href="#" target="_blank" rel="noopener" class="icon__normal before icon-external-link white fixedsizenormall--pc" aria-label="英語版の入会案内に遷移するボタン">
            <span class="twolinelarge fixedsize--pc">今すぐ無料で試す</span>
            <span class="twolinesmall fixedsize--pc">入会案内（英語）</span>
          </a>
        </div>
        <a href="" class="linkother icon__normal after icon-external-link gray inline-block" aria-label="日本語版の入会案内に遷移するボタン">入会案内(日本語)</a>
        <div class="box">
          <h3 class="ctaboxlogo logo-dev">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/devlogo.png" alt="サービス先ロゴ" width="246" height="57">
          </h3>
          <p>配信元は2001年から運営している、信頼と実績ある老舗日本動画専門サイトです。</p>
        </div>
        <ul class="list__asterisk gray">
          <li>無料トライアルプラン$0、月間プラン$44、年間プラン$440。合計3つのプランをご用意しております。</li>
          <li>無料トライアルプラン$0は英語ページ専用の特典となります。</li>
        </ul>
      </div>
    </footer>
  </article>
  <?php get_template_part('assets/inc/parts/list__postnav'); ?>
</main>
<aside class="sidebar__layout">
  <div class="inner-layout layout__normal layout__padding">
    <div class="ttl__layout mb1em">
      <h2 class="ttl">関連記事</h2>
      <p class="text">この記事に関連する内容をピックアップしました。</p>
    </div>
    <div class="card__normalwrap col2">
      <?php get_template_part('assets/inc/dev/card1small'); ?>
      <?php get_template_part('assets/inc/dev/card2small'); ?>
      <?php get_template_part('assets/inc/dev/card3small'); ?>
      <?php get_template_part('assets/inc/dev/card4small'); ?>
      <?php get_template_part('assets/inc/dev/card5small'); ?>
      <?php get_template_part('assets/inc/dev/card6small'); ?>
      <?php get_template_part('assets/inc/dev/card1small'); ?>
      <?php get_template_part('assets/inc/dev/card2small'); ?>
      <?php get_template_part('assets/inc/dev/card3small'); ?>
      <?php get_template_part('assets/inc/dev/card4small'); ?>
      <?php get_template_part('assets/inc/dev/card5small'); ?>
      <?php get_template_part('assets/inc/dev/card6small'); ?>
    </div>
  </div>
  <?php get_template_part('assets/inc/parts/popular-tags'); ?>
  <?php get_template_part('assets/inc/parts/search-by-criteria'); ?>
</aside>
<?php get_footer(); ?>