<?php
/*
Template Name: newslist
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<!-- サブページ用のナビゲーションバー  -->
<header class="s-header--subpage"> 
  <nav class="navbar navbar-expand-md navbar-light ">
    <h1 class="navbar-brand s-header_logoMark">
    <a  href="/#top"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
    </h1>
    
    <button class="s-header_button navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>

        <?php
          // if ( has_nav_menu( 'Header Navigation' ) ) {
          wp_nav_menu( array( 
            'theme_location'  => 'header-navigation',
            'container'       => 'div',
            'container_class' => 's-header_menuList--subpage collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'menu_class'      => 'navbar-nav ',
          ));
          // }
        ?>
  </nav>
</header>
<!-- end:header -->

<!-- トップイメージを投稿ページのアイキャッチ画像から取得する -->
<div class="s-topArea" style="background-image:url(
  <?php if (has_post_thumbnail()) : the_post_thumbnail_url( 'medium' );?>
  <?php else : echo get_template_directory_uri(); ?>/img/newsPic.png
  <?php endif;?>);">
  <h2 class="s-topArea_title">newsList</h2>
</div>  
<!-- end:topArea -->

<section class="s-single  s-section">
<div class="s-singleArea">

<?php if(is_month()): ?>
  <h2> <?php the_time('Y年m月')?> の記事一覧</h2> 
<?php endif; ?>

<!-- 固定ページ本文の出力 -->
<div class="s-newsList">
<?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <div class="s-newsList_news">
          <a class="s-newsList_news_link" href="<?php the_permalink() ?>">
            <div class="s-newsList_news_link_textBox">
              <p class="s-newsList_news_link_textBox--date"><?php the_time('Y/m/d') ?></p>
              <p class="s-newsList_news_link_textBox--title"><?php the_title(); ?></p>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>記事が見つかりませんでした。</p>
    <?php endif; ?>
<?php /* postSingle：END */ ?>
</div>

<!-- 記事一覧などデータが複数ある場合はページ遷移ボタンを追加する -->
<?php the_posts_pagination(); ?>
<!-- end:mainContants -->

</div>
<!-- end:singleArea -->

<!-- サイドバー読み込み -->
<?php if ( is_active_sidebar( 'widgetarea-3' ) ) : ?>
	<div class="widget-column s-widgetArea">
	<?php dynamic_sidebar( 'widgetarea-3' ); ?>
	</div><!-- .widget-area -->
<?php  endif; ?>
</section>

<?php get_footer(); ?>