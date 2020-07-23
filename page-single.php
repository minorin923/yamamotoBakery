<?php
/*
Template Name: subPage
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
  <h2 class="s-topArea_title"><?php the_title_attribute();?></h2>
</div>  
<!-- end:topArea -->

<!-- 固定ページ本文の出力 -->
<?php 
        $content = apply_filters( 'the_content', get_post_field('post_content', get_the_ID()) );
        echo $content;
?>
<!-- end:mainContants -->

<!-- 記事一覧などデータが複数ある場合はページ遷移ボタンを追加する -->
<?php the_posts_pagination(); ?>

<?php get_footer(); ?>