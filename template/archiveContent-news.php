<?php if (have_posts()) : ?>
  <?php if (is_month()) : ?>
    <h2> <?php the_time('Y年m月') ?> の記事一覧</h2>
  <?php endif; ?>

  <!-- 固定ページ本文の出力 -->
  <div class="s-newsList">
    <?php while (have_posts()) : the_post(); ?>
      <div class="s-newsList_news">
        <a class="s-newsList_news_link" href="<?php the_permalink() ?>">
          <div class="s-newsList_news_link_textBox">
            <p class="s-newsList_news_link_textBox--date"><?php the_time('Y/m/d') ?></p>
            <p class="s-newsList_news_link_textBox--title"><?php the_title(); ?></p>
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