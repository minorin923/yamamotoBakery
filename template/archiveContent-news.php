<?php if (have_posts()) : ?>
  <?php if (is_month()) : ?>
    <h2> <?php the_time('Y年m月') ?> の記事一覧</h2>
  <?php endif; ?>

  <!-- 固定ページ本文の出力 -->
  <div class="s-newsList">
    <?php while (have_posts()) : the_post(); 
      $taxonomyArray = wp_get_object_terms($post->ID, 'news-cat');
      if (is_wp_error($taxonomyArray)) {
        //該当タクソノミーがない場合のWPError回避処理
        $taxonomyArray = array(new class{ public $name = 'unKnown'; public $description = '';});
      } ?>
      <div class="s-postItem--news">
        <a class="s-postItem--news_link" href="<?php the_permalink() ?>">
          <span class="s-postItem--news_link_category" <?= $taxonomyArray[0]->description ?> ><?=$taxonomyArray[0]->name ?></span>
          <div class="s-postItem--news_link_textBox">
            <p class="s-postItem--news_link_textBox--date"><?php the_time('Y/m/d') ?></p>
            <p class="s-postItem--news_link_textBox--title"><?php the_title(); ?></p>
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