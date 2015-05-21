<?php
//　条件分岐
//　

$age = 18;


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
<?php
	if ($age > 20) {
		echo "お酒はOK";
	} else if ($age > 18) {
		echo "大学生でもだめよ";
	} else {
		echo "お酒はダメよ";
	}
	}
?>
</body>
</html>

