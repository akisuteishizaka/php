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


    <!-- headを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
    <?php
        include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
    ?>

<body>
    <div id="wrapper">

            <!-- メニューを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
            <?php
                include ($_SERVER['DOCUMENT_ROOT'].'/sidebar.php');
            ?>
            <!-- /.navbar-collapse -->
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
												if ($success) {
													echo ("送信しました。");
												} else {
												echo ("送信に失敗しました。");
												}
											?>
										</p>

										<p class="btn button-primary"><a href="/lesson/mail/">戻る</a></p>
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
