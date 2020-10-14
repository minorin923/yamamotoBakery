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
  <section id="topSection" class="m-Js_FadeIn">
    <div class="mainImageArea">
      <div class="imageFrame">
        <img class="image" src="<?= get_template_directory_uri(); ?>/img/cafeSpace.png" alt="">
      </div>
      <div class="mainImageArea_text">
        <span class="line1">一日のはじまりに、</span>
        <span class="line2">優雅な朝のひとときを。</span>
      </div>
    </div>
  </section>
  <!-- end:topSection -->

  <!-- start:newsSection -->
  <section id="newsSection" class="sectionContainer m-Js_FadeIn">
    <div class="sectionContainer_frame">
      <div class="sectionContainer_frame_titleArea">
        <h2 class="sectionContainer_frame_titleArea_title" data-english ="News Tipcs">お客様へのお知らせ</h2>
      </div>
      <div class="sectionContainer_frame_mainArea">
        <div class="newsContents">
         <?= getCatItems(array("count"=>"3", "className"=>"post_news", "thumbnail"=>false,"wordCount"=>20, "post_type"=>"news", "taxonomy"=>"news-cat")) ?>
        </div>
      </div>
      <div class="sectionContainer_frame_footerArea">
        <a class="moreButton" href="/news">News All</a>
      </div>
    </div>
  </section>
  <!-- end:newsSection -->

  <!-- start:blogSection -->
  <section id="blogSection" class="sectionContainer m-Js_FadeIn">
    <div class="sectionContainer_frame">
      <div class="sectionContainer_frame_titleArea">
        <h2 class="sectionContainer_frame_titleArea_title" data-english ="Blog Tipcs">当店のブログ</h2>
      </div>
      <div class="sectionContainer_frame_mainArea">
        <div class="blogContents">
        <?= getCatItems(array("count"=>"4", "thumbnail"=>true, "className"=>"post_blog")) ?>
        </div>
      </div>
      <div class="sectionContainer_frame_footerArea">
        <a class="moreButton" href="/blog">Blogs All</a>
      </div>
    </div>
  </section>
  <!-- end:blogSection -->

  <!-- start:AboutSection -->
  <section id="aboutSection" class="sectionContainer m-Js_FadeIn">
    <div class="">
      <div class="sectionContainer_frame_titleArea">
      <h2 class="sectionContainer_frame_titleArea_title" data-english ="about YamamotoBakery">山本ベーカリーについて</h2>
      </div>
      <div class="sectionContainer_frame_mainArea">
        <div class="aboutContents">
          <div class="aboutContents_parts ">
            <div class="aboutContents_parts_image">
              <div class="imageFrame">
                <img class="image" src="<?= get_template_directory_uri(); ?>/img/shopPic1.jpg" alt=""></div>
            </div>
            <div class="aboutContents_parts_textBox">
              <h3 class="aboutContents_parts_textBox_title" data-cat="～安心安全へのこだわり～">山本ベーカリーについて</h3>
              <p class="aboutContents_parts_textBox_text">当店山本ベーカリーでは、こだわり抜いた最高の一品をお客様に
                お召し上がり頂くために、原料、製法など、あらゆる角度から品質の向上に
                努めております。</p>
            </div>
          </div>
          <div class="aboutContents_parts reverse">
            <div class="aboutContents_parts_image">
              <div class="imageFrame">
                <img class="image" src="<?= get_template_directory_uri(); ?>/img/cafeSpace.png" alt=""></div>
            </div>
            <div class="aboutContents_parts_textBox">
              <h3 class="aboutContents_parts_textBox_title" data-cat="～優雅なひと時を～">カフェスペース</h3>
              <p class="aboutContents_parts_textBox_text">当店カフェスペースは、
                最大4名様までご利用いただけるテーブル席が10席、大通りに面した解放的なカウンター席を10席ご用意しております。
                イートインスペースとして是非ともご利用くださいませ。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end:AboutSection -->

  <!-- start:menuLineUpSection -->
  <section id="menuLineUpSection" class="sectionContainer m-Js_FadeIn">
    <div class="sectionContainer_frame">
      <div class="sectionContainer_frame_titleArea">
      <h2 class="sectionContainer_frame_titleArea_title" data-english ="Menu LineUp">メニューのご紹介</h2>
      </div>
      <div class="sectionContainer_frame_mainArea">
        <div class="menuLineUp">
          <div class="menuLineUp_menu">
            <div class="menuLineUp_menu_image">
              <div class="imageFrame">
                <img class="image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt="">
              </div>
            </div>
            <div class="menuLineUp_menu_textBox">
              <div class="itemName">十勝生クリーム食パン</div>
              <p class="itemInfo">小麦を国産にした贅沢なパンです。国産小麦の豊潤な味をお楽しみいただけます。</p>
              <p class="itemPrice">1本(2斤)：1,000円(税別)</p>
            </div>
          </div>
          <div class="menuLineUp_menu">
            <div class="menuLineUp_menu_image">
              <div class="imageFrame">
                <img class="image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt="">
              </div>
            </div>
            <div class="menuLineUp_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">小麦を国産にした贅沢なパンです。国産小麦の豊潤な味をお楽しみいただけます。</p>
              <p class="itemPrice">1本(2斤)：1,000円(税別)</p>
            </div>
          </div>
          <div class="menuLineUp_menu">
            <div class="menuLineUp_menu_image">
              <div class="imageFrame">
                <img class="image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt="">
              </div>
            </div>
            <div class="menuLineUp_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">小麦を国産にした贅沢なパンです。国産小麦の豊潤な味をお楽しみいただけます。</p>
              <p class="itemPrice">1本(2斤)：1,000円(税別)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end:MenuLineUpSection -->
  
  <!-- start:shopinfoSection -->
  <section id="shopInfoSection" class="sectionContainer m-Js_FadeIn">
    <div class="sectionContainer_frame">
      <div class="sectionContainer_frame_titleArea">
        <h2 class="sectionContainer_frame_titleArea_title" data-english ="Shop Infomation">店舗紹介</h2>
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
        <div class="googleMap">
        <iframe class="googleMap_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.785154906868!2d139.7663702505756!3d35.682291780096776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfc40f10f69%3A0x30bde288c0edfb04!2z5p2x5Lqs6aeF5LiA55Wq6KGX!5e0!3m2!1sja!2sjp!4v1602640666300!5m2!1sja!2sjp" width="1000" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- end:shopinfoSection -->
</main>
<!-- main -->

<?php get_footer(); ?>