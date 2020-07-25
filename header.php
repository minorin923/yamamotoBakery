
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

    <link href="<?= get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet">
    <!--fontAwasome利用-->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- BootstrapのCSS読み込み -->
    <!-- <link href="<?= get_template_directory_uri(); ?>/css/bootstrapCustom.css" rel="stylesheet"> -->
    <!-- jQuery読み込み -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- BootstrapのJS読み込み -->
    <!-- <script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> -->
    <!-- <script src="<?= get_template_directory_uri(); ?>/js/animation.js"></script> -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
    ?>

  

