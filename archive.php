<?php
/*
Template Name: archive
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<!-- トップイメージを投稿ページのアイキャッチ画像から取得する -->
<div class="s-topArea" style="background-image:url(
  <?php if (has_post_thumbnail()) : the_post_thumbnail_url( 'medium' );?>
  <?php else : echo get_template_directory_uri(); ?>/img/blogPic.png
  <?php endif;?>);">
  <h2 class="s-topArea_title">blogList</h2>
</div>  
<!-- end:topArea -->

<!-- 固定ページ本文の出力 -->
<?php get_template_part('template/archiveContent'); ?>
<?php get_template_part('template/archivePagenation'); ?>

<?php get_footer(); ?>