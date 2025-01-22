<?php
/**
 * 翻訳グループ内の各言語の「いいね」数を取得
 */
function get_likes_by_translation_group($post_id) {
  global $wpdb;

  // 翻訳グループIDを取得
  $trid = $wpdb->get_var($wpdb->prepare(
    "SELECT trid FROM wp_icl_translations WHERE element_id = %d",
    $post_id
  ));

  if (!$trid) {
    return null; // 翻訳グループが見つからない場合
  }

  // 翻訳グループごとの「いいね」数を一括で取得
  $likes_data = $wpdb->get_results($wpdb->prepare(
    "SELECT wp_icl_translations.language_code, COUNT({$wpdb->prefix}ulike.id) as like_count
     FROM {$wpdb->prefix}ulike
     JOIN wp_icl_translations
     ON {$wpdb->prefix}ulike.post_id = wp_icl_translations.element_id
     WHERE wp_icl_translations.trid = %d
     AND {$wpdb->prefix}ulike.status = 'like'
     GROUP BY wp_icl_translations.language_code",
    $trid
  ), ARRAY_A);

  // 整形して配列化
  $likes_by_language = [];
  foreach ($likes_data as $like) {
    $likes_by_language[$like['language_code']] = intval($like['like_count']);
  }

  return $likes_by_language;
}

/**
 * フロントエンドで翻訳グループの「いいね」数を表示
 */
function display_likes_by_translation_group() {
  $post_id = get_the_ID(); // 現在の投稿ID
  $likes_data = get_likes_by_translation_group($post_id);

  if (!$likes_data) {
    echo '<p>No likes data available for this translation group.</p>';
    return;
  }

  echo '<ul class="likes-by-language">';
  foreach ($likes_data as $language => $likes) {
    echo '<li>' . strtoupper($language) . ': ' . $likes . ' likes</li>';
  }
  echo '</ul>';
  $total_likes = array_sum($likes_data);
  echo '<p>Total Likes: ' . $total_likes . '</p>';
}









?>
