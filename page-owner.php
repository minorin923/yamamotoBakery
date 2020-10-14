<?php
/*
Template Name: owner
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<main class="main">

  <div class="subPageTitleArea_title">
  <h2 class="subPageTitleArea_title" data-english ="Owner">当店のオーナー紹介</h2>
  </div>

  <section id="ownerSection" class="sectionContainer Gm-js_fadeIn">
    <div class="sectionContainer_frame">
      <div class="ownerInfomation">
        <div class="ownerPicture">
          <div class="imageFrame">
          <img class="image" src="<?= get_template_directory_uri(); ?>/img/owner.png" alt="">
        </div>
        </div>
        <div class="ownertextBox">
          <h3 class="ownertextBox_title" data-cat="店長">山本　美乃梨</h3>
          <p class="ownertextBox_text">
            1987年横浜市生まれ。
            調理師学校卒業後、調理師として都内のホテルに就職、パン職人として働く。その後、独立し地元横浜で「山本ベーカリー」を開業。
            2人の娘と共に横浜一番のベーカリーを目指すべく日々修行中。
          </p>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- main -->

<?php get_footer(); ?>