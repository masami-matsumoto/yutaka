<?php
$title = 'My Site thanks';
$description = '(THANKS）';
$path = '/../../';
include(dirname(__FILE__).$path.'inc/head.php'); // head.php の読み込み
?>
<body id="sub-page">
<div id="container">
<?php
include(dirname(__FILE__).$path.'inc/header.php');  // header.php の読み込み
?>
 <!-- main -->
<main class="l-main" id="thanks">
<div class="thanks-wrap section-form">
		<h2>お問い合わせ 送信完了</h2>
		<p class="section-description">
		お問い合わせありがとうございました。<br>
		内容を確認のうえ、回答させて頂きます。<br>
		しばらくお待ちください。
		</p>
		<a href="/index.php">
			<button type="button" class="btn submit-btn">TOPに戻る</button>
		</a>
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
</body>
</html>