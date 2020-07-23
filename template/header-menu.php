<button class="s-header_button navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon "></span>
</button>

<?php
// if ( has_nav_menu( 'Header Navigation' ) ) {

wp_nav_menu(array(
  'theme_location'  => 'header-navigation',
  'container'       => 'div',
  'container_class' => 's-header_menuList collapse navbar-collapse',
  'container_id'    => 'navbarSupportedContent',
  'menu_class'      => 'navbar-nav flex-column',
));
// }
?>