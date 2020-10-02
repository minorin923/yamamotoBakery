<header class="headerArea">


  <label class="menuButton toggleLabel" for="navAreaToggle"><i class="fa fa-bars"></i></label>
  <h1 class="logoMark">
    <a href="/#topSection"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
  </h1>
  <input id="navAreaToggle" class="toggleButton" type="checkbox"></input>
  <nav class="navArea <?= ((is_front_page()) ? '' : 'navArea--sub') ?> toggleTarget">
    <label class="navArea_blankSpace toggleLabel" for="navAreaToggle"></label>
    <div class="menuBar <?= ((is_front_page()) ? '' : 'menuBar--sub') ?>">
      <?php
      if (has_nav_menu('header-navigation')) {
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation',
          'container'       => '',
          'menu_class'      => 'menuBar_list' . ((is_front_page()) ? '' : '--sub') ,
        ));
      }

      if (has_nav_menu('header-navigation-SNS')) {
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation-SNS',
          'container'       => '',
          'menu_class'      => 'menuBar_list--SNS' . ((is_front_page()) ? '' : '--sub') ,
        ));
      } ?>

    </div>

  </nav>
</header>
<!-- header -->