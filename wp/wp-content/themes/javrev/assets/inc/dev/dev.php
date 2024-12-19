<?php // 使用テンプレートを調べる
if ( is_user_logged_in() ) {
$inc_file_list=get_included_files();
foreach($inc_file_list as $ink_key => $ink_val){
if(stristr($ink_val,'themes')){
$ink_temp=mb_strlen($ink_val)-strrpos($ink_val,'.');
$ink_temp=strrpos($ink_val,'/',$ink_temp);
echo substr($ink_val,$ink_temp+1).'<br />'.PHP_EOL;
}
}
}
?>
<br><br><br>
<?php echo get_post_type_archive_link( 'movie' ); ?>
<!----------------------------------

条件分岐

------------------------------------>
<?php if ( has_post_thumbnail()): ?>
  <?php the_post_thumbnail();?>
  <p>// サムネイルある場合</p>
<?php endif; ?>

 <!--条件分岐 テンプレート振分け-->
<?php if(is_home()): ?>
  // fornt-page
<?php endif; ?>

 <!--single.php条件分岐 テンプレート振分け-->
<?php
  $post = $wp_query->post;
  if (in_category('news')||in_category('event')) {
    //お知らせ用テンプレート
    get_template_part( 'single','base' );
  } elseif(in_category('real')) {
    //不動産用テンプレート
    get_template_part( 'single','real' );
  } else {
    //上記以外の場合のテンプレート
    get_template_part( 'single','base' );
  }
?>
 <!--固定ページ-->
<?php /* ページスラッグ「会社案内」「プライバシーポリシー」のとき */ if (is_page(array( 'company','policy','sitemap' ))): ?>
<?php endif; ?>
 
 
 <!--カスタム投稿タイプ-->
<?php if ( get_post_type() === 'カスタム投稿タイプ名' ): ?>
<p>指定されたカスタム投稿タイプの場合のみ表示</p>
<?php endif; ?>
 
 <!--カスタム投稿タイプのアーカイブページ-->
<?php if(is_post_type_archive()): ?>
<p>カスタム投稿タイプのアーカイブページの場合のみ表示</p>
<?php endif; ?>
 
 <!--タグページ-->
<?php if(is_tag()): ?>
<p>タグのアーカイブページの場合のみ表示</p>
<?php endif; ?>
 
 <!--カスタム分類-->
<?php if(is_tax()): ?>
<p>カスタム分類ページの場合のみ表示</p>
<?php endif; ?>
 
 <!--条件分岐 テンプレート振分け-->
<?php if(is_home()): ?>
<p>//トップページが表示されている場合</p>
<?php else : ?>
<p>//それ以外</p>
<?php endif; ?>
 
 <!--検索結果ページ-->
<?php if(is_search()): ?>
<p>検索結果ページの場合のみ表示</p>
<?php endif; ?>
 
 <!--404エラーページ-->
<?php if(is_404()): ?>
<p>404ページの場合のみ表示</p>
<?php endif; ?>
 
 <!--条件分岐 single-->
<?php if (is_category()) : ?>
  <p>カテゴリー「Wordpress」のアーカイブページの表示内容<br>
  （例えば、ロゴ画像を表示させるHTML）</p>
<?php else : ?>
  <p>他のカテゴリーのアーカイブページの表示内容</p>
<?php endif; ?>
 
 <!--条件分岐 ターム-->
<?php if(is_tax('タクソノミー名', 'ターム名')): ?>
 <p>アーカイブページ</p>
<?php endif; ?>
 
 <!--条件分岐 タームが複数-->
<?php if(is_tax('タクソノミー名', array('ターム名','ターム名'))): ?>
 <p>アーカイブページ</p>
<?php endif; ?>
 
 <!--条件分岐 ターム-->
<?php if (is_object_in_term($post->ID, 'タクソノミー名','ターム名')): ?>
<p>シングルページ</p>
<?php endif; ?>
 
 <!--条件分岐 タームが複数-->
<?php if (is_object_in_term($post->ID, 'fruit_cat',array('apple','orange'))): ?>
<p>シングルページ</p>
<?php endif; ?>
 
 
 <!--条件分岐 single-->
<?php if(in_category(  array( '4','5','6','7','8','9','10','11','12','13','14','15','17') )): ?>
<?php $page = "curling"; ?>
<?php elseif(in_category( array( '16','18','20','21','22' ) )): ?>
<?php $page = "other"; ?>
<?php elseif(in_category( array( '19' ) )): ?>
<?php $page = "miyota"; ?>
<?php endif; ?>
 
 
 <!--条件分岐 category-->
<?php if(is_category(  array( '4','5','6','7','8','9','10','11','12','13','14','15','17') )): ?>
<?php $page = "curling"; ?>
<?php elseif(is_category( array( '16','18','20','21','22' ) )): ?>
<?php $page = "other"; ?>
<?php elseif(is_category( array( '19' ) )): ?>
<?php $page = "miyota"; ?>
<?php endif; ?>
 
 <!--条件分岐 ページタイトル-->
<title>タイトル｜<?php if(is_category()): ?><?php  $cats = get_the_category(); $cats = $cats[0]; echo $cats->cat_name; ?></title>
<?php elseif(is_single()): ?><?php  $cats = get_the_category(); $cats = $cats[0]; echo $cats->cat_name; ?>｜<?php the_title(); ?></title>
<?php endif; ?>
 
<!-- ホームかどうかを判別するis-home() -->
<?php if(is_home()): ?>
//ホームであればここに記述したものを実行
<?php else: ?>
//それ以外ではここに記述したものを実行
<?php endif; ?>
 
 
<!-- page.phpでの条件分岐 -->
<?php if (have_posts()) : ?>
 
<?php /* ページスラッグ「about」のとき */ if (is_page('about')) { ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php edit_post_link('このページを編集','<p class="edit">','</p>'); ?>
</div><!-- .post -->
<?php endwhile; ?>
 
<?php /* ページスラッグ「inquiry」のとき */ } else if (is_page('inquiry')) { ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php edit_post_link('このページを編集','<p class="edit">','</p>'); ?>
</div><!-- .post -->
<?php endwhile; ?>
 
<?php /* それら以外のページのとき */ } else { ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php edit_post_link('このページを編集','<p class="edit">','</p>'); ?>
</div><!-- .post -->
<?php endwhile; ?>
 
<?php } ?>
 
<?php endif; ?>