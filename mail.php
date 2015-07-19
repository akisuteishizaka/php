<?php
$to      = 'taiti@stone-rise.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: no-replay@stone-rise.com';
mail($to, $subject, $message, $headers);
?>
