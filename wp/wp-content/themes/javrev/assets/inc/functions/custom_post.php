<?php
/////////////////////////////////////////////////////////
// カスタム投稿タイプ
/////////////////////////////////////////////////////////
add_action( 'init', 'add_post_type_event', 0 );
function add_post_type_event() {

  //カスタム投稿タイプを追加
  // news
  register_post_type( 'news',
    array(
      'labels' => array(
        'name' => 'NEWS',
        'all_items' => '投稿一覧'
      ),
    'public' => true,
    'menu_position' =>2,
    'has_archive' => true,
    'show_in_rest' => true, // グーテンベルクの有効化
    'supports' => array('title','editor','author','thumbnail','revisions')
    )
  );
  // newscat
  register_taxonomy(
    'newscat', //カテゴリー名（任意）
    'news', //カスタム投稿名
    array(
      'hierarchical' => true, //カテゴリータイプの指定
      'label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true, //（Gutenberg）を使用している場合は「true」
      //'update_count_callback' => '_update_post_term_count', // カスタムタクソノミーをタグとして使用する場合、必ず設定が必要な引数
      'rewrite' => array( 'slug' => 'news' ), //変更後のスラッグ
    )
  );

}  //end カスタム投稿タイプ


// カスタムタクソノミーのURLを変更する
//=====================================================
function add_custom_rewrite_rules() {
  add_rewrite_rule('news/([^0-9]+)/?$', 'index.php?newscat=$matches[1]&taxonomy=newscat', 'top');
  add_rewrite_rule('news/([^0-9]+)/page/([^/]+)/?$', 'index.php?newscat=$matches[1]&taxonomy=newscat&paged=$matches[2]', 'top');
}
add_action('init', 'add_custom_rewrite_rules');

?>