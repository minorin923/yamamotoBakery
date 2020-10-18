<main class="TopPage">

  <!-- start:topSection -->
  <section id="topSection" class="TopSection Js__FadeIn">
    <div class="TopSection__image">
      <div class="imageFrame">
        <img class="image" src="<?= get_template_directory_uri(); ?>/img/cafeSpace.png" alt="お店トップイメージ">
      </div>
      <div class="TopSection__text">
        <img class="line" src="<?= get_template_directory_uri(); ?>/img/topImageText.svg" alt="一日のはじまりに、優雅な朝のひとときを。">
      </div>
    </div>
  </section>
  <!-- end:topSection -->

  <!-- start:newsSection -->
  <section id="newsSection" class="NewsSection Js__FadeIn">
    <div class="NewsSection__titleArea">
      <h2 class="SectionTitle" data-english ="News Tipcs">お客様へのお知らせ</h2>
    </div>
    <div class="NewsSection__mainArea">
      <div class="NewsContents">
        <?= getCatItems(array("count"=>"3", "className"=>"NewsPost", "thumbnail"=>false,"wordCount"=>20, "post_type"=>"news", "taxonomy"=>"news-cat")) ?>
      </div>
    </div>
    <div class="NewsSection__footerArea">
      <a class="moreButton" href="/news">News All</a>
    </div>
  </section>
  <!-- end:newsSection -->

  <!-- start:blogSection -->
  <section id="blogSection" class="BlogSection Js__FadeIn">
    <div class="BlogSection__titleArea">
      <h2 class="SectionTitle" data-english ="Blog Tipcs">当店のブログ</h2>
    </div>
    <div class="BlogSection__mainArea">
      <div class="BlogContents">
      <?= getCatItems(array("count"=>"4", "thumbnail"=>true, "className"=>"BlogPost")) ?>
      </div>
    </div>
    <div class="BlogSection__footerArea">
      <a class="moreButton" href="/blog">Blogs All</a>
    </div>
  </section>
  <!-- end:blogSection -->

  <!-- start:AboutSection -->
  <section id="aboutSection" class="AboutSection Js__FadeIn">
    <div class="AboutSection__titleArea">
      <h2 class="SectionTitle" data-english ="about YamamotoBakery">山本ベーカリーについて</h2>
    </div>
    <div class="AboutSection__mainArea">
      <div class="AboutContents">
        <div class="AboutContents__parts">
          <div class="AboutContents__image">
            <div class="imageFrame">
              <img class="image" src="<?= get_template_directory_uri(); ?>/img/shopPic1.jpg" alt=""></div>
          </div>
          <div class="AboutContents__textBox">
            <h3 class="AboutContents__title" data-cat="～安心安全へのこだわり～">山本ベーカリーについて</h3>
            <p class="AboutContents__text">当店山本ベーカリーでは、こだわり抜いた最高の一品をお客様に
              お召し上がり頂くために、原料、製法など、あらゆる角度から品質の向上に
              努めております。</p>
          </div>
        </div>
        <div class="AboutContents__parts">
          <div class="AboutContents__image">
            <div class="imageFrame">
              <img class="image" src="<?= get_template_directory_uri(); ?>/img/cafeSpace.png" alt=""></div>
          </div>
          <div class="AboutContents__textBox">
            <h3 class="AboutContents__title" data-cat="～優雅なひと時を～">カフェスペース</h3>
            <p class="AboutContents__text">当店カフェスペースは、
              最大4名様までご利用いただけるテーブル席が10席、大通りに面した解放的なカウンター席を10席ご用意しております。
              イートインスペースとして是非ともご利用くださいませ。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end:AboutSection -->

  <!-- start:menuLineUpSection -->
  <section id="menuLineUpSection" class="MenuSection Js__FadeIn">
      <div class="MenuSection__titleArea">
      <h2 class="SectionTitle" data-english ="Menu LineUp">メニューのご紹介</h2>
      </div>
      <div class="MenuSection__mainArea">
        <div class="MenuContents">
          <?php
            $customFields = $cfs->get('menuItem');
            foreach($customFields as $item):
          ?>
          <div class="MenuItem">
            <div class="MenuItem__image">
              <div class="imageFrame">
                <img class="image" src="<?= $item['itemImage'] ?>" alt="">
              </div>
            </div>
            <div class="MenuItem__textBox">
              <div class="itemName"><?= $item['itemName'] ?></div>
              <p class="itemInfo"><?= $item['itemInfo'] ?></p>
              <p class="itemPrice"><?= $item['itemPrice'] ?></p>
            </div>
          </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end:MenuLineUpSection -->
  

</main>
<!-- main -->