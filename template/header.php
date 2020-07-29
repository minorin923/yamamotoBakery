<header class="l-HeaderArea">
  <nav class="l-NavArea<?= ((is_front_page()) ? '' : '--sub') ?>">
    <h1 class="l-LogoMark">
      <a href="/#topSection"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
    </h1>

    <?php if (!is_single()) {
      get_template_part('template/header', 'menu');
    } ?>

  </nav>
</header>
<!-- header -->