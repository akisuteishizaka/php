<?php
// ファイルアップロードの表示設定
$file = $_FILES['my_img'];
$file_path = "/lesson/file_up/user_img/" . $file['name'];



// ファイルアップロードの処理
$ext = substr($file['name'], -3);

?>


<!-- メニューを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
<?php
  include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>

<body>
    <div id="wrapper">

            <!-- メニューを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
            <?php
                include ($_SERVER['DOCUMENT_ROOT'].'/sidebar.php');
            ?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            PHPの練習 <small>standard php</small>
                        </h1>
                        <!--
                        <p><?php // echo $mysql_connect_text; ?></p>
                        <p><?php // echo $db_connect_text; ?></p>
                        <p><?php // echo $db_insert_text; ?></p>
                        -->

                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <!-- データ一覧表示 -->
                <div class="row">
                  <div class="col-lg-12">

									<?php
										$file_name = ("ファイル名(name):" . $file['name'] . '<br>');
										$file_Type = ("ファイルタイプ(type):" . $file['type'] . '<br>');
										$file_Upload = ("アップロードしたファイル(tmp_name):" . $file['tmp_name'] . '<br>');
										$file_error = ("エラー内容(error):" . $file['error'] . '<br>');
										$file_Size = ("サイズ(size):" . $file['size'] . '<br>');
									?>

									<ul class="list-group">
										<li class="list-group-item"><?php echo ($file_name); ?></li>
										<li class="list-group-item"><?php echo ($file_Type); ?></li>
										<li class="list-group-item"><?php echo ($file_Upload); ?></li>
										<li class="list-group-item"><?php echo ($file_error); ?></li>
										<li class="list-group-item"><?php echo ($file_Size); ?></li>
										<li class="list-group-item">
											<?php
												if ($ext == 'gif' || $ext == 'jpg' || $ext == 'png') {
													$filePath = '/var/www/html/php/lesson/file_up/user_img/' . $file['name'];
													move_uploaded_file($file['tmp_name'], $filePath);
													echo ('<img class="img-responsive" src="' . $file_path . '">');
												} else {
													echo ('※拡張子が.gif, .jpg, .pngのいずれかのファイルをアップロードしてください。');
												}
											?>
										</li>
									</ul>
									

									<p class="btn button-primary"><a href="/lesson/file_up/">戻る</a></p>
                  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/js/plugins/morris/raphael.min.js"></script>
    <script src="/js/plugins/morris/morris.min.js"></script>
    <script src="/js/plugins/morris/morris-data.js"></script>

</body>

</html>