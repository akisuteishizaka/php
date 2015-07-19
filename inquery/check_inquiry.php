<!-- お問い合せ内容の確認画面 -->

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
		<input type="hidden" name="title" value="<?php echo $_POST['title']; ?>">
		<input type="hidden" name="message" value="<?php echo $_POST['message']; ?>">

	<p>お問い合わせ内容の確認をしてください。</p>

	<p>お問い合わせタイトル</p>
	<p>
		<?php
			echo $_POST['title'];
		?>
	</p>

	<p>お問い合わせの詳細</p>
	<p>
		<?php
			echo nl2br($_POST['message']);
		?>
	</p>

	<input type="submit" value="お問い合わせ内容の送信">

	</form>
</body>
</html>