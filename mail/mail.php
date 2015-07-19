<?php
mb_language("japanese");
mb_internal_encoding("UTF8");

if (isset($_POST['email'])) {
	$to = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['message'];
	$from = mb_encode_mimeheader(mb_convert_encoding("いしざかたいち","JIS","UTF8"))."<taiti048235921@gmail.com>";

	$success = mb_send_mail($to,$subject,$body,"From:".$from);
}


?>

<?php

if ($success) {
	print('送信しました');
} else {
	print('送信に失敗しました');
}

?>