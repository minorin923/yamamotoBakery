<?php
/*
Template Name: newslist
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php 
  $pageName = 'NewsList';
	$pageTitle = 'ブログ一覧';
	$PageType = 'Archive';
	$archivePartName ='news';
	include locate_template('template/subPagePart-1.php');
	include locate_template('template/singleContainer.php');
	include locate_template('template/subPagePart-2.php');  
?>

<?php get_footer(); ?>