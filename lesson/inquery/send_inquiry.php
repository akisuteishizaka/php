<!-- お問い合せ内容の確認画面 -->

<?php

	//　お問い合わせタイトル、詳細のセット
	$title = htmlspecialchars($_POST['title'], ENT_QUOTES);
	$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

	//　日本語　sjisの設定
	mb_language('ja');
	mb_internal_encoding('SJIS');


	// Fromアドレスの設定（自動送信<送信元のアドレス>）
	$name = '自動送信';
	$email = 'no-reply@stone-rise.com';
	$header = 'From: '. mb_encode_mimeheader($name) . '<' . $email .'>';

	//　メールの送信
	$result = mb_send_mail("taiti@stone-rise.com", $title,$message, $header);

	//　メール送信の確認
	if ($result) {
		//　メール送信の成功
		echo 'お問い合わせ内容を担当者へ送信しました。';
	} else {
		echo '担当者への送信に失敗しました。';
	}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>お問い合わせ内容確認画面</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form action="send_inquiry.php" method="post">
		<input type="hidden" name="title" value="<?php echo $title ?>">
		<input type="hidden" name="message" value="<?php echo $message ?>">

	<p>お問い合わせ内容の確認をしてください。</p>

	<p>お問い合わせタイトル</p>
	<p>
		<?php
			echo $title;
		?>
	</p>

	<p>お問い合わせの詳細</p>
	<p>
		<?php
			echo nl2br($message);
		?>
	</p>

	</form>
</body>
</html>