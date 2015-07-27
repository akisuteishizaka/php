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
											<form action="mail.php" method="post">
												<div class="form-group">
													<label class="control-label" for="email">送信先(To)<span class="create_data">　※必須</span></label>
													<input type="text" class="form-control" id="email" name="email" maxlength="255" placeholder="メールアドレスを入力してください。">
												</div>

												<div class="form-group">
													<label class="control-label" for="subject">メール件名<span class="create_data">　※必須</span></label>
													<input type="text" class="form-control" id="subject" name="subject" maxlength="255" placeholder="件名を入力してください。">
												</div>

												<div class="form-group">
													<label class="control-label" for="message">内容<span class="create_data">　※必須</span></label><br>
													<textarea name="message" rows="10" id="message" class="form-control" placeholder="内容を入力してください。"></textarea>
												</div>

												<input type="submit" value="メール送信" class="btn btn-primary">
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
