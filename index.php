<?php
/*
Template Name: index
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

	
<main class="BlogListPage">

	<section class="BlogListSection Gm-js_fadeIn">
    <div class="BlogListSection__titleArea">
    <h2 class="SectionTitle" data-english ="BlogList">ブログ一覧</h2>
    </div>
    <div class="BlogListSection__mainArea">
			<div class="SingleContainer">
				<div class="SingleContainer_singleArea">
					<?php get_template_part('template/archiveContent'); ?>
				</div>
				<!-- end:singleArea -->
				<div class="SingleContainer_sideArea">
					<?php get_template_part('template/widgetArea'); ?>
				</div>
			</div>
		</div>
	</section>

</main>
<!-- main -->

<?php get_footer(); ?>