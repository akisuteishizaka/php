<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
 
$to = "taiti@stone-rise.com";
$from = "no-reply@stone-rise.com";
$subject = "テストのサブジェクト";
$body = "テスト\nテストテスト\nテストテストテスト\nテストテスト\nテスト";
 
mb_send_mail($to,$subject,$body,"From:".$from);
?>
