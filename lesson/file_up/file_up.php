<?php
// ファイルアップロードの表示設定
$file = $_FILES['my_img'];
$file_path = "/lesson/file_up/user_img/" . $file['name'];

echo ("ファイル名(name):" . $file['name'] . '<br>');
echo ("ファイルタイプ(type):" . $file['type'] . '<br>');
echo ("アップロードしたファイル(tmp_name):" . $file['tmp_name'] . '<br>');
echo ("エラー内容(error):" . $file['error'] . '<br>');
echo ("サイズ(size):" . $file['size'] . '<br>');

// ファイルアップロードの処理
$ext = substr($file['name'], -3);

if ($ext == 'gif' || $ext == 'jpg' || $ext == 'png') {
	$filePath = '/var/www/html/php/lesson/file_up/user_img/' . $file['name'];
	move_uploaded_file($file['tmp_name'], $filePath);
	echo ('<img src="' . $file_path . '">');
} else {
	echo ('※拡張子が.gif, .jpg, .pngのいずれかのファイルをアップロードしてください。');
}

?>