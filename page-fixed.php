<?php
/*
Template Name: fiexdPage
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php 
  $pageName = CFS()->get('pageName');
  $pageTitle = CFS()->get('pageTitle');
  include locate_template('template/subPagePart-1.php');
	include locate_template('template/content.php');
	include locate_template('template/subPagePart-2.php');  
?>

<?php get_footer(); ?>