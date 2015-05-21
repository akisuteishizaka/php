<?php
	
	$birthday = $_POST['birthday'];
	$youbi = date("1", strtotime($birthday);

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
	<h1>PHPの練習</h1>
	<?php
		echo $youbi;
	?>
</body>
</html>