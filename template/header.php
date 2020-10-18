<header class="HeaderArea">
  <div class="HeaderContainer">
    <label class="menuButton toggleLabel" >
      <img src="<?= get_template_directory_uri(); ?>/img/menu_icon.svg" alt="">
    </label>
    <h1 class="logoMark">
      <img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="">
    </h1>
    <!-- <input id="navAreaToggle" class="toggleButton" type="checkbox"></input> -->
    <div class="HeaderContainer__NavArea">
      <nav class="NavArea">
        <div class="NavArea__menuBar">
          <h1 class="NavArea__logoMark">
            <img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="">
          </h1>
          <?php
          if (has_nav_menu('header-navigation')) {
            wp_nav_menu(array(
              'theme_location'  => 'header-navigation',
              'container'       => '',
              'menu_class'      => 'NavArea__mainList' ,
            ));
          }
          if (has_nav_menu('header-navigation-SNS')) {
            wp_nav_menu(array(
              'theme_location'  => 'header-navigation-SNS',
              'container'       => '',
              'menu_class'      => 'NavArea__snsList' ,
            ));
          }
          if (has_nav_menu('header-navigation-sub')) {
            wp_nav_menu(array(
              'theme_location'  => 'header-navigation-sub',
              'container'       => '',
              'menu_class'      => 'NavArea__subList' ,
            ));
          } ?>
        </div>
        <label class="NavArea__blankSpace toggleItem"></label>
      </nav>
    </div>
  </div>
</header>
<!-- header -->