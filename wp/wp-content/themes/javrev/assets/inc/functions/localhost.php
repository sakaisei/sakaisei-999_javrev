<?php

class Relative_URI {
  
  public function __construct() {
    add_action('get_header', [$this, 'start_buffer'], 1);
    add_action('wp_footer', [$this, 'end_buffer'], 99999);
  }

  // コンテンツ内のURLを書き換える処理
  public function replace_relative_URI(string $content): string {
    $home_url = trailingslashit(get_home_url());
    $local_http = $_SERVER['REQUEST_SCHEME'] . '://';
    $local_hostname = $_SERVER['SERVER_NAME'];
    $local_port = ':' . $_SERVER['SERVER_PORT'];

    $server_name = $_SERVER['SERVER_NAME'];

    // 本番環境のドメインは置き換えない
    if (strpos($server_name, 'www.cloudedleopardent.com') !== false || 
        strpos($server_name, 'www99.cloudedleopardent.com') !== false) {
      return $content;
    }

    // CSSやJSファイルへのリンクは置き換えない
    if (preg_match('/\.(css|js)(\?|$)/', $content)) {
      return $content;
    }

    // 開発環境用にURLを書き換え
    return str_replace($home_url, $local_http . $local_hostname . $local_port . '/', $content);
  }

  // バッファリングを開始する
  public function start_buffer(): void {
    ob_start([$this, 'replace_relative_URI']);
  }

  // バッファを終了し、出力する
  public function end_buffer(): void {
    if (ob_get_length()) {
      ob_end_flush();
    }
  }
}

// クラスのインスタンス化
new Relative_URI();

?>
