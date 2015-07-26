?>

<!-- メニューを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
<?php
  include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>


<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PHPの練習</a>
            </div>

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

										<form action="send_inquiry.php" method="post">
											<input type="hidden" name="title" value="<?php echo $_POST['title']; ?>">
											<input type="hidden" name="message" value="<?php echo $_POST['message']; ?>">

											<p class="form_text">お問い合わせ内容の確認をしてください。</p>

											<ul class="list-group">
												<li class="list-group-item">
													<p class="control-label check_text">お問い合わせタイトル</p>
													<p>
														<?php
															echo $_POST['title'];
														?>
													</p>
												</li>
												<li class="list-group-item">
													<p class="control-label check_text">お問い合わせ詳細</p>
													<p>
														<?php
															echo $_POST['title'];
														?>
													</p>
												</li>
											</ul>


                    <div class="form-group">
                        <a href="/lesson/inquery/">戻る　　</a>
						<input type="submit" value="お問い合わせ内容の送信" class="btn btn-primary">
                    </div>

										</form>
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
