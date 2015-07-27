<?php

// ログインチェック
require_once 'check_login_message.php';
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
                            PHPの練習 <small>掲示板</small>
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
                        <p><?php echo $_SESSION['name']; ?></p>

                        <hr>
                        <p><a href="/lesson/login/logout.php">【ログアウト】</a></p>
                        <hr>

                        <h2>掲示板メニュー</h2>
                        <ul>
                            <li><a href="write_message.php">メッセージを書く</a></li>
                            <li><a href="show_message.php">メッセージを読む</a></li>
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

<!-- footerを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
<?php
  include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
