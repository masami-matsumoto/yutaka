<?php
$title = '株式会社ユタカ産業-【お問い合わせ】';
$description = '【お問い合わせ】企画・設計から印刷、加工、セットアップまでご相談ください。';
$path = '/../../';
include(dirname(__FILE__).$path.'inc/head.php'); // head.php の読み込み
?>
<body id="sub-page">
<div id="container">
<?php
include(dirname(__FILE__).$path.'inc/header.php');  // header.php の読み込み
?>
  <!-- main -->
  <main class="l-main" id="page"> 
    <!-- hero image -->
    <section class="l-content-expanded hero">
      <h2 class="hero-copy bgextend bgLRextend"><span class="bgappear">お問い合わせ</span></h2>
    </section>
    <!-- contact -->
    <section class="l-content-fixed" id="contactForm">
      <h4 class="section-description">ご質問やお見積りの依頼などありましたら<br>
        下記のフォームに記載して送信ボタンを押してください。<br>
        後ほど弊社よりご連絡をさせていただきます。</h4>
      <div class="section-form">
        <form class="form-simple" action="confirm.php" method="post" name="form" onsubmit="return validate()">
          <p class="form-label">お名前<span class="required">必須</span></p>
          <div class="form-col">
            <label class="form-input">
              <input type="text" name="name_last" placeholder="姓"required style="color: black;">
            </label>
            <label class="form-input">
              <input type="text" name="name_first" placeholder="名"required style="color: black;">
            </label>
          </div>
          <p class="form-label">フリガナ<span class="required">必須</span></p>
          <div class="form-col">
            <label class="form-input">
              <input type="text" name="kana_last" placeholder="セイ"required style="color: black;">
            </label>
            <label class="form-input">
              <input type="text" name="kana_first" placeholder="メイ"required style="color: black;">
            </label>
          </div>
          <p class="form-label">住所<span class="required">必須</span></p>
          <div class="form-col-zip">
            <label class="form-input">
              <input type="text" name="zip11" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" placeholder="〒"required style="color: black;">
            </label>
          </div>
          <div class="form-col-full">
            <label class="form-input">
              <input type="text" name="addr11" placeholder="東京都○○区○○丁目○○番地"required style="color: black;">
            </label>
          </div>
          <p class="form-label">電話番号<span class="required">必須</span></p>
          <div class="form-col">
            <label class="form-input">
              <input type="text" name="tel" placeholder="09012345678"required style="color: black;">
            </label>
          </div>
          <p class="form-label">メールアドレス<span class="required">必須</span></p>
          <div class="form-col-full">
            <label class="form-input">
              <input type="text" name="email" placeholder="abc@example.co.jp"required style="color: black;">
            </label>
          </div>
          <p class="form-label">お問合わせ項目<span class="required">必須</span></p>
          <div class="form-col select-col">
            <select name="contact_item">
              <option value="1">お問い合わせ項目をお選びください</option>
              <option value="お見積り依頼">お見積り依頼</option>
              <option value="設計のご相談">設計のご相談</option>
              <option value="その他お問い合わせ">その他お問い合わせ</option>
            </select>
          </div>
          <p class="form-label">お問合わせ内容<span class="required">必須</span></p>
          <div class="form-col-full">
            <p class="form-input">
              <textarea name="content" rows="15" placeholder="お問合わせ内容を入力してください。"required style="color: black;"></textarea>
            </p>
          </div>
          <div class="policy-area">
            <h3>個人情報の取扱い内容について</h3>
            <ol class="policy">
              <li>
                <h3>1.利用目的</h3>
                <p>メール、電話等で取得した個人情報は、お問い合わせに回答するため、又は業務遂行のために利用させていただきます。
                  また、お問い合わせにご回答するため、社名、氏名、電話番号、ホームページアドレス等を確認させていただきます。
                  尚、個人情報の開示・提供はお客様の任意となりますが、必要事項について確認できない場合、
                  お客様のご要望にお応えできない場合がありますのでご了承ください。</p>
              </li>
              <li>
                <h3>2.第三者への非開示</h3>
                当社は以下の場合を除き、お客様の承諾なく、個人情報を第三者に開示することはありません。
                <ul class="privacy-list">
                  <li>・法令に基づく場合。</li>
                  <li>・人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                  <li>・公衆衛生の向上又は児童の健全な育成推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                  <li>・国の機関若しくは地方公共団体又はその受託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、
                    本人の同意を得ることによって当該事務の遂行に支障を及ぼすおそれがあるとき。</li>
                </ul>
              </li>
              <li>
                <h3>3.個人情報の委託</h3>
                <p>当社は、情報処理やメンテナンス等、業務上の必要性により、お客様の個人情報を外部に委託する場合があります。
                  委託先については、個人情報取扱いの安全性確認、秘密保持契約の締結等、適切な管理を行っています。</p>
              </li>
              <li>
                <h3>4.本人が容易に認識できない方法による個人情報の取得</h3>
                <p>当社は、クッキー等を用いるなどをして、本人が容易に認識できない方法による個人情報の取得は行っておりません。</p>
              </li>
              <li>
                <h3>5.個人情報の保有期間</h3>
                <p>取得した個人情報の弊社での保存期間は、お問い合わせに対する回答が終了した後、2年間保存し、その後安全に破棄させていただきます。</p>
              </li>
              <li>
                <h3>6.個人情報に関するお問合せ</h3>
                <p>お客様の個人情報の取扱いに関するお問い合わせは、個人情報保護管理責任者までお申し出ください。</p>
              </li>
              <p class="address">株式会社ユタカ産業　代表取締役　小池　透<br>
                〒133-0057　東京都江戸川区西小岩３丁目１３番２２号<br>
                TEL　(03) 3671-6301 (代表)　FAX　(03) 3671-2092<br>
                受付時間　9：00～17：00（土・日・祝日・年末年始は除く）</p>
            </ol>
          </div>
          <p>個人情報の取扱いにご同意いただけましたらチェックを入れてください。<span class="required">必須</span></p>
          <p class="form-checkbox">
            <label>内容を確認したので同意する。
              <input type="checkbox" name="agree"required>
            </label>
          </p>
          <div class="form-btn-holder">
            <div class="form-btn-holder-submit">
              <button type="submit" class="btn submit-btn">確認する</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
  <!-- footer -->
  <?php
include(dirname(__FILE__).$path.'inc/footer.php'); // footer.php の読み込み
?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script> 
<script src="<?php echo $path; ?>assets/js/script.js"></script> 
<script src="<?php echo $path; ?>assets/js/home.js"></script>
</body>
</html>