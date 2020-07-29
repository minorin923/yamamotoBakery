<!-- 記事一覧などデータが複数ある場合はページ遷移ボタンを追加する -->
<div class="l-Pagenation d-Pagenation l-SectionArea">
    <?php the_posts_pagination(array(
      'mid_size' => 1,
      'prev_text' => __('<i class="fa fa-caret-left"></i>', 'adelle'),
      'next_text' => __('<i class="fa fa-caret-right"></i>', 'adelle'),
    )); ?>
  </div>