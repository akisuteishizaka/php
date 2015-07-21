<?php

// データベース接続用の共通化ファイル
mysql_connect('localhost', 'my_user', '123456') or die(mysql_error());
mysql_select_db('my_db');
mysql_query('SET NAMES UTF8');

?>