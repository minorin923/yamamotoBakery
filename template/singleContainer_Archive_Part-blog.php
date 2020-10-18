<div class="BlogList">
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
        echo drawPostItem($post,true,12,$taxonomyArray[0],"BlogPost");
      }
    ?>
  </div>
  <!-- end:blogList -->