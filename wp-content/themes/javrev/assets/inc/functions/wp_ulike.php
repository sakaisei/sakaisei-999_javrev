<?php

// 翻訳グループ内の各言語の「いいね」数を取得
function get_likes_by_translation_group($post_id) {
  global $wpdb;

  // 翻訳グループIDを取得
  $trid = $wpdb->get_var($wpdb->prepare(
    "SELECT trid FROM wp_icl_translations WHERE element_id = %d",
    $post_id
  ));

  // デバッグ: 翻訳グループIDの確認
  if (!$trid) {
    error_log("No translation group found for post ID: " . $post_id);
    return [];
  }
  error_log("Translation group ID (trid): " . $trid);

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

  // デバッグ: 取得した「いいね」データをログ出力
  error_log("Likes data for translation group (trid: $trid): " . print_r($likes_data, true));

  // 整形して配列化
  $likes_by_language = [];
  foreach ($likes_data as $like) {
    $likes_by_language[$like['language_code']] = intval($like['like_count']);
  }

  // デバッグ: 整形後のデータを確認
  error_log("Formatted likes data: " . print_r($likes_by_language, true));

  return $likes_by_language;
}

// フロントエンドで翻訳グループの「いいね」数を表示
function display_likes_by_translation_group() {
  $post_id = get_the_ID(); // 現在の投稿ID
  $likes_data = get_likes_by_translation_group($post_id);

  if (!$likes_data) {
    error_log("No likes data available for post ID: " . $post_id);
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

  // デバッグ: 合計いいね数をログ出力
  error_log("Total likes for post ID $post_id: $total_likes");
}

// WP ULikeの数値部分を翻訳グループの合計いいね数にカスタマイズ
add_filter('wp_ulike', function($output, $args) {
  global $post;

  // 現在の投稿IDを取得
  $post_id = isset($args['id']) ? intval($args['id']) : $post->ID;

  // デバッグ: 投稿IDをログ出力
  error_log("wp_ulike filter triggered for post ID: $post_id");

  // 翻訳グループ内の「いいね」数を取得
  $likes_data = get_likes_by_translation_group($post_id);

  if (!$likes_data) {
    error_log("No likes data available for post ID: " . $post_id);
    return $output; // 翻訳グループがない場合、元の出力をそのまま返す
  }

  // 翻訳グループの合計「いいね」数を計算
  $total_likes = array_sum($likes_data);

  // デバッグ: 元の出力と合計いいね数を確認
  error_log("Original wp_ulike output for post ID $post_id: " . $output);
  error_log("Total likes for translation group: $total_likes");

  // 正規表現で数値部分を置換
  $custom_output = preg_replace(
    '/<span class="count-box[^>]*>(.*?)<\/span>/',
    '<span class="count-box wp_ulike_counter_up" data-ulike-counter-value="' . $total_likes . '">' . $total_likes . '</span>',
    $output
  );

  // デバッグ: カスタム出力を確認
  error_log("Custom wp_ulike output for post ID $post_id: " . $custom_output);

  return $custom_output;
}, 10, 2);


?>
