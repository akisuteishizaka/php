<?php
// セッションの復元
 session_start();

 // セッション変数を初期化
 $_SESSION = array();

 // セッションIDを破棄
 if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
 }

 // セッションを破棄
 session_destroy();
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
                            PHPの練習 <small>ログイン画面</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> ログアウト
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <p>ログアウトしました。</p>
                        <p>セッション情報（$_SESSION）：</p>
                        <pre>
                        <?php
                            // $_SESSIONの中身をすべて表示
                            print_r($_SESSION);

                        ?>
                        </pre>

                        <p><a href="/lesson/login/">ログインフォームへ戻る</a></p>
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
