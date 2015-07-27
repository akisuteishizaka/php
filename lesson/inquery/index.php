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
											<p class="form_text">お問い合わせ内容を入力してください。</p>

												<form action="check_inquiry.php" method="post">

													<div class="form-group">
														<label class="control-label" for="title">お問い合わせタイトル<span class="create_data">　※必須</span></label>
														<input type="text" class="form-control" id="title" name="title" size="50" placeholder="お問い合わせタイトルを入力してください。">
													</div>

													<div class="form-group">
														<label class="control-label" for="text">お問い合わせ詳細<span class="create_data">　※必須</span></label><br>
														<textarea name="message" cols="40" rows="5" id="text" class="form-control" placeholder="詳細を入力してください。"></textarea>
													</div>
											<input type="submit" value="お問い合せ内容の確認" class="btn btn-primary">
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
