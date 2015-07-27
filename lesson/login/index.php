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
                            PHPの練習 <small>ログイン画面</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h2>ユーザー名とパスワードを入力してください。</h2>

                        <form action="check_login.php" method="post">
                            <div class="form-group">
                                <label class="control-label" for="user_name">ユーザー名：</label>
                                <!-- アンケートフォーム -->
                                <input type="text" class="form-control" id="user_name" name="user" placeholder="ユーザー名を入力してください。">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="password">パスワード：</label>
                                <!-- アンケートフォーム -->
                                <input type="password" class="form-control" id="password" name="pass" placeholder="パスワードを入力してください。">
                            </div>


                          <input type="submit" value="ログイン" class="btn btn-primary">
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

<!-- footerを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
<?php
  include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
