<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="gnav__modal">
  <div class="inner-layout">
    <div class="gnav__logo">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="JAVREV">
        <span class="lang">JP</span>
      </a>
    </div>
    <button class="gnav__hamburger" aria-label="グローバルナビゲーションを表示">
      <div class="border"></div>
    </button>
    <nav class="gnav__nav" aria-label="グローバルナビゲーション">
      <a href="/" class="logo" aria-label="トップページへ戻る">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="JAVREV">
        <span class="lang">JP</span>
      </a>
      <ul>
        <li>
          <a href="/filtering/" class="icon__normal filter pri">好きな条件で探す</a>
        </li>
        <li>
          <a href="/tag/" class="icon__normal tag pri">好きなタグで探す</a>
        </li>
        <li>
          <a href="/search/" class="icon__normal search pri">キーワード検索</a>
        </li>
        <li>
          <a href="/video-hub/" class="icon__normal video cta">動画の提供元を探す</a>
        </li>
        <li class="review">
          <a href="/video/">最新レビュー</a>
        </li>
        <li class="news">
          <a href="#">お知らせ<span class="time">2024.11.27</span><span class="new">NEW</span></a>
        </li>
        <li class="lang">
          <button class="acmenu" aria-label="言語メニューを開く" aria-expanded="false">Language</button>
          <ul class="lang-menu">
            <li><a href="/en/" lang="en">English</a></li>
            <li><a href="/kr/" lang="ko">한국어</a></li>
            <li><a href="/zh-hant/" lang="zh-Hant">繁體中文</a></li>
            <li><a href="/zh-hans/" lang="zh-Hans">简体中文</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <button class="gnav__searchbtn" aria-label="サブナビゲーションを表示">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-search.svg" alt="検索アイコン" class="hidden__visually">
    </button>
    <nav class="gnav__search" aria-label="サブナビゲーション">
      <div class="layouttop">
        <ul class="btn__query gnav">
          <li>
            <a href="/filtering/" class="icon__normal filter white">好きな条件で探す</a>
          </li>
          <li>
            <a href="/tag/" class="icon__normal tag white">好きなタグで探す</a>
          </li>
        </ul>
        <button class="closebtn" aria-label="サブナビゲーションを閉じる"></button>
      </div>
      <div class="layoutbottom" aria-label="サイト内を検索">
        <?php
          set_query_var('search_form_class', 'gnav');
          get_template_part('assets/inc/parts/search-form');
        ?>
      </div>
    </nav>
    <div class="gnav__bg"></div>
  </div>
</header>