<?php
/*
Template Name: home
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<main class="main">

  <!-- start:topSection -->
  <section id="topSection" class=" Gm-js_fadeIn">
    <div class="l-MainImageArea Gl-AspectFixed--16-9">
      <div class="l-MainImageArea_frame Gl-AspectFixed_frame">
        <img class="l-MainImageArea_frame_image Gl-AspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/cafeSpace1.png" alt="">
      </div>
      <div class="l-MainImageText d-MainImageText">
        <span class="l-MainImageText_line1 d-MainImageText_line">白に包まれた優しい空間で</span>
        <span class="l-MainImageText_line2 d-MainImageText_line">優雅な朝のひと時を。</span>
      </div>
    </div>
  </section>
  <!-- end:topSection -->

  <!-- start:newsSection -->
  <section id="newsSection" class="l-SectionArea Gm-js_fadeIn">
    <div class="l-SectionArea_frame d-SectionArea_frame">
      <div class="l-SectionArea_frame_titleArea d-SectionArea_frame_titleArea">
        <h2 class="l-SectionArea_frame_titleArea_title d-SectionArea_frame_titleArea_title">News Topics</h2>
      </div>
      <div class="d-SectionArea_frame_mainArea">
        <div class="l-NewsList">
         <?= getCatItems(array("count"=>"3","listtype"=>"news", "post_type"=>"news", "taxonomy"=>"news-cat")) ?>
        </div>
      </div>
      <div class="l-SectionArea_frame_footerArea d-SectionArea_frame_footerArea ">
        <a class="l-MoreButton d-MoreButton  Gd-ButtonDesign" href="/news">
          <span>more</span> <span class="arrow"></span>
        </a>
      </div>
    </div>
  </section>
  <!-- end:newsSection -->

  <!-- start:blogSection -->
  <section id="blogSection" class=" l-SectionArea Gm-js_fadeIn">
    <div class="l-SectionArea_frame d-SectionArea_frame">
      <div class="l-SectionArea_frame_titleArea d-SectionArea_frame_titleArea">
        <h2 class="l-SectionArea_frame_titleArea_title d-SectionArea_frame_titleArea_title">blog</h2>
      </div>
      <div class="d-SectionArea_frame_mainArea">
        <div class="l-BlogList">
        <?= getCatItems(array("count"=>"4")) ?>
        </div>
      </div>
      <div class="l-SectionArea_frame_footerArea d-SectionArea_frame_footerArea">
        <a class="l-MoreButton d-MoreButton Gd-ButtonDesign" href="/blog">
          <span>more</span> <span class="arrow"></span>
        </a>
      </div>
    </div>
  </section>
  <!-- end:blogSection -->

  <!-- start:AboutSection -->
  <section id="aboutSection" class=" l-SectionArea Gm-js_fadeIn">
    <div class="l-SectionArea_frame d-SectionArea_frame">
      <div class="l-SectionArea_frame_titleArea d-SectionArea_frame_titleArea">
        <h2 class="l-SectionArea_frame_titleArea_title d-SectionArea_frame_titleArea_title">About Yamamoto Bakery</h2>
      </div>
      <div class="d-SectionArea_frame_mainArea">
        <div class="l-AboutContents">
          <div class="l-AboutContents_parts ">
            <div class="l-AboutContents_parts_image Gl-AspectFixed--16-9">
              <div class="Gl-AspectFixed_frame">
                <img class="Gl-AspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/shopPic1.jpg" alt=""></div>
            </div>
            <div class="l-AboutContents_parts_textBox">
              <h3 class="l-AboutContents_parts_textBox_title d-AboutContents_parts_textBox_title" data-cat="～安心安全へのこだわり～">山本ベーカリーについて</h3>
              <p class="l-AboutContents_parts_textBox_text d-AboutContents_parts_textBox_text">当店山本ベーカリーでは、こだわり抜いた最高の一品をお客様に
                お召し上がり頂くために、原料、製法など、あらゆる角度から品質の向上に
                努めております。</p>
            </div>
          </div>
          <div class="l-AboutContents_parts--reverse">
            <div class="l-AboutContents_parts_image Gl-AspectFixed--16-9">
              <div class="Gl-AspectFixed_frame">
                <img class="Gl-AspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/cafeSpace1.png" alt=""></div>
            </div>
            <div class="l-AboutContents_parts_textBox">
              <h3 class="l-AboutContents_parts_textBox_title d-AboutContents_parts_textBox_title" data-cat="～優雅なひと時を～">カフェスペース</h3>
              <p class="l-AboutContents_parts_textBox_text d-AboutContents_parts_textBox_text">当店カフェスペースは、
                最大4名様までご利用いただけるテーブル席が10席、大通りに面した解放的なカウンター席を10席ご用意しております。
                イートインスペースとして是非ともご利用くださいませ。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end:l-AboutSection -->

  <!-- start:menuLineUpSection -->
  <section id="menuLineUpSection" class="l-SectionArea Gm-js_fadeIn">
    <div class="l-SectionArea_frame d-SectionArea_frame">
      <div class="l-SectionArea_frame_titleArea d-SectionArea_frame_titleArea">
        <h2 class="l-SectionArea_frame_titleArea_title d-SectionArea_frame_titleArea_title">Menu LineUp</h2>
      </div>
      <div class="d-SectionArea_frame_mainArea">
        <div class="l-MenuLineUp d-MenuLineUp">
          <div class="l-MenuLineUp_menu">
            <div class="l-MenuLineUp_menu_image Gl-AspectFixed--4-3">
              <div class="Gl-AspectFixed_frame"><img class="Gl-AspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt=""></div>
            </div>
            <div class="l-MenuLineUp_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">1斤：500円（税別)</p>
              <p class="itemInfo">1本(2斤)：1,000円(税別)</p>
            </div>
          </div>
          <div class="l-MenuLineUp_menu">
            <div class="l-MenuLineUp_menu_image Gl-AspectFixed--4-3">
              <div class="Gl-AspectFixed_frame"><img class="Gl-AspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt=""></div>
            </div>
            <div class="l-MenuLineUp_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">1斤：500円（税別)</p>
              <p class="itemInfo">1本(2斤)：1,000円(税別)</p>
            </div>
          </div>
          <div class="l-MenuLineUp_menu">
            <div class="l-MenuLineUp_menu_image Gl-AspectFixed--4-3">
              <div class="Gl-AspectFixed_frame"><img class="Gl-AspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt=""></div>
            </div>
            <div class="l-MenuLineUp_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">1斤：500円（税別)</p>
              <p class="itemInfo">1本(2斤)：1,000円(税別)</p>
            </div>
          </div>
          <div class="l-MenuLineUp_menu">
            <div class="l-MenuLineUp_menu_image Gl-AspectFixed--4-3">
              <div class="Gl-AspectFixed_frame"><img class="Gl-AspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt=""></div>
            </div>
            <div class="l-MenuLineUp_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">1斤：500円（税別)</p>
              <p class="itemInfo">1本(2斤)：1,000円(税別)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end:MenuLineUpSection -->

  <!-- start:shopinfoSection -->
  <section id="shopInfoSection" class="l-SectionArea Gm-js_fadeIn">
    <div class="l-SectionArea_frame">
      <div class="l-SectionArea_frame_titleArea d-SectionArea_frame_titleArea">
        <h2 class="l-SectionArea_frame_titleArea_title d-SectionArea_frame_titleArea_title">Shop Info</h2>
      </div>
      <div class="d-SectionArea_frame_mainArea">
        <div class="l-ShopInfomation">
          <div class="l-ShopInfomation_shopImage Gl-AspectFixed--16-9">
            <div class="l-ShopInfomation_shopImage_frame Gl-AspectFixed_frame"><img class="l-ShopInfomation_shopImage_frame_image Gl-AspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/shop1.png" alt=""></div>
          </div>
          <div class="l-ShopInfomation_textContainer d-ShopInfomation_textContainer"><span class="shopType">Cafe&amp;Bakery</span>
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
        <div class="l-GoogleMap"><img src="/wp-content/themes/yamamotobakery/img/googlemap.png" alt=""></div>
      </div>
    </div>
  </section>
  <!-- end:shopinfoSection -->

</main>
<!-- main -->

<?php get_footer(); ?>