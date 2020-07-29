<?php
// Start the Loop.
while (have_posts()) :
  the_post();
?>

  <div class="l-SingleArea_titleArea d-SingleArea_titleArea">
    <?php if (get_post_type() === 'news') :
      $taxonomyArray = wp_get_object_terms($post->ID, 'news-cat');
      if (is_wp_error($taxonomyArray)) {
        //該当タクソノミーがない場合のWPError回避処理
        $taxonomyArray = array(new class{ public $name = 'unKnown'; public $description = '';});
      }
    ?>
      <span class="l-SingleArea_titleArea_category Gl-PostItem--news_link_category" <?= $taxonomyArray[0]->description; ?>> <?= $taxonomyArray[0]->name; ?></span>
    <?php else: ?>  
      <span class="l-SingleArea_titleArea_category d-SingleArea_titleArea_category Gl-PostItem--blog_link_category" <?= get_the_category()[0]->description; ?>> <?= get_the_category()[0]->name; ?></span>
    <?php endif; ?>
    <span class="l-SingleArea_titleArea_date d-SingleArea_titleArea_date">更新日: <?= get_the_date(); ?></span>
    <h2 class="l-SingleArea_titleArea_title d-SingleArea_titleArea_title"><?php the_title(); ?></h2>
  </div>
  <div class="l-SingleArea_mainArea">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="l-SingleContentArea">
        <?php the_content(); ?>
      </div>
    </article>
    <!-- #post-<?php the_ID(); ?> -->
    <div class="l-SingleArea_footer">
      <a class="l-BackButton d-BackButton" href="/<?= (get_post_type() === 'news')? 'news' :'blog' ?>" role="button">
        <span>記事一覧へ戻る</span> <span class="arrow"></span>
      </a>
      <div class="l-NextandPrevPosts d-NextandPrevPosts">
        <?php previous_post_link('%link', '<span class="prev"></span> %title'); ?>
        <?php next_post_link('%link', '%title <span class="next"></span>'); ?>
      </div>
    </div>
  </div>

<?php
endwhile; // End the loop.
?>