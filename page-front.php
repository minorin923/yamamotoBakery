<?php
/*
Template Name: frontpage
*/
?>

<?php get_header(); ?>

<header class="s-header"> 
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
            'container_class' => 's-header_menuList collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'menu_class'      => 'navbar-nav flex-column',
          ));
          // }
        ?>

      </nav>
    </header>
    <!-- header -->

<?php //記事本文の表示
                                        //スラッグ名
        // $page_data = get_page_by_path('HomePage'); 
        // $page = get_post($page_data);
        // $content = $page -> post_content;

        $content = apply_filters( 'the_content', get_post_field('post_content', get_the_ID()) );
        echo $content;
?>
<?php get_footer(); ?>