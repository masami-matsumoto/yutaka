<?php 
	// フォームのボタンが押されたら
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		// フォームから送信されたデータを各変数に格納
    if(isset($_POST['name_last'])===TRUE){
                  $name_last = trim(mb_convert_kana($_POST['name_last'], 's', 'UTF-8'));
		if(mb_strlen($name_last)===0){
        $err_msg[] = '【姓】を入力してください';
    } else if (mb_strlen($name_last) > 9){
         $err_msg[] = '【姓】文字数が多いです。';
    }
    else {
        $msg[] = '登録完了名前';
    }
              }
		
	if(isset($_POST['name_first'])===TRUE){
                  $name_first = trim(mb_convert_kana($_POST['name_first'], 's', 'UTF-8'));
		if(mb_strlen($name_first)===0){
        $err_msg[] = '【名】入力してください';
    } else if (mb_strlen($name_first) > 9){
         $err_msg[] = '【名】文字数が多いです。';
    }
    else {
        $msg[] = '登録完了名前';
    }
              }
		
	if(isset($_POST['kana_last'])===TRUE){
                  $kana_last = trim(mb_convert_kana($_POST['kana_last'], 's', 'UTF-8'));
	if(mb_strlen($kana_last)===0){
        $err_msg[] = '【セイ】入力してください';
    } else if (preg_match('/^[ァ-ヾ]+$/u',$kana_last)!==1){
         $err_msg[] = '【セイ】カタカナのみです';
    }
    else {
        $msg[] = '登録完了カナ';
    }
              }
		
	if(isset($_POST['kana_first'])===TRUE){
                  $kana_first = trim(mb_convert_kana($_POST['kana_first'], 's', 'UTF-8'));
		if(mb_strlen($kana_first)===0){
        $err_msg[] = '【メイ】入力してください';
    } else if (preg_match('/^[ァ-ヾ]+$/u',$kana_first)!==1){
         $err_msg[] = '【メイ】カタカナのみです';
    }
    else {
        $msg[] = '登録完了kana';
    }
              }
	
	if(isset($_POST['zip11'])===TRUE){
                  $zip11 = trim(mb_convert_kana($_POST['zip11'], 's', 'UTF-8'));
		if(mb_strlen($zip11)===0){
        $err_msg[] = '【郵便番号】入力してください';
    } else if (preg_match('/^[0-9]{3}-[0-9]{4}$/',$zip11)!==1){
         $err_msg[] = '【郵便番号】形式が正しくありません';
    }
    else {
        $msg[] = '登録完了郵便';
    }
              }
	
	if(isset($_POST['addr11'])===TRUE){
                  $addr11 = trim(mb_convert_kana($_POST['addr11'], 's', 'UTF-8'));
              }
		
	if(isset($_POST['tel'])===TRUE){
                  $tel = trim(mb_convert_kana($_POST['tel'], 's', 'UTF-8'));
		if(mb_strlen($tel)===0){
        $err_msg[] = '【電話番号】入力してください';
    } else if (preg_match('/\A[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}\z/',$tel)!==1){
         $err_msg[] = '【電話番号】形式が正しくありません';
    }
    else {
        $msg[] = '登録完了TEL';
    }
              }
		
	if(isset($_POST['email'])===TRUE){
                  $email = trim(mb_convert_kana($_POST['email'], 's', 'UTF-8'));
		if(mb_strlen($email)===0){
        $err_msg[] = '【メールアドレス】入力してください';
    } else if (preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',$email)!==1){
         $err_msg[] = '【メールアドレス】形式が正しくありません';
    }
    else {
        $msg[] = '登録完了MAIL';
    }
              }
		
	if(isset($_POST['contact_item'])===TRUE){
                  $contact_item = trim(mb_convert_kana($_POST['contact_item'], 's', 'UTF-8'));
		if(mb_strlen($contact_item)===1){
        $err_msg[] = '【項目】選択してください';
    }
    else {
        $msg[] = '登録完了選択';
    }
              }
		
	if(isset($_POST['content'])===TRUE){
                  $content = trim(mb_convert_kana($_POST['content'], 's', 'UTF-8'));
		if(mb_strlen($content)===0){
        $err_msg[] = 'お問い合わせ内容を入力してください';
    } else if (mb_strlen($content) > 300){
         $err_msg[] = '【内容】300文字以内です';
    }
    else {
        $msg[] = '登録完了内容';
    }
              }
	}

	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {
		// 送信ボタンが押された時に動作する処理をここに記述する
        	
		// 日本語をメールで送る場合のおまじない
        	mb_language("ja");
		mb_internal_encoding("UTF-8");
		
		//mb_send_mail("kanda.it.school.trial@gmail.com", "メール送信テスト", "メール本文");

        	// 件名を変数subjectに格納 送信者
        	$subject = "［自動送信］お問い合わせ内容の確認";

        	// メール本文を変数bodyに格納
		$body = <<< EOM
{$name_last}{$name_first}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$name_last}{$name_first}

【 ふりがな 】 
{$kana_last}{$kana_first}

【 住所 】 
{$zip11}{$addr11}

【 電話番号 】 
{$tel}

【 メール 】 
{$email}

【 お問い合わせ項目 】 
{$contact_item}

【 お問い合わせ内容 】 
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。

株式会社ユタカ産業
〒133-0057
東京都江戸川区西小岩３丁目１３番２２号

EOM;
        
		// 送信元のメールアドレスを変数fromEmailに格納
		$fromEmail = "yutaka@yutaka-i.com";

		// 送信元の名前を変数fromNameに格納
		$fromName = "お問い合わせテスト";

		// ヘッダ情報を変数headerに格納する		
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

		// メール送信を行う
		mb_send_mail($email, $subject, $body, $header);

   	// 件名を変数subjectに格納　管理者
        	$subject = "［自動送信］お問い合わせがありました。";

        	// メール本文を変数bodyに格納
		$body = <<< EOM
{$name_last}{$name_first}　様より問い合わせがありました。

以下のお問い合わせ内容を、確認ください。

===================================================
【 お名前 】 
{$name_last}{$name_first}

【 ふりがな 】 
{$kana_last}{$kana_first}

【 住所 】 
{$zip11}{$addr11}

【 電話番号 】 
{$tel}

【 メール 】 
{$email}

【 お問い合わせ項目 】 
{$contact_item}

【 お問い合わせ内容 】 
{$content}
===================================================


EOM;
        
		// 送信元のメールアドレスを変数fromEmailに格納
		$fromEmail = "yutaka@yutaka-i.com";

		// 送信元の名前を変数fromNameに格納
		$fromName = "お問い合わせテスト";

		// ヘッダ情報を変数headerに格納する		
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

		// メール送信を行う
		mb_send_mail($fromEmail, $subject, $body, $header);
 		// サンクスページに画面遷移させる
		header("Location: thanks.php");
		exit;
	}
?>
<?php
$title = 'My Site confirm';
$description = '(お問い合わせ確認）';
$path = '/../../';
include(dirname(__FILE__).$path.'inc/head.php'); // head.php の読み込み
?>
<body id="sub-page">
<div id="container">
<?php
include(dirname(__FILE__).$path.'inc/header.php');  // header.php の読み込み
?>
 <!-- main -->
<main class="l-main" id="formConfirm">
<div class="confirm-wrap section-form">
	<form action="confirm.php" method="post">
            <input type="hidden" name="name_last" value="<?php echo $name_last; ?>">
            <input type="hidden" name="name_first" value="<?php echo $name_first; ?>">
            <input type="hidden" name="kana_last" value="<?php echo $kana_last; ?>">
            <input type="hidden" name="kana_first" value="<?php echo $kana_first; ?>">
            <input type="hidden" name="zip11" value="<?php echo $zip11; ?>">
            <input type="hidden" name="addr11" value="<?php echo $addr11; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="contact_item" value="<?php echo $contact_item; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <h2 class="contact-title">お問い合わせ 内容確認</h2>
            <p class="section-description">お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div class="confirm-content">
                <div>
                    <label>お名前</label>
                    <p><?php print htmlspecialchars($name_last.$name_first, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php print htmlspecialchars($kana_last.$kana_first,ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
				<div>
                    <label>住所</label>
                    <p><?php print htmlspecialchars($zip11.$addr11,ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
			     <div>
                    <label>電話番号</label>
                    <p><?php print htmlspecialchars($tel,ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php print htmlspecialchars($email,ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <div>
                    <label>お問い合わせ項目</label>
                    <p><?php print htmlspecialchars($contact_item,ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php print htmlspecialchars($content,ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
				<?php if(isset($err_msg)){ ?>
			 <?php foreach ($err_msg as $err) { ?>
                <p class="err"><p>【エラーメッセージ・・再入力ください。】</p>
			 <?php print htmlspecialchars($err,ENT_QUOTES, 'UTF-8'); ?></p>
        <?php } ?>
		<?php } ?>
            </div>
        <div class="confirm-btn-wrap">
          <input type="button" value="内容を修正する" onclick="history.back(-1)" class="btn submit-btn">
			<?php if(empty($err_msg)){ ?>
          <?php echo '<button type="submit" name="submit" class="btn submit-btn">送信する</button>'; ?>
			</div> <?php } ?>
        </div>
	</form>
</div>
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
<!-- reCAPTCHA V3 -->
<script src="https://www.google.com/recaptcha/api.js?render=6Lc6imsoAAAAAPE3IiORyT8sb-hj_B1gNR6TqoaF"></script>
<script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lc6imsoAAAAAPE3IiORyT8sb-hj_B1gNR6TqoaF', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>
</body>
</html>