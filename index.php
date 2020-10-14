<?php
/*
Template Name: index
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>


<div class="titleBackGround">
  <img src="<?= get_template_directory_uri(); ?>/img/blogList.svg" alt="">
</div>
	
<main class="main">

<!-- 固定ページ本文の出力 -->

<div class="singleContainer">
	<div class="singleContainer_singleArea">
    <?php get_template_part('template/archiveContent'); ?>
	</div>
	<!-- end:singleArea -->
	<div class="singleContainer_sideArea">
		<?php get_template_part('template/widgetArea'); ?>
	</div>
</div>



<?php get_footer(); ?>