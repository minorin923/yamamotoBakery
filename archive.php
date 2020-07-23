<?php
/*
Template Name: archive
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
  <?php else : echo get_template_directory_uri(); ?>/img/blogPic.png
  <?php endif;?>);">
  <h2 class="s-topArea_title">blogList</h2>
</div>  
<!-- end:topArea -->

<?php if(have_posts()): ?>
<!-- サイドバー読み込み -->
<?php if(is_month()): ?>
  <h2> <?php the_time('Y年m月')?> の記事一覧</h2> 
<?php endif; ?>
<?php if(is_category()): ?>
  <h2> <?= get_the_category()[0]->name ?> カテゴリの記事一覧</h2> 
<?php endif; ?>

<!-- 固定ページ本文の出力 -->
<div class="s-blogList s-section">
    <?php while(have_posts()):the_post(); ?>

    <div class="s-blogList_blog">
      <a class="s-blogList_blog_link" href="<?php the_permalink(); ?>">
        <?php // サムネイルの有無チェック
          echo '<div class="s-blogList_blog_link_image s-aspectFixed--4-3" style="max-width:100%;">';
          echo '<div class="s-aspectFixed_frame">';
          if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail($page->ID, 'thumbnail',array( 'class' => 's-aspectFixed_frame_image' ));
          }else{
            echo '<div class="s-aspectFixed_frame_image" style="background-color:gray;"></div>';
          }
          echo '<span class="s-blogList_blog_link_image_category">'. get_the_category()[0]->name .'</span>';
          echo '</div></div>'; 
        ?>
        <div class="s-blogList_blog_link_textBox">
          <p class="s-blogList_blog_link_textBox--date"><?php the_time('Y/m/d') ?></p>
          <p class="s-blogList_blog_link_textBox--title"><?php the_title(); ?></p>
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
<?php the_posts_pagination(array(
	'mid_size' => 1,
	'prev_text' => __( '<i class="fa fa-caret-left"></i>', 'adelle' ),
    'next_text' => __( '<i class="fa fa-caret-right"></i>', 'adelle' ),
)); ?>
<!-- end:mainContants -->

<?php get_footer(); ?>