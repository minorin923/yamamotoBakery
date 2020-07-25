
<input id="menuBarToggle" class="s-menuBar_button s-toggle_button" type="checkbox" ></input>
<label class="s-menuBar_label s-toggle_label" for="menuBarToggle">Button</label>

<?php
// if ( has_nav_menu( 'Header Navigation' ) ) {
  wp_nav_menu(array(
    'theme_location'  => 'header-navigation',
    'container'       => 'div',
    'container_class' => 's-menuBar_menu s-toggle_target',
    'menu_class'      => 's-menuBar_menu_list'.((is_front_page())?'':'--sub'),
  ));
// }
?>