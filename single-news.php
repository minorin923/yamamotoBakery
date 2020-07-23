<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<section class="s-single s-section">
	<div class="s-singleArea">
		<?php get_template_part('template/singleContent'); ?>
	</div>
	<!-- end:singleArea -->
	<?php get_template_part('template/widgetArea', 'blog1'); ?>
</section>

<?php get_footer(); ?>