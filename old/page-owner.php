<?php
/*
Template Name: owner
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<main class="OwnerPage">

  <section id="ownerSection" class="OwnerSection Gm-js_fadeIn">
    <div class="OwnerSection__titleArea">
    <h2 class="SectionTitle" data-english ="Owner">当店のオーナー紹介</h2>
    </div>
    <div class="OwnerSection__mainArea">
      <div class="OwnerInfomation">
        <div class="OwnerInfomation__image">
          <div class="imageFrame">
          <img class="image" src="<?= get_template_directory_uri(); ?>/img/owner.png" alt="">
        </div>
        </div>
        <div class="OwnerInfomation__textBox">
          <h3 class="title" data-cat="店長">山本　美乃梨</h3>
          <p class="text">
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