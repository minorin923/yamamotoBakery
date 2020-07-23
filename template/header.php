<header class="s-header">
  <nav class="navbar navbar-expand-md navbar-light ">
    <h1 class="s-navbar-brand s-header_logoMark">
      <a href="/#top"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
    </h1>

    <?php if (is_front_page()) {
      get_template_part('template/header', 'menu');
    } ?>

  </nav>
</header>
<!-- header -->