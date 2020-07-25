<header class="s-header">
  <nav class="s-navArea<?= ((is_front_page()) ? '' : '--sub') ?>">
    <h1 class="s-logoMark">
      <a href="/#top"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
    </h1>

    <?php if (!is_single()) {
      get_template_part('template/header', 'menu');
    } ?>

  </nav>
</header>
<!-- header -->