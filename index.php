<?php
$title = '株式会社ユタカ産業-化粧箱・商品パッケージ・販売什器';
$description = '株式会社ユタカ産業では包装資材から美粧パッケージ・化粧箱・ディスプレイ・店舗・販売什器まで、各分野において業界の最前線にて手掛けております。企画・設計から印刷、加工、セットアップまでご相談ください。';
$is_home = true; //トップページの判定用の変数
include 'inc/head.php'; // head.php の読み込み
?>
<body>
<div id="container">
<?php
include 'inc/header.php'; // header.php の読み込み
?>
  <!-- main -->
  <main class="l-main"> 
    <!-- hero image -->
    <div id="slider">
      <h2>パッケージをより、豊かに。<span>化粧箱、POP、ディスプレイなど<br>
        印刷物全般的にご提案。</span></h2>
    </div>
    <!-- about -->
    <section class="l-content-expanded section" id="about">
      <header class="section-header">
        <p><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">イメージを伝えるパッケージ。<br class="spShow">
          店舗と商品を彩るディスプレイ。</span></span></p>
        <p><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">その目的や役割によって、<br class="spShow">
          様々なデザインや機能が<br class="spShow">
          求められています。</span></span></p>
      </header>
      <p class="section-description">印刷業界でも<br class="spShow">
        急速な変化が進みつつあり、<br>
        単に高品質・低コスト・短納期のみならず<br class="spShow">
        高い企画力が<br class="spShow">
        必要とされる時代になりました。<br>
        我々は、<br class="spShow">
        そんなお客様の全てのニーズに的確かつ<br class="spShow">
        迅速に対応させて頂くために、<br>
        社員一同、<br class="spShow">
        心を込めて取り組んでおります。<br>
      </p>
      <div class="icon-01 zoomInTrigger"><img src="assets/images/cardboard.png" alt="" class="apng-image"></div>
    </section>
    <!-- works -->
    <section class="l-content-expanded section" id="works">
      <header>
        <h2><span>制作実績</span></h2>
      </header>
      <p class="section-description">デザインに差がつく設計</p>
      <div class="img-gallery">
        <ul class="slider2">
          <li><img src="assets/images/item01.jpg" alt=""></li>
          <li><img src="assets/images/item02.jpg" alt=""></li>
          <li><img src="assets/images/item03.jpg" alt=""></li>
          <li><img src="assets/images/item04.jpg" alt=""></li>
          <li><img src="assets/images/item05.jpg" alt=""></li>
          <li><img src="assets/images/item06.jpg" alt=""></li>
          <!--/slider-->
        </ul>
      </div>
      <div><a href="service.php#works" class="btn03 pushright"><span>一覧を見る</span></a></div>
    </section>
    <!-- news -->
    <section class="l-content-expanded section" id="news">
      <header>
        <h2><span>NEWS</span></h2>
      </header>
      <div class="news-wrap">
        <ul class="accordion-area">
        <li>
            <section>
              <h3 class="title"><span>2022.12.9</span><br> 冬期休暇のお知らせ</h3>
              <div class="box">
                <p>平素は格別のお引き立てを賜り厚く御礼申し上げます。さて、本年の冬期休暇についてお知らせ申し上げます。誠に勝手ながら、2022.12.29(木)から2023.1.4(水)の期間を休業とさせていただきます。</p>
              </div>
            </section>
          </li>
        <li>
            <section>
              <h3 class="title"><span>2022.9.27</span> FSC中核的労働要求事項に関する方針声明の追加</h3>
              <div class="box">
                <p>
                「2022,9,20 FSC 中核的労働要求事項に関する方針表明について」
                  <a style="text-decoration: underline" href="assets/FSC20220920.pdf">PDFにリンク</a></p>
              </div>
            </section>
          </li>
          <li>
            <section>
              <h3 class="title"><span>2021.12.15</span><br> WEBサイトをリニューアルしました。</h3>
              <div class="box">
                <p>このたび、Webサイトをリニューアルいたしました。<br>今後とも株式会社ユタカ産業をどうぞよろしくお願いいたします。</p>
              </div>
            </section>
          </li>
          <li>
            <section>
              <h3 class="title"><span>2020.4.8</span><br> FSC®森林認証、取得のお知らせ</h3>
              <div class="box">
                <p>このたび株式会社ユタカ産業では、国際的な森林認証制度であるFSC®森林認証を取得いたしました。<br>森林の保全に貢献してまいりたいと考えております。今後とも弊社製品をご愛顧賜りますよう、宜しくお願い申し上げます。</p>
              </div>
            </section>
          </li>
        </ul>
      </div>
      <div class="icon-01 zoomInTrigger"><img src="assets/images/cardboard.png" alt="" class="apng-image"></div>
    </section>
  </main>
  <!-- footer -->
  <?php
include 'inc/footer.php'; // footer.php の読み込み
?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script> 
<script src="assets/js/script.js"></script> 
<script src="assets/js/home.js"></script>
</body>
</html>