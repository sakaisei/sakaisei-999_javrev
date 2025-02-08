<?php
/////////////////////////////////////////////////////////
// カスタム投稿タイプ
/////////////////////////////////////////////////////////
function register_custom_post_types() {
  // ニュース投稿タイプ
  $news_labels = array(
    'name' => 'ニュース',
    'all_items' => '投稿一覧',
  );
  $news_args = array(
    'labels' => $news_labels,
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-post',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'has_archive' => true,
    'rewrite' => array('slug' => 'news', 'with_front' => false),
    'show_in_rest' => true,
  );
  register_post_type('news', $news_args);

  // JAV投稿タイプ
  $jav_labels = array(
    'name' => 'JAV',
    'all_items' => '投稿一覧',
  );
  $jav_args = array(
    'labels' => $jav_labels,
    'public' => true,
    'menu_position' => 6, // メニュー位置（ニュースの次）
    'menu_icon' => 'dashicons-admin-post',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'has_archive' => true,
    'rewrite' => array('slug' => 'jav', 'with_front' => false),
    'show_in_rest' => true,
  );
  register_post_type('jav', $jav_args);

  // カスタムタクソノミー: format （映像形式）
  register_taxonomy(
    'format', // タクソノミースラッグ
    'jav', // 適用する投稿タイプ
    array(
      'hierarchical' => true,
      'label' => '映像形式',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'jav/format', 'with_front' => false),
    )
  );

  // カスタムタクソノミー: cast （出演）
  register_taxonomy(
    'cast',
    'jav',
    array(
      'hierarchical' => false, // タグ形式
      'label' => '出演',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'jav/cast', 'with_front' => false),
    )
  );

  // カスタムタクソノミー: playtime （再生時間）
  register_taxonomy(
    'playtime',
    'jav',
    array(
      'hierarchical' => true,
      'label' => '再生時間',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'jav/playtime', 'with_front' => false),
    )
  );

  // カスタムタクソノミー: value （価格帯 / 商品性質）
  register_taxonomy(
    'value',
    'jav',
    array(
      'hierarchical' => true,
      'label' => '価格帯 / 商品性質',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'jav/value', 'with_front' => false),
    )
  );
}
add_action('init', 'register_custom_post_types');

// カスタムタクソノミーのURLを変更する
//=====================================================
function add_custom_rewrite_rules() {

  // タクソノミーのトップページ
  add_rewrite_rule('jav/format/?$', 'index.php?post_type=jav&taxonomy=format', 'top');
  add_rewrite_rule('jav/cast/?$', 'index.php?post_type=jav&taxonomy=cast', 'top');
  add_rewrite_rule('jav/playtime/?$', 'index.php?post_type=jav&taxonomy=playtime', 'top');
  add_rewrite_rule('jav/value/?$', 'index.php?post_type=jav&taxonomy=value', 'top');

  // タームページ
  add_rewrite_rule('jav/format/([^/]+)/?$', 'index.php?format=$matches[1]&taxonomy=format', 'top');
  add_rewrite_rule('jav/format/([^/]+)/page/([^/]+)/?$', 'index.php?format=$matches[1]&taxonomy=format&paged=$matches[2]', 'top');

  add_rewrite_rule('jav/cast/([^/]+)/?$', 'index.php?cast=$matches[1]&taxonomy=cast', 'top');
  add_rewrite_rule('jav/cast/([^/]+)/page/([^/]+)/?$', 'index.php?cast=$matches[1]&taxonomy=cast&paged=$matches[2]', 'top');

  add_rewrite_rule('jav/playtime/([^/]+)/?$', 'index.php?playtime=$matches[1]&taxonomy=playtime', 'top');
  add_rewrite_rule('jav/playtime/([^/]+)/page/([^/]+)/?$', 'index.php?playtime=$matches[1]&taxonomy=playtime&paged=$matches[2]', 'top');

  add_rewrite_rule('jav/value/([^/]+)/?$', 'index.php?value=$matches[1]&taxonomy=value', 'top');
  add_rewrite_rule('jav/value/([^/]+)/page/([^/]+)/?$', 'index.php?value=$matches[1]&taxonomy=value&paged=$matches[2]', 'top');
}
add_action('init', 'add_custom_rewrite_rules');

?>
