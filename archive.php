<?php
/*
Template Name: archive
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php get_template_part('template/topImage'); ?>

<!-- 固定ページ本文の出力 -->
<?php get_template_part('template/archiveContent'); ?>

<?php get_footer(); ?>