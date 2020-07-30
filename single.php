<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<section class="l-SectionArea Gl-MultiColumn">
	<div class="l-SingleArea ">
		<?php get_template_part('template/singleContent'); ?>
	</div>
	<!-- end:singleArea -->
	<?php get_template_part('template/widgetArea', 'blog1'); ?>
</section>

<?php if (is_active_sidebar('widgetarea-2')) : ?>
	<div class="widget-column l-SectionArea ">
		<?php dynamic_sidebar('widgetarea-2'); ?>
	</div><!-- .widget-area -->
<?php endif; ?>

<?php get_footer(); ?>