<?php if (have_posts()) : ?>

  <?php if (is_month()) : ?>
    <h2> <?php the_time('Y年m月') ?> の記事一覧</h2>
  <?php endif; ?>
  <?php if (is_category()) : ?>
    <h2> <?= get_the_category()[0]->name ?> カテゴリの記事一覧</h2>
  <?php endif; ?>

  <div class="s-blogList s-section">
    <?php while (have_posts()) : the_post(); ?>

      <div class="s-blogList_blog">
        <a class="s-blogList_blog_link" href="<?php the_permalink(); ?>">
          <?php // サムネイルの有無チェック
          echo '<div class="s-blogList_blog_link_image s-aspectFixed--4-3" style="max-width:100%;">';
          echo '<div class="s-aspectFixed_frame">';
          if (has_post_thumbnail()) {
            echo get_the_post_thumbnail($page->ID, 'thumbnail', array('class' => 's-aspectFixed_frame_image'));
          } else {
            echo '<div class="s-aspectFixed_frame_image" style="background-color:gray;"></div>';
          }
          echo '<span class="s-blogList_blog_link_image_category">' . get_the_category()[0]->name . '</span>';
          echo '</div></div>';
          ?>
          <div class="s-blogList_blog_link_textBox">
            <p class="s-blogList_blog_link_textBox--date"><?php the_time('Y/m/d') ?></p>
            <p class="s-blogList_blog_link_textBox--title"><?php the_title(); ?></p>
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