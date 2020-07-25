<?php
// Start the Loop.
while (have_posts()) :
  the_post();
?>

  <div class="s-singleArea_titleArea">
    <?php if (get_post_type() !== 'news') : ?>
      <span class="s-singleArea_titleArea_category"> <?= get_the_category()[0]->name; ?></span>
    <?php endif; ?>
    <span class="s-singleArea_titleArea_date">更新日: <?= get_the_date(); ?></span>
    <h2 class="s-singleArea_titleArea_title"><?php the_title(); ?></h2>
  </div>
  <div class="s-singleArea_mainArea">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php // サムネイルの有無チェック
      if (has_post_thumbnail()) {
        echo '<div class="s-aspectFixed--16-9" style="max-width:100%;">';
        echo '<div class="s-aspectFixed_frame">';
        echo get_the_post_thumbnail($page->ID, 'thumbnail', array('class' => 's-aspectFixed_frame_image'));
        echo '</div></div>';
      } ?>

      <div class="s-single_content">
        <?php the_content(); ?>
      </div>
    </article>
    <!-- #post-<?php the_ID(); ?> -->
    <div class="s-singleArea_footer">
      <a class="s-backbutton s-button" href="/blog" role="button">
        <span>記事一覧へ戻る</span> <span class="arrow"></span>
      </a>
      <div class="s-nextandprev">
        <?php previous_post_link('%link', '<span class="prev"></span> %title'); ?>
        <?php next_post_link('%link', '%title <span class="next"></span>'); ?>
      </div>
    </div>
  </div>

<?php
endwhile; // End the loop.
?>