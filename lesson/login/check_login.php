<?php
// セッションの生成
session_start();

// ユーザー名/パスワード
$user = htmlspecialchars($_POST['user'], ENT_QUOTES);
$pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);

// mysqlへの接続
$conn = mysql_connect('localhost','sample_user','123456');

  if ($conn) {
    mysql_select_db('sample_db',$conn);
    mysql_query('SET NAMES UTF8');

    // データベースへの問い合わせ文
    $sql = 'SELECT user_name FROM user_tb WHERE login_name = "' . $user . '" AND login_password = "' . $pass . '"';

    // sql文の実行
    $query = mysql_query($sql, $conn);
  }

  // 認証
  if (mysql_num_rows($query) == 1) {
    // ログイン成功
    $login = 'OK';
    // データの取り出し
    $row = mysql_fetch_object($query);
    //　表示用ユーザー名をセッション変数に保存
    $_SESSION['name'] = $row->user_name;
  } else {
    // ログイン失敗
    $login = 'Error';
  }

  // セッション変数に記録
  $_SESSION['login'] = $login;

  // 移動
  if ($login == 'OK') {
    // ログイン成功：ログイン成功画面へ
    header('Location: menu_message.php');
  } else {
    // ログイン失敗：ログインフォーム画面へ
    header('Location: index.php');
  }

?>