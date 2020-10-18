<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php 
  $pageName = 'Single';
	$pageTitle = '記事';
	$PageType = 'Single';
	include locate_template('template/subPagePart-1.php');
	include locate_template('template/singleContainer.php');
	include locate_template('template/subPagePart-2.php');  
?>

<?php get_footer(); ?>