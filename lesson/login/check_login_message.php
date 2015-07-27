<?php
// セッションの復元
 session_start();

 // ログインチェック
 if ($_SESSION['login'] != 'OK') {
    // ログインフォームへ
    header('Location: index.php');
    // 終了
    exit();
 }
?>