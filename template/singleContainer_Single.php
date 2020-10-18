<?php while (have_posts()) : the_post();?>

<div class="single">
  <div class="single_titleArea">
    <span class="single_titleArea_date">更新日: <?= get_the_date(); ?></span>
    <?php if (get_post_type() === 'news') :
      $taxonomyArray = wp_get_object_terms($post->ID, 'news-cat');
      if (is_wp_error($taxonomyArray)) {
        //該当タクソノミーがない場合のWPError回避処理
        $taxonomyArray = array(new class{ public $name = 'unKnown'; public $description = '';});
      }
    ?>
      <span class="single_titleArea_category" <?= $taxonomyArray[0]->description; ?>> <?= $taxonomyArray[0]->name; ?></span>
    <?php else: ?>  
      <span class="single_titleArea_category" <?= get_the_category()[0]->description; ?>> <?= get_the_category()[0]->name; ?></span>
    <?php endif; ?>
    <h2 class="single_titleArea_title"><?php the_title(); ?></h2>
  </div>
  <div class="single_mainArea">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="single_mainArea_content">
        <?php the_content(); ?>
      </div>
    </article>
    <!-- #post-<?php the_ID(); ?> -->
    <div class="single_footerArea">
      <div class="backButton">
      <a class="backButton_link" href="/<?= (get_post_type() === 'news')? 'news' :'blog' ?>" role="button">記事一覧へ戻る</a>
      </div>
      <div class="nextandPrevPosts">
        <?php previous_post_link('%link', '<span class="prev"></span> <span class="title"> %title </span>'); ?>
        <?php next_post_link('%link', '<span class="title"> %title </span> <span class="next"></span>'); ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>