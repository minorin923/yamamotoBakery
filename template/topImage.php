
<?php $pageType=(get_post_type() === 'news')?'news':'blog'; ?>

<!-- トップイメージを投稿ページのアイキャッチ画像から取得する -->
<div class="s-topArea" style="background-image:url(
  <?php if (has_post_thumbnail()) : the_post_thumbnail_url( 'medium' );?>
  <?php else : echo get_template_directory_uri(); ?>/img/<?= $pageType ?>Pic.png
  <?php endif;?>);">
  <h2 class="s-topArea_title"><?= $pageType ?>List</h2>
</div>  
<!-- end:topArea -->
