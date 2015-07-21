<?php

// MySQLへの接続ファイルを読み込む
include($_SERVER['DOCUMENT_ROOT'].'/lesson/shop/php/dbconnect.php');

//　データ挿入設定
$sql = sprintf('INSERT INTO my_items SET maker_id=%d, item_name="%s", price=%d, keyword="%s"',
	mysql_real_escape_string($_POST['maker_id']),
	mysql_real_escape_string($_POST['item_name']),
	mysql_real_escape_string($_POST['price']),
	mysql_real_escape_string($_POST['keyword'])
);

mysql_query($sql) or die(mysql_error());
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
    <link href="/lesson/shop/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/lesson/shop/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="/lesson/shop/css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/lesson/shop/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                                <i class="fa fa-dashboard"></i>登録結果
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>商品データの登録を行いました。</strong>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                <!-- 商品の登録 -->
               <div class="row">
                    <div class="col-lg-12">
                        <p>データ結果</p>
													<ul>
														<li>
															<?php echo $_POST['maker_id']; ?>
														</li>

														<li>
															<?php echo $_POST['item_name']; ?>
														</li>

														<li>
															<?php echo $_POST['price']; ?>
														</li>

														<li>
															<?php echo $_POST['keyword']; ?>
														</li>
													</ul>

                    <p><a href="/lesson/shop/">一覧へ戻る</a></p>

                    </div>

               </div><!-- 登録結果表示ここまで -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/lesson/shop/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/lesson/shop/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/lesson/shop/js/plugins/morris/raphael.min.js"></script>
    <script src="/lesson/shop/js/plugins/morris/morris.min.js"></script>
    <script src="/lesson/shop/js/plugins/morris/morris-data.js"></script>

</body>

</html>
