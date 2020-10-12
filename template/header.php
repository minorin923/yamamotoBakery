<header class="headerArea">
  <div class="headerContainer">
  <!-- <label class="menuButton toggleLabel" for="navAreaToggle"><i class="fa fa-bars"></i></label> -->
  <label class="menuButton toggleLabel" for="navAreaToggle">
    <img src="<?= get_template_directory_uri(); ?>/img/menu_icon.svg" alt="">
  </label>
  <h1 class="logoMark">
    <img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="">
  </h1>
  <input id="navAreaToggle" class="toggleButton" type="checkbox"></input>
  <nav class="navArea toggleTarget">
    <div class="navArea_menuBar">
      <h1 class="navArea_menuBar_logoMark">
        <img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="">
      </h1>
      <?php
      if (has_nav_menu('header-navigation')) {
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation',
          'container'       => '',
          'menu_class'      => 'navArea_menuBar_list' ,
        ));
      }
      if (has_nav_menu('header-navigation-SNS')) {
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation-SNS',
          'container'       => '',
          'menu_class'      => 'navArea_menuBar_list--SNS' ,
        ));
      if (has_nav_menu('header-navigation-sub')) {
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation-sub',
          'container'       => '',
          'menu_class'      => 'navArea_menuBar_list--sub' ,
        ));
      }
      } ?>
    </div>
    <label class="navArea_blankSpace toggleLabel" for="navAreaToggle"></label>
  </nav>
</header>
<!-- header -->