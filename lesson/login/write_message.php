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
                        <p><a href="/lesson/login/menu_message.php">【メニュー】</a></p>
                        <p><a href="/lesson/login/logout.php">【ログアウト】</a></p>
                        <hr>
                        
                        <p>メッセージを入力してください。</p>
                        <form action="insert_message.php" method="post">
                            <div class="form-group">
                                <label class="control-label" for="title">タイトル：</label>
                                <!-- アンケートフォーム -->
                                <input type="text" class="form-control" id="title" name="title" placeholder="タイトルを入力してください。">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="message">メッセージ：</label>
                                <!-- アンケートフォーム -->
                                <textarea id="message" name="message" cols="40" rows="5" class="form-control" placeholder="メッセージを入力してください。"></textarea>
                            </div>

                            <input type="submit" value="メッセージの登録" class="btn btn-primary">
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
