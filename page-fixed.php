<?php
/*
Template Name: fiexdPage
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<main class="FixedPage">

  <section class="FixedSection Gm-js_fadeIn">
    <div class="FixedSection__titleArea">
    <h2 class="SectionTitle" data-english ="Fixed">固定ページ</h2>
    </div>
    <div class="FixedSection__mainArea">
     <div class="ContentsContainer">
        <?php if ( have_posts() ) : ?>
          <?php while( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile;?>
        <?php endif; ?>
     </div>
    </div>
  </section>

</main>
<!-- main -->

<?php get_footer(); ?>