<?php
$title = '株式会社ユタカ産業-【事業案内】';
$description = '【事業案内】ニーズにあったデザインを印刷物という見える形にすることによって、画面上では現せない表現を、お客様に分かりやすく伝え、より良い企画提案を第一に行っています';
include 'inc/head.php'; // head.php の読み込み
?>
<body id="sub-page">
<div id="container">
<?php
include 'inc/header.php'; // header.php の読み込み
?>
  <!-- main -->
  <main class="l-main"> 
    <!-- hero image -->
    <section class="l-content-expanded hero">
      <h2 class="hero-copy bgextend bgLRextend"><span class="bgappear">事業案内</span></h2>
    </section>
    <!-- description -->
    <section class="l-content-fixed section" id="serviceDescription">
      <div class="l-multicolumn l-2column">
        <div class="l-column"> <img src="assets/images/service.jpg" alt=""/></div>
        <div class="l-column">
          <h3>味のある質感・上質なデザイン<br>
            ＋<br>
            高度な印刷技術<br>
          </h3>
          <p>メーカーから求められる、デザイン性や印刷技術は年々進化しつづけています。<br>
            ニーズにあったデザインを印刷物という見える形にすることによって、画面上では現せない表現を、お客様に分かりやすく伝え、より良い企画提案を第一に行っています。</p>
        </div>
      </div>
    </section>
    <!-- flow -->
    <section class="l-content-fixed section" id="flow">
      <header>
        <h2><span>ワークフロー</span></h2>
      </header>
      <ol class="services-flow_list">
        <li>
          <h4 class="services-flow_listHeading"><span>１．企画提案</span></h4>
          <span class="stickarrow"></span>
          <div>
            <p class="services-flow_listText">パッケージやディスプレイを制作する目的を把握し、商品から形状、サイズ、素材の選定をご提案
            <ul class="work-list">
              <li>設計提案　商品やディスプレイの用途をヒアリングし形状のご提案</li>
              <li>材料選定（材質・強度など）</li>
              <li>印刷以外の加工のご提案（表面加工・箔押し・エンボスなど）</li>
            </ul>
            </p>
          </div>
        </li>
        <li>
          <h4 class="services-flow_listHeading"><span>２．設計及び試作（校正）</span></h4>
          <span class="stickarrow"></span>
          <div>
            <p class="services-flow_listText">設計及び白ダミーの作成
            <ul class="work-list">
              <li>ご要望の仕様をもとに設計・白ダミーの作成</li>
              <li>色校正及び、校正ダミーの作成</li>
              <li>試作確認後、ご要望に応じて再設計・再校正・デザイン修正など再作成</li>
            </ul>
            </p>
          </div>
        </li>
        <li>
          <h4 class="services-flow_listHeading"><span>３．印刷工程</span></h4>
          <span class="stickarrow"></span>
          <div>
            <p class="services-flow_listText">校了後、印刷工程へ
            <ul class="work-list">
              <li>色校正及び校正ダミーの作成</li>
              <li>カラー４ｃ印刷</li>
              <li>特色印刷（ＤＩＣやＰＡＮＴＯＮＥまたは色見本の指定）</li>
            </ul>
            </p>
          </div>
        </li>
        <li>
          <h4 class="services-flow_listHeading"><span>４．後加工</span></h4>
          <span class="stickarrow"></span>
          <div>
            <p class="services-flow_listText">後加工工程へ
            <ul class="work-list">
              <li>表面加工（艶出し・マット・ニス引きなど）</li>
              <li>抜加工・貼加工</li>
              <li>箔押し加工・エンボス加工・厚盛加工・合紙加工など</li>
              <li>手加工による組み立て等の各セットアップ作業</li>
            </ul>
            </p>
          </div>
        </li>
        <li>
          <h4 class="services-flow_listHeading"><span>５．検品・梱包・出荷</span></h4>
          <div>
            <p class="services-flow_listText">完成後　出荷まで
            <ul class="work-list">
              <li>検品作業</li>
              <li>専用カートンの作成・梱包</li>
              <li>出荷作業</li>
            </ul>
            </p>
          </div>
        </li>
      </ol>
    </section>
    <!-- works -->
    <section class="l-content-expanded section" id="works">
      <header>
        <h2><span>取扱い商品</span></h2>
      </header>
      <p class="section-description">下記に掲載してあります商品は、<br class="spShow">
        弊社が製作した物の中のほんの一例です。<br>
        この他にも、<br class="spShow">
        ユーザー様のニーズにあった商品も<br class="spShow">
        製作致しております。<br>
        お気軽にお問い合わせ下さい。</p>
      <ul class="sort-btn">
        <li class="sort00 active">全て</li>
        <!--はじめに「全て」ボタンに現在地表示をつけるためactive というクラス名を付与-->
        <li class="sort01">販促什器・POP</li>
        <li class="sort02">パッケージ</li>
        <li class="sort03">その他</li>
      </ul>
      <ul class="works-index grid">
        <li class="works-index_item item sort01">
          <div class="item-content"><a href="assets/images/item01.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">販売台</h3>
                <p class="works-index_sentenceText">板紙（単紙）による卓上の販売台です。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item01.jpg" alt="販売台"></div>
            </div>
          </a></div>
        </li>
       <li class="works-index_item item sort02">
          <div class="item-content"><a href="assets/images/item02.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">サック箱</h3>
                <p class="works-index_sentenceText">自動貼によるサック箱、下組箱、ワンタッチ箱、ピローケース等です。中に入る製品に応じて中枠も作成可能です。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item02.jpg" alt="サック箱"></div>
            </div>
          </a></div>
        </li>
         <li class="works-index_item item sort03">
          <div class="item-content"><a href="assets/images/item03.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">その他</h3>
                <p class="works-index_sentenceText">その他、紙器・什器・等身大POPなども取り扱っております。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item03.jpg" alt="その他"></div>
            </div>
          </a></div>
        </li>
         <li class="works-index_item item sort02">
          <div class="item-content"><a href="assets/images/item04.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">組み立て箱</h3>
                <p class="works-index_sentenceText">板紙による組立箱です。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item04.jpg" alt="組み立て箱"></div>
            </div>
          </a></div>
        </li>
          <li class="works-index_item item sort02">
          <div class="item-content"><a href="assets/images/item05.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">貼箱</h3>
                <p class="works-index_sentenceText">クルミ貼による高級感のある貼箱です。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item05.jpg" alt="貼箱"></div>
            </div>
          </a></div>
        </li>
         <li class="works-index_item item sort02">
          <div class="item-content"><a href="assets/images/item06.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">組み立て箱</h3>
                <p class="works-index_sentenceText">額縁付きの組立箱です。仕切りに使用しているウレタンも弊社で取り扱い可能です。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item06.jpg" alt="組み立て箱"></div>
            </div>
          </a></div>
        </li>
         <li class="works-index_item item sort01">
          <div class="item-content"><a href="assets/images/item07.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">販売台</h3>
                <p class="works-index_sentenceText">板紙（単紙）による卓上の販売台です。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item07.jpg" alt="販売台"></div>
            </div>
          </a></div>
        </li>
          <li class="works-index_item item sort01">
          <div class="item-content"><a href="assets/images/item08.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">吊り下げPOP</h3>
                <p class="works-index_sentenceText">コートボールとチップボールの３枚合紙による吊り下げPOPです。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item08.jpg" alt="吊り下げPOP"></div>
            </div>
          </a></div>
        </li>
         <li class="works-index_item item sort01">
          <div class="item-content"><a href="assets/images/item09.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">吊り下げPOP</h3>
                <p class="works-index_sentenceText">単紙またはダンボール合紙での吊り下げPOPです。<br>商品の重さや大きさに耐える設計を行います。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item09.jpg" alt="吊り下げPOP"></div>
            </div>
          </a></div>
        </li>
         <li class="works-index_item item sort01">
          <div class="item-content"><a href="assets/images/item10.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">販売台</h3>
                <p class="works-index_sentenceText">コートボールとダンボールを合紙した大きな販売台です。<br>商品の重さや大きさに耐える設計を行います。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item10.jpg" alt="販売台"></div>
            </div>
          </a></div>
        </li>
            <li class="works-index_item item sort01">
          <div class="item-content"><a href="assets/images/item11.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">販売台</h3>
                <p class="works-index_sentenceText">売場のサイズに合わせた小さな販売台です。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item11.jpg" alt="販売台"></div>
            </div>
          </a></div>
        </li>
         <li class="works-index_item item sort02">
          <div class="item-content"><a href="assets/images/item12.jpg" class="link-panel gallery">
            <div class="works-index_inner">
              <div class="works-index_sentence">
                <h3 class="works-index_sentenceTitle">サック箱</h3>
                <p class="works-index_sentenceText">窓有りの箱やフック用、クリアケース等も取り扱っております。</p>
              </div>
              <div class="works-index_figure"><img src="assets/images/item12.jpg" alt="サック箱"></div>
            </div>
          </a></div>
        </li>
      </ul>
    </section>
  </main>
  <!-- footer -->
  <?php
include 'inc/footer.php'; // footer.php の読み込み
?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script> 
<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script> 
<script src="assets/js/script.js"></script> 
<script src="assets/js/modal.js"></script> 
<script src="assets/js/sort.js"></script>
</body>
</html>