<?php

//　yoastSEOのパン屑をカスタム
add_filter('wpseo_breadcrumb_links', function($links) {
  global $wp_query;

  // カスタム投稿タイプ「JAV」のアーカイブリンク
  $post_type = 'jav';
  $post_type_archive = get_post_type_archive_link($post_type);

  // タクソノミー関連ページを先に判定
  if (isset($wp_query->query_vars['taxonomy']) && !empty($wp_query->query_vars['taxonomy'])) {
    $taxonomy_slug = $wp_query->query_vars['taxonomy']; // タクソノミースラッグ取得
    $term_slug = isset($wp_query->query_vars['term']) ? $wp_query->query_vars['term'] : '';

    // 「ホーム」の次に「JAV」を挿入
    $jav_link = [
      'url' => $post_type_archive,
      'text' => 'JAV',
    ];
    array_splice($links, 1, 0, [$jav_link]);

    if (empty($term_slug)) {
      // タクソノミーアーカイブページの場合
      $taxonomy_link = [
        'url' => home_url("/jav/{$taxonomy_slug}/"),
        'text' => get_taxonomy($taxonomy_slug)->labels->name, // タクソノミー名取得
      ];
      array_splice($links, -1, 1, [$taxonomy_link]);
    } else {
      // タームページの場合
      $taxonomy_link = [
        'url' => home_url("/jav/{$taxonomy_slug}/"),
        'text' => get_taxonomy($taxonomy_slug)->labels->name,
      ];
      $term_link = [
        'url' => get_term_link($term_slug, $taxonomy_slug),
        'text' => single_term_title('', false),
      ];

      // 最後にタクソノミーリンクとタームリンクを追加
      array_splice($links, -1, 1, [$taxonomy_link, $term_link]);
    }
  } elseif (is_post_type_archive($post_type)) {
    // カスタム投稿タイプ「JAV」のアーカイブページ
    $jav_included = array_filter($links, function($link) use ($post_type_archive) {
      return $link['url'] === $post_type_archive;
    });

    if (empty($jav_included)) {
      $jav_link = [
        'url' => $post_type_archive,
        'text' => 'JAV',
      ];
      array_splice($links, -1, 1, [$jav_link]);
    }
  }

  return $links;
});

// スキーマデータにArticleにする
add_filter('wpseo_schema_webpage', function ($data) {
  if (is_singular('jav')) {
    $data['@type'] = 'Article'; // または 'NewsArticle'
    $data['headline'] = get_the_title();
    $data['author'] = [
      '@type' => 'Person',
      'name' => get_the_author(),
    ];
    $data['datePublished'] = get_the_date('c');
    $data['dateModified'] = get_the_modified_date('c');
  }
  return $data;
});

?>
