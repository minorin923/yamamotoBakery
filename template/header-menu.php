
<input id="menuBarToggle" class=" Gm-Toggle_button" type="checkbox" ></input>
<label class="l-MenuBar_label d-MenuBar_label Gd-ButtonDesign Gm-Toggle_label" for="menuBarToggle"><i class="fa fa-bars"></i></label>

<?php
// if ( has_nav_menu( 'Header Navigation' ) ) {
  wp_nav_menu(array(
    'theme_location'  => 'header-navigation',
    'container'       => 'div',
    'container_class' => 'l-MenuBar_menu Gm-Toggle_target',
    'menu_class'      => 'l-MenuBar_list'.((is_front_page())?'':'--sub').' d-MenuBar_list',
  ));
// }
?>