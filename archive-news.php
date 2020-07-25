<?php
/*
Template Name: newslist
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<!-- トップイメージを投稿ページのアイキャッチ画像から取得する -->
<div class="s-topArea" style="background-image:url(
  <?php if (has_post_thumbnail()) : the_post_thumbnail_url('medium'); ?>
  <?php else : echo get_template_directory_uri(); ?>/img/newsPic.png
  <?php endif; ?>);">
  <h2 class="s-topArea_title">newsList</h2>
</div>
<!-- end:topArea -->

<section class="s-single  s-section">
  <div class="s-singleArea">
    <!-- 固定ページ本文の出力 -->
    <?php get_template_part('template/archiveContent','news'); ?>
  </div>
  <!-- end:singleArea -->

  <!-- サイドバー読み込み -->
  <?php if (is_active_sidebar('widgetarea-3')) : ?>
    <div class="widget-column s-widgetArea">
      <?php dynamic_sidebar('widgetarea-3'); ?>
    </div><!-- .widget-area -->
  <?php endif; ?>
</section>

<?php get_footer(); ?>