<?php

// ログインチェック
require_once 'check_login_message.php';



// mysqlへの接続
$conn = mysql_connect('localhost','sample_user','123456');

if ($conn) {
    // データベースの選択
    mysql_select_db('sample_db',$conn);
    mysql_query('SET NAMES UTF8');

    // データベースへ書き込むSQL文
    $sql = 'SELECT id,message_title,message,user_name,entry_date FROM message ORDER BY id';

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
                        
                        <p>メッセージ一覧</p>

                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>タイトル</th>
                                    <th>メッセージ</th>
                                    <th>ユーザー</th>
                                    <th>登録日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // データの取り出し
                                    while ($row=mysql_fetch_object($query)) {
                                        echo '<tr>';
                                        echo '<td>' . $row->id . '</td>';
                                        echo '<td>' . $row->message_title . '</td>';
                                        echo '<td>' . nl2br($row->message) . '</td>';
                                        echo '<td>' . $row->user_name . '</td>';
                                        echo '<td>' . $row->entry_date . '</td>';
                                        echo '</tr>';
                                        # code...
                                    }
                                ?>
                            </tbody>
                        </table>


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
