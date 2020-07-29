<?php
/*
Template Name: index
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php get_template_part('template/topImage'); ?>

<!-- サイドバー読み込み -->
<div class="l-CategoryArea d-CategoryArea">
  <a href="/blog">All</a><br>
  <?php wp_list_categories('style=none'); ?>
</div>

<!-- 固定ページ本文の出力 -->
<?php get_template_part('template/archiveContent'); ?>

<?php get_footer(); ?>