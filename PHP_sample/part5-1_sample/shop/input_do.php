<?php
require('dbconnect.php');

$sql = sprintf('INSERT INTO my_items SET maker_id=%d, item_name="%s", price=%d, keyword="%s"',
	mysql_real_escape_string($_POST['maker_id']),
	mysql_real_escape_string($_POST['item_name']),
	mysql_real_escape_string($_POST['price']),
	mysql_real_escape_string($_POST['keyword'])
);
mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>商品登録</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>商品登録</h1>
</div>

<div id="content">
<p>商品を登録しました</p>
<p><a href="index.php">一覧に戻る</a></p>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O Space. MYCOM" /></p>
</div>

</div>
</body>
</html>
