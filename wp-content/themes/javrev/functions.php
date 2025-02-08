<?php
//functionsディレクトリ内のPHPファイルを読み込み
foreach ( glob( get_template_directory() . '/assets/inc/functions/*.php' ) as $file ) {
  require_once $file;
}
