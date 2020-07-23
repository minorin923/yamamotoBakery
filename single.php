<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<section class="s-single s-section">
	<div class="s-singleArea">
		<?php get_template_part('template/singleContent'); ?>
	</div>
	<!-- end:singleArea -->
	<?php get_template_part('template/widgetArea', 'blog1'); ?>
</section>

<?php if (is_active_sidebar('widgetarea-2')) : ?>
	<div class="widget-column s-section ">
		<?php dynamic_sidebar('widgetarea-2'); ?>
	</div><!-- .widget-area -->
<?php endif; ?>

<?php get_footer(); ?>