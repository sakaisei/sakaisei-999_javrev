<section class="search-by-criteria layout__sub">
  <div class="inner-layout layout__normal">
    <div class="ttl__layout small mb1em">
      <h3 class="ttl">条件やタグで動画作品を探す</h3>
      <p class="text">条件やタグを選んで、目的の動画作品を簡単に見つけましょう。</p>
    </div>
    <ul class="bnr__textbnrwrap">
      <li class="bnr__textbnr">
        <a href="/filtering/" class="icon__normal before filter white large">
          <span class="layout">
            <span class="ttl">好きな条件で探す<span class="pri">詳細検索</span></span>
            <span class="text">条件を選んで自分に合ったコンテンツを簡単に探せます。</span>
          </span>
        </a>
      </li>
      <li class="bnr__textbnr">
        <a href="/tag/" class="icon__normal before tag white large">
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