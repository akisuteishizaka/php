<!-- お問い合せ内容の確認画面 -->

<?php

	//　お問い合わせタイトル、詳細のセット
	$title = htmlspecialchars($_POST['title'], ENT_QUOTES);
	$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

	//　日本語　sjisの設定
	mb_language('ja');
	mb_internal_encoding('UTF8');


	// Fromアドレスの設定（自動送信<送信元のアドレス>）
	$name = '自動送信';
	$email = 'no-reply@stone-rise.com';
	$header = 'From: '. mb_encode_mimeheader($name) . '<' . $email .'>';

	//　メールの送信
	$result = mb_send_mail("taiti@stone-rise.com", $title,$message, $header);




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

										<p>
										<?php

											//　メール送信の確認
											if ($result) {
												//　メール送信の成功
												echo 'お問い合わせ内容を担当者へ送信しました。';
											} else {
												echo '担当者への送信に失敗しました。';
											}

										?>
										</p>
										<p>お問い合わせ内容の確認をしてください。</p>

										<ul class="list-group">
											<li class="list-group-item">
												<p class="control-label check_text">お問い合わせタイトル</p>
												<p>
													<?php
														echo $title;
													?>
												</p>
											</li>

											<li class="list-group-item">
												<p class="control-label check_text">お問い合わせの詳細</p>
												<p>
													<?php
														echo nl2br($message);
													?>
												</p>
											</li>

										</ul>

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
