<?php
/*
Template Name: archive
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php 
  $pageName = 'BlogList';
  $pageTitle = 'ブログ一覧';
  $PageType = 'Archive';
	$archivePartName ='blog';
  include locate_template('template/subPagePart-1.php');
	include locate_template('template/singleContainer.php');
	include locate_template('template/subPagePart-2.php');  
?>

<?php get_footer(); ?>