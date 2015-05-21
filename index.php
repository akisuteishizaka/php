<?php
// データベースへの接続

try {
	$dbh = new PDO('mysql:host=localhost;dbname=blog_app','dbuser','123456');
} catch (PDOException $e) {
	var_dump($e->getMessage());
	exit;
}

	echo "success!";

	//　切断
	$dbh = null;

?>

<!DOCTYPE html>
<html>
<head lang="ja">
	<meta charset="utf-8">
	<meta name="discription" content="phpの練習">
	<meta name="keywords" content="php">
	<title>phpの練習</title>
</head>
<body>
</body>
</html>

