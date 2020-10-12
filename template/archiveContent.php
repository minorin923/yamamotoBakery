<?php if (have_posts()) : ?>

  <?php if (is_month()) : ?>
    <h2> <?php the_time('Y年m月') ?> の記事一覧</h2>
  <?php endif; ?>
  <?php if (is_category()) : ?>
    <h2> <?= get_the_category()[0]->name ?> カテゴリの記事一覧</h2>
  <?php endif; ?>

  <div class="sectionContainer">
    <div class="blogList">
    <?php
      while (have_posts() ){
        the_post();
        // 記事オブジェクトの整形
        setup_postdata($post);
    
        $taxonomyArray = get_the_category();
        if (is_wp_error($taxonomyArray)) {
          //該当タクソノミーがない場合のWPError回避処理
          $taxonomyArray = array(new class{ public $name = 'unKnown'; public $description = '';});
        } 
        echo drawPostItem($post,true,$taxonomyArray[0],"post_blog");
      }
    ?>
    </div>
  </div>
  <!-- end:mainContants -->
  
  <?php get_template_part('template/archivePagenation'); ?>
<?php endif; ?>