<?php
/*
Template Name: fiexdPage
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<main class="main">

  <div class="titleBackGround">
    <h2 class="sectionContainer_frame_titleArea_title" data-english ="Owner">当店のオーナー紹介</h2>
  </div>

<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile;?>
<?php endif; ?>


</main>
<!-- main -->

<?php get_footer(); ?>