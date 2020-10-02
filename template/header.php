<header class="headerArea">
  <div class="headerContainer">
  <label class="menuButton toggleLabel" for="navAreaToggle"><i class="fa fa-bars"></i></label>
  <h1 class="logoMark">
    <a href="/#topSection"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
  </h1>
  <input id="navAreaToggle" class="toggleButton" type="checkbox"></input>
  <nav class="navArea toggleTarget">
    <div class="navArea_menuBar">
      <h1 class="navArea_menuBar_logoMark">
        <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="">
      </h1>
      <?php
      if (has_nav_menu('header-navigation')) {
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation',
          'container'       => '',
          'menu_class'      => 'navArea_menuBar_list' ,
        ));
      }
      if (has_nav_menu('header-navigation-sub')) {
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation-sub',
          'container'       => '',
          'menu_class'      => 'navArea_menuBar_list--sub' ,
        ));
      }
      if (has_nav_menu('header-navigation-SNS')) {
        wp_nav_menu(array(
          'theme_location'  => 'header-navigation-SNS',
          'container'       => '',
          'menu_class'      => 'navArea_menuBar_list--SNS' ,
        ));
      } ?>
    </div>
    <label class="navArea_blankSpace toggleLabel" for="navAreaToggle"></label>
  </nav>
    </div>
</header>
<!-- header -->