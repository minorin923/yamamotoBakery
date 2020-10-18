<?php if (have_posts()) : ?>

  <div class="PostCategoryTitle">
    <?php if (is_month()) : ?>
      <h2> <?php the_time('Y年m月') ?> の記事一覧</h2>
    <?php endif; ?>
    <?php if (is_category()) : ?>
      <h2> <?= get_the_category()[0]->name ?> カテゴリの記事一覧</h2>
    <?php endif; ?>
  </div>

  <?php get_template_part('template/singleContainer_Archive_Part',$archivePartName); ?>
  
  <!-- 記事一覧などデータが複数ある場合はページ遷移ボタンを追加する -->
  <div class="pagenation">
    <?php the_posts_pagination(array(
      'mid_size' => 1,
      'prev_text' => __('<i class="fa fa-caret-left"></i>', 'adelle'),
      'next_text' => __('<i class="fa fa-caret-right"></i>', 'adelle'),
    )); ?>
  </div> 

<?php endif; ?>