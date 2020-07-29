<?php
/*
Template Name: newslist
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php get_template_part('template/topImage'); ?>

<section class="l-SectionArea Gl-MultiColumn">
  <div class="l-SingleArea">
    <!-- 固定ページ本文の出力 -->
    <?php get_template_part('template/archiveContent','news'); ?>
  </div>
  <!-- end:singleArea -->

  <!-- サイドバー読み込み -->
  <?php if (is_active_sidebar('widgetarea-3')) : ?>
    <div class="widget-column l-WidgetArea">
      <?php dynamic_sidebar('widgetarea-3'); ?>
    </div><!-- .widget-area -->
  <?php endif; ?>
</section>

<?php get_footer(); ?>