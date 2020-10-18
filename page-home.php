<?php
/*
Template Name: home
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php include locate_template('template/topPage.php'); ?>

<?php get_footer(); ?>