<?php if (have_posts()) : ?>
  <?php if (is_month()) : ?>
    <h2> <?php the_time('Y年m月') ?> の記事一覧</h2>
  <?php endif; ?>

  <div class="sectionContainer">
    <div class="newsList">
    <?php
      while (have_posts() ){
        the_post();
        // 記事オブジェクトの整形
        setup_postdata($post);
    
        $taxonomyArray = wp_get_object_terms($post->ID, "news-cat");
        if (is_wp_error($taxonomyArray)) {
          //該当タクソノミーがない場合のWPError回避処理
          $taxonomyArray = array(new class{ public $name = 'unKnown'; public $description = '';});
        } 
        echo drawPostItem($post,false,12,$taxonomyArray[0],"post_news");
      }
    ?>
    </div>
  </div>
  <!-- end:mainContants -->

  <?php get_template_part('template/archivePagenation'); ?>
  <?php endif; ?>