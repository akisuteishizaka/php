<?php
// セッションの復元
 session_start();

 // ログインチェック
 if ($_SESSION['login'] != 'OK') {
    // ログインフォームへ
    header('Location: index.php');
    // 終了
    exit();
 }

// タイトル、メッセージ
$title = htmlspecialchars($_POST['title'], ENT_QUOTES);
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

// mysqlへの接続
$conn = mysql_connect('localhost','sample_user','123456');

if ($conn) {
    // データベースの選択
    mysql_select_db('sample_db',$conn);
    mysql_query('SET NAMES UTF8');

    // データベースへ書き込むSQL文
    $sql = 'INSERT INTO message(message_title,message,user_name) VALUES ("' . $title . '","' . $message . '","' . $_SESSION['name'] . '")';

    // sql文の実行
    $query = mysql_query($sql, $conn);

}


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
                        
                        <p>メッセージを登録しました。。</p>

                        <p><a href="show_message.php">メッセージを読む</a></p>

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
