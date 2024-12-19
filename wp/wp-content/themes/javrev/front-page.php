<?php get_header(); ?>
<main class="main__common">
  <section class="fv">
    <div class="inner-layout">
      <div class="mainttl">
        <h1>有償動画作品を<br>徹底レビューしました！</h1>
        <p>人気動画を真面目にレビューしました。</p>
      </div>
      <ul class="btnlayout">
        <li class="btn__normal pri">
          <a href="" class="icon__normal filter white">好きな条件で探す</a>
        </li>
        <li class="btn__normal cta">
          <a href="" class="icon__normal video white">おすすめ提供元</a>
        </li>
      </ul>
    </div>
    <p class="text">広告フリーで快適な視聴体験をお楽しみください！</p>
    <div class="iconr18">R18</div>
    <div class="iconjr">
      <span class="hidden__visually">JR JAVREV</span>
    </div>
    <div class="fvbglayer"></div>
  </section>
  <section class="contents">
    <div class="inner-layout layout__normal layout__padding">
      <div class="ttl__layout">
        <h2 class="ttl">ALL Reviews</h2>
        <p class="text">日本動画を真面目にレビューしました。</p>
      </div>
      <ul class="btn__query gray-light">
        <li>
          <a href="/filtering/" class="icon__normal filter gray-light">好きな条件で探す</a>
        </li>
        <li>
          <a href="/tag/" class="icon__normal tag gray-light">好きなタグで探す</a>
        </li>
        <li>
          <a href="/search/" class="icon__normal search gray-light">キーワード検索</a>
        </li>
      </ul>
      <div class="card__normalwrap">
        <?php get_template_part('assets/inc/dev/card1'); ?>
        <?php get_template_part('assets/inc/dev/card2'); ?>
        <?php get_template_part('assets/inc/dev/card3'); ?>
        <?php get_template_part('assets/inc/dev/card4'); ?>
        <?php get_template_part('assets/inc/dev/card5'); ?>
        <?php get_template_part('assets/inc/dev/card6'); ?>
      </div>
    </div>
  </section>
  <nav class="list__pagination layout__sub" aria-label="ページナビゲーション">
    <div class="inner-layout layout__normal">
      <ul class="pages">
        <li class="btnprev"><span class="prev is--disabled">前のページ</span></li>
        <li><span class="num is--current">1</span></li>
        <li><a href="/page/2/" class="num">2</a></li>
        <li><a href="/page/3/" class="num">3</a></li>
        <li><a href="/page/4/" class="num">4</a></li>
        <li><a href="/page/5/" class="num">5</a></li>
        <li><a href="/page/6/" class="num">6</a></li>
        <li><span class="pageitem-ellipsis">…</span></li>
        <li><a href="/page/89" class="num">89</a></li>
        <li class="btnnext"><a href="/page/2/" class="next">次のページ</a></li>
      </ul>
    </div>
  </nav>
</main>

<aside class="sidebar">
  <section class="popular-tags layout__sub">
    <div class="inner-layout layout__normal">
      <div class="ttl__layout small mb1em">
        <h3 class="ttl">注目の人気タグ一覧</h3>
        <p class="text">話題のタグから、おすすめのコンテンツを見つけましょう。</p>
      </div>
      <nav aria-label="人気タグリスト">
        <ul class="btn__tag large">
          <li><a href="#" class="tag">テスト</a></li>
          <li><a href="#" class="tag">タグのテスト</a></li>
          <li><a href="#" class="tag">アスリート</a></li>
          <li><a href="#" class="tag">筋肉</a></li>
          <li><a href="#" class="tag">SNS</a></li>
          <li><a href="#" class="tag">話題性抜群</a></li>
          <li><a href="#" class="tag">炎上</a></li>
          <li><a href="#" class="tag">芸能人</a></li>
          <li><a href="#" class="tag pri">全てのタグを見る</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <section class="search-by-criteria layout__sub">
    <div class="inner-layout layout__normal">
      <div class="ttl__layout small mb1em">
        <h3 class="ttl">条件やタグで動画作品を探す</h3>
        <p class="text">条件やタグを選んで、目的の動画作品を簡単に見つけましょう。</p>
      </div>
      <ul class="bnr__textbnrwrap">
        <li class="bnr__textbnr">
          <a href="/filtering/" class="icon__normal filter white large">
            <span class="layout">
              <span class="ttl">好きな条件で探す<span class="pri">詳細検索</span></span>
              <span class="text">条件を選んで自分に合ったコンテンツを簡単に探せます。</span>
            </span>
          </a>
        </li>
        <li class="bnr__textbnr">
          <a href="/tag/" class="icon__normal tag white large">
            <span class="layout">
              <span class="ttl">好きなタグで探す<span class="pri">簡単</span></span>
              <span class="text">タグを選んで関連するコンテンツを素早く見つけられます。</span>
            </span>
          </a>
        </li>
      </ul>
      <?php
        set_query_var('search_form_class', '');
        get_template_part('assets/inc/parts/search-form');
      ?>
    </div>
  </section>
</aside>
<?php get_footer(); ?>