<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<div class="titleBackGround">
    <img src="<?= get_template_directory_uri(); ?>/img/singleTitle.svg" alt="">
  </div>
<main class="main">

<div class="singleContainer">
	<div class="singleContainer_singleArea">
		<?php get_template_part('template/singleContent'); ?>
	</div>
	<!-- end:singleArea -->
	<div class="singleContainer_sideArea">
		<?php get_template_part('template/widgetArea', 'blog1'); ?>
	</div>
</div>

<?php get_footer(); ?>