<div class="NewsList">
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
        echo drawPostItem($post,false,12,$taxonomyArray[0],"NewsPost");
      }
    ?>
  </div>
  <!-- end:NewsList -->