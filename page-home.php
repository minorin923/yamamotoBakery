<?php
/*
Template Name: home
*/
// Topページ以外のページデザインとなるテンプレートファイル
?>

<?php get_header(); ?>

<?php get_template_part('template/header'); ?>

<main class="main">
  <!-- start:s-topSection -->

  <section id="s-top" class="s-topSection s-js">
    <div class="s-mainArea">
      <div class="s-pictureContainer s-aspectFixed--16-9">
        <div class="s-pictureContainer_frame s-aspectFixed_frame">
          <div class="s-pictureContainer_frame_textBox"><span class="s-pictureContainer_frame_textBox--line1">白に包まれた優しい空間で</span>
            <span class="s-pictureContainer_frame_textBox--line2">優雅な朝のひと時を。</span>
            <img class="s-pictureContainer_frame_textBox--image" src="/wp-content/themes/yamamotobakery/img/icon1.png" alt=""></div>
          <img class="s-pictureContainer_frame_image s-aspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/cafeSpace1.png" alt="">

        </div>
      </div>
    </div>
  </section><!-- end:s-topSection -->

  <!-- start:s-newsSection -->

  <section id="s-news" class="s-section s-js">
    <div class="s-section_container">
      <div class="s-section_container_titleArea">
        <h2 class="s-section_container_titleArea_title">News Topics</h2>
      </div>
      <div class="s-section_container_mainArea">
        <div class="s-newsList">
          [getArticleList count="3" category_id="5" classname="s-newsList_news"]

        </div>
      </div>
      <div class="s-section_container_footerArea"><a class="s-section_container_footerArea_link btn btn-light" href="/news" role="button">
          <span>more</span> <span class="arrow"></span>
        </a></div>
    </div>
  </section><!-- end:s-newsSection -->

  <!-- start:s-blogSection -->

  <section id="s-blog" class=" s-section s-js"> 
    <div class="s-section_container">
      <div class="s-section_container_titleArea">
        <h2 class="s-section_container_titleArea_title">blog</h2>
      </div>
      <div class="s-section_container_mainArea">
        <div class="s-blogList">
          [getArticleList count="4" category_id="4" classname="s-blogList_blog"]</div>
      </div>
      <div class="s-section_container_footerArea"><a class="s-section_container_footerArea_link btn btn-light" href="/blog" role="button">
          <span>more</span> <span class="arrow"></span>
        </a></div>
    </div>
  </section><!-- end:s-blogSection -->

  <!-- start:s-aboutSection -->

  <section id="s-about" class=" s-section s-js">
    <div class="s-section_container">
      <div class="s-section_container_titleArea">
        <h2 class="s-section_container_titleArea_title">About Yamamoto Bakery</h2>
      </div>
      <div class="s-section_container_mainArea">
        <div class="s-about">
          <div class="s-about_parts ">
            <div class="s-about_parts_image s-aspectFixed--16-9">
              <div class="s-aspectFixed_frame"><img class="s-aspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/shopPic1.jpg" alt=""></div>
            </div>
            <div class="s-about_parts_textBox">
              <h3 class="s-about_parts_textBox--title" data-cat="～安心安全へのこだわり～">山本ベーカリーについて</h3>
              <p class="s-about_parts_textBox--text">当店山本ベーカリーでは、こだわり抜いた最高の一品をお客様に
                お召し上がり頂くために、原料、製法など、あらゆる角度から品質の向上に
                努めております。</p>

            </div>
          </div>
          <div class="s-about_parts--reverse">
            <div class="s-about_parts_image s-aspectFixed--16-9">
              <div class="s-aspectFixed_frame"><img class="s-aspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/cafeSpace1.png" alt=""></div>
            </div>
            <div class="s-about_parts_textBox">
              <h3 class="s-about_parts_textBox--title" data-cat="～優雅なひと時を～">カフェスペース</h3>
              <p class="s-about_parts_textBox--text">当店カフェスペースは、
                最大4名様までご利用いただけるテーブル席が10席、大通りに面した解放的なカウンター席を10席ご用意しております。
                イートインスペースとして是非ともご利用くださいませ。</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end:s-aboutSection -->

  <!-- start:s-menuLineUpSection -->

  <section id="s-menuLineUp" class="s-menuSection s-section s-js">
    <div class="s-section_container">
      <div class="s-section_container_titleArea">
        <h2 class="s-section_container_titleArea_title">Menu LineUp</h2>
      </div>
      <div class="s-section_container_mainArea">
        <div class="s-menuList">
          <div class="s-menuList_menu">
            <div class="s-menuList_menu_image s-aspectFixed--4-3">
              <div class="s-aspectFixed_frame"><img class="s-aspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt=""></div>
            </div>
            <div class="s-menuList_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">1斤：500円（税別)</p>
              <p class="itemInfo">1本(2斤)：1,000円(税別)</p>

            </div>
          </div>
          <div class="s-menuList_menu">
            <div class="s-menuList_menu_image s-aspectFixed--4-3">
              <div class="s-aspectFixed_frame"><img class="s-aspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt=""></div>
            </div>
            <div class="s-menuList_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">1斤：500円（税別)</p>
              <p class="itemInfo">1本(2斤)：1,000円(税別)</p>

            </div>
          </div>
          <div class="s-menuList_menu">
            <div class="s-menuList_menu_image s-aspectFixed--4-3">
              <div class="s-aspectFixed_frame"><img class="s-aspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt=""></div>
            </div>
            <div class="s-menuList_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">1斤：500円（税別)</p>
              <p class="itemInfo">1本(2斤)：1,000円(税別)</p>

            </div>
          </div>
          <div class="s-menuList_menu">
            <div class="s-menuList_menu_image s-aspectFixed--4-3">
              <div class="s-aspectFixed_frame"><img class="s-aspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/bleed.png" alt=""></div>
            </div>
            <div class="s-menuList_menu_textBox">
              <p class="itemName">十勝生クリーム食パン</p>
              <p class="itemInfo">1斤：500円（税別)</p>
              <p class="itemInfo">1本(2斤)：1,000円(税別)</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end:s-newsSection -->

  <!-- start:s-shopinfoSection -->

  <section id="s-shopInfo" class="s-shpoinfoSection s-section s-js">
    <div class="s-section_container">
      <div class="s-section_container_titleArea">
        <h2 class="s-section_container_titleArea_title">Shop Info</h2>
      </div>
      <div class="s-section_container_mainArea">
        <div class="s-shopinfoContainer">
          <div class="s-shopinfoContainer_shopImage s-aspectFixed--16-9">
            <div class="s-shopinfoContainer_shopImage_frame s-aspectFixed_frame"><img class="s-shopinfoContainer_shopImage_frame_image s-aspectFixed_frame_image" src="/wp-content/themes/yamamotobakery/img/shop1.png" alt=""></div>
          </div>
          <div class="s-shopinfoContainer_textContainer"><span class="shopType">Cafe&amp;Bakery</span>
            <h3 class="shopName">Yamamoto Bakery (山本ベーカリー)</h3>
            <address class="shopAddress">〒666-0000 東京都23区某所某町目1-12-1</address>
            <p class="shopAccess">東京都心地下鉄 某駅から徒歩5分</p>
            <p class="shopAccess">東京私鉄某線 某駅から徒歩4分</p>

            <table class="shopInfo">
              <tbody>
                <tr>
                  <th>電話番号</th>
                  <td><a class="tel" href="tel:0123-45-6789">0123-45-6789</a></td>
                </tr>
                <tr>
                  <th>営業時間</th>
                  <td>9:00~17:00</td>
                </tr>
                <tr>
                  <th>定休日</th>
                  <td>土曜日・日曜日</td>
                </tr>
                <tr>
                  <th>駐車場</th>
                  <td>5台まで</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="googlemap"><img src="/wp-content/themes/yamamotobakery/img/googlemap.png" alt=""></div>
      </div>
    </div>
  </section><!-- end:s-shopinfoSection -->

</main>
<!-- main -->

<?php get_footer(); ?>