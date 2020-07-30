<header class="l-HeaderArea">

  <input id="navAreaToggle" class="Gm-Toggle_button" type="checkbox"></input>
  <label class="l-MenuButton d-MenuButton Gd-ButtonDesign Gm-Toggle_label" for="navAreaToggle"><i class="fa fa-bars"></i></label>

  <nav class="l-NavArea d-NavArea <?= ((is_front_page()) ? '' : 'l-NavArea--sub d-NavArea--sub') ?>  Gm-Toggle_target">
    <h1 class="l-LogoMark">
      <a href="/#topSection"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
    </h1>
    <?php
    if (has_nav_menu('header-navigation')) {
      wp_nav_menu(array(
        'theme_location'  => 'header-navigation',
        'container'       => 'div',
        'container_class' => 'l-MenuBar',
        'menu_class'      => 'l-MenuBar_list' . ((is_front_page()) ? '' : '--sub') . ' d-MenuBar_list',
      ));
    } ?>

  </nav>
</header>
<!-- header -->