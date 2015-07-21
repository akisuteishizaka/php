<?php
// MySQLへの接続ファイルを読み込む
include($_SERVER['DOCUMENT_ROOT'].'/lesson/shop/php/dbconnect.php');

$page = $_REQUEST['page'];
if ($page == '') {
  $page = 1;
}
$page = max($page, 1);

// 最終ページを取得する
$sql = 'SELECT COUNT(*) AS cnt FROM my_items';
$recordSet = mysql_query($sql);
$table = mysql_fetch_assoc($recordSet);
$maxPage = ceil($table['cnt'] / 5);
$page = min($page, $maxPage);

$start = ($page - 1) * 5;

// データ一覧の取得
$recordSet = mysql_query('SELECT m.name, i.* FROM makers m, my_items i WHERE m.id=i.maker_id ORDER BY id DESC LIMIT ' . $start . ',5');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="phpの練習">
    <title>管理ツール（練習用）</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="/css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
            <!-- Top Menu Items -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="">top</a>
                    </li>
                    <li>
                        <a href="/lesson/php/"><i class="fa fa-fw fa-edit"></i> php</a>
                    </li>
                    <li>
                        <a href="/lesson/file_up/"><i class="fa fa-fw fa-edit"></i> file_up</a>
                    </li>
                    <li>
                        <a href="/lesson/inquery/"><i class="fa fa-fw fa-edit"></i> inquery</a>
                    </li>
                    <li>
                        <a href="/lesson/mail/"><i class="fa fa-fw fa-edit"></i> mail</a>
                    </li>
                    <li>
                        <a href="/lesson/shop/"><i class="fa fa-fw fa-edit"></i> shop</a>
                    </li>
                </ul>
            </div>
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
                    <p><a href="/lesson/shop/input.php">新しい商品を登録する</a></p>


                    <table class="table table-striped table-bordered table-hover table-condensed">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>生産者</th>
                          <th>商品名</th>
                          <th>価格</th>
                          <th>変更・削除</th>
                        </tr>
                      </thead>
                      

                      <!-- データ一覧の取得PHP -->
                      <?php
                      while ($table = mysql_fetch_assoc($recordSet)) {
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo (htmlspecialchars($table['id'])); ?></td>
                          <td><?php echo (htmlspecialchars($table['name'])); ?></td>
                          <td><?php echo (htmlspecialchars($table['item_name'])); ?></td>
                          <td><?php echo (htmlspecialchars($table['price'])); ?></td>
                          <td>
                            <a href="/lesson/shop/update.php?id=<?php echo (htmlspecialchars($table{'id'})); ?>">編集</a>
                            <a href="/lesson/shop/php/delete.php?id=<?php echo (htmlspecialchars($table{'id'})); ?>" onclick="return confirm('削除してもよろしいですか？')">削除</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php
                      }
                      ?>

                    </table>

                    <ul class="pager">
                      <?php
                      if ($page > 1) {
                      ?>
                      <li><a href="/lesson/shop/index.php?page=<?php echo ($page - 1); ?>">前へ</a></li>
                      <?php
                      } else {
                      ?>
                      <li class="desabled">前へ</li>
                      <?php
                      }
                      ?>

                      <!-- 最終ページの設定 -->
                      <?php
                      if ($page < $maxPage) {
                      ?>
                      <li><a href="/lesson/shop/index.php?page=<?php echo ($page + 1); ?>">次へ</a></li>
                      <?php
                      } else {
                      ?>
                      <li class="desabled">次へ</li>
                      <?php
                      }
                      ?>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
