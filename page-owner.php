<?php
/*
Template Name: owner
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<main class="main">

  <div class="titleBackGround">
    <img src="<?= get_template_directory_uri(); ?>/img/owner.svg" alt="">
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

  <!-- start:shopinfoSection -->
  <section id="shopInfoSection" class="sectionContainer Gm-js_fadeIn">
    <div class="sectionContainer_frame">
      <div class="sectionContainer_frame_titleArea">
        <h2 class="sectionContainer_frame_titleArea_title">
        <img src="<?= get_template_directory_uri(); ?>/img/shopInfoTitle.svg" alt="">
        </h2>
      </div>
      <div class="sectionContainer_frame_mainArea">
        <div class="shopInfomation">
          <div class="shopInfomation_shopImage">
            <div class="imageFrame">
              <img class="image" src="<?= get_template_directory_uri(); ?>/img/shopInfo.png" alt="">
            </div>
          </div>
          <div class="shopInfomation_textContainer"><span class="shopType">Cafe&amp;Bakery</span>
            <h3 class="shopName"><?= $cfs->get('name'); ?></h3>
            <address class="shopAddress"><?= $cfs->get('address'); ?></address>
            <p class="shopAccess"><?= $cfs->get('access'); ?></p>

            <table class="shopInfo">
              <tbody>
                <tr>
                  <th>電話番号</th>
                  <td><a class="tel" href="tel:<?= $cfs->get('tel'); ?>"><?= $cfs->get('tel'); ?></a></td>
                </tr>
                <tr>
                  <th>営業時間</th>
                  <td><?= $cfs->get('time'); ?></td>
                </tr>
                <tr>
                  <th>定休日</th>
                  <td><?= $cfs->get('holiday'); ?></td>
                </tr>
                <tr>
                  <th>駐車場</th>
                  <td><?= $cfs->get('parking'); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="googleMap"><img src="/wp-content/themes/yamamotobakery/img/googlemap.png" alt=""></div>
      </div>
    </div>
  </section>
  <!-- end:shopinfoSection -->
</main>
<!-- main -->

<?php get_footer(); ?>