<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<section class="l-SectionArea Gl-MultiColumn ">
	<div class="l-SingleArea">
		<?php get_template_part('template/singleContent'); ?>
	</div>
	<!-- end:singleArea -->
	<?php get_template_part('template/widgetArea', 'blog1'); ?>
</section>

<?php get_footer(); ?>