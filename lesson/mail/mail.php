<?php
mb_language("japanese");
mb_internal_encoding("UTF8");

if (isset($_POST['email'])) {
	$to = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['message'];
	$from = mb_encode_mimeheader(mb_convert_encoding("stone-rise","JIS","UTF8"))."<no-reply@stone-rise.com>";

	$success = mb_send_mail($to, $subject, $body, "From:".$from);
}

?>

<?php

if ($success) {
	echo ("送信しました。");
} else {
	echo ("送信に失敗しました。");
}

?>