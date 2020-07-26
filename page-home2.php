<?php
/*
Template Name: home2
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
      <p><?php the_content(); ?></p>
  <?php endwhile;?>
<?php endif; ?>

<?php get_footer(); ?>