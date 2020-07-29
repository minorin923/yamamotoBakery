<?php if (have_posts()) : ?>

  <?php if (is_month()) : ?>
    <h2> <?php the_time('Y年m月') ?> の記事一覧</h2>
  <?php endif; ?>
  <?php if (is_category()) : ?>
    <h2> <?= get_the_category()[0]->name ?> カテゴリの記事一覧</h2>
  <?php endif; ?>

  <div class="l-BlogList l-SectionArea">
    <?php while (have_posts()) : the_post(); ?>

      <div class="Gl-PostItem--blog">
        <a class="Gl-PostItem--blog_link" href="<?php the_permalink(); ?>">
          <div class="Gl-PostItem--blog_link_image Gl-AspectFixed--4-3" style="max-width:100%;">
            <div class="Gl-AspectFixed_frame">
              <?php if (has_post_thumbnail()) {
                echo get_the_post_thumbnail($page->ID, 'thumbnail', array('class' => 'Gl-AspectFixed_frame_image'));
              } else {
                echo '<div class="Gl-AspectFixed_frame_image" style="background-color:gray;"></div>';
              } ?>
              <span class="Gl-PostItem--blog_link_category" <?= get_the_category()[0]->description; ?> ><?= get_the_category()[0]->name ?></span>
            </div>
          </div>
          <div class="Gl-PostItem--blog_link_textBox">
            <p class="Gl-PostItem--blog_link_textBox--date"><?php the_time('Y/m/d') ?></p>
            <p class="Gl-PostItem--blog_link_textBox--title"><?php the_title(); ?></p>
          </div>
        </a>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
    <p>記事が見つかりませんでした。</p>
  <?php endif; ?>
  <?php /* postSingle：END */ ?>
  </div>
  <!-- end:mainContants -->

  <?php get_template_part('template/archivePagenation'); ?>