<?php
// MySQLへの接続ファイルを読み込む
include($_SERVER['DOCUMENT_ROOT'].'/lesson/shop/php/dbconnect.php');


// データ挿入のテスト
// mysql_query('INSERT INTO my_items SET maker_id=1, item_name="もも", price=210, keyword="缶詰、ピンク、甘い", sales=0, created="2015-07-20 00:00:00", updated="2015-07-20 01:00:00"') or die(mysql_error());
// $db_insert_text = "データを挿入しました。";

// データ一覧の取得
$recordSet = mysql_query('select * from my_items');

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
                                <i class="fa fa-dashboard"></i>データ登録
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>商品データ登録</strong>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                <!-- 商品の登録 -->
               <div class="row">
                    <div class="col-lg-12">
                        <p>登録する商品の情報を記入してください。</p>
                        <form class="form-horizontal" id="frmInupt" name="frmInput" method="post" action="/lesson/shop/php/input_do.php">
                            <!-- フォームグループ メーカーID -->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="maker_id">メーカーID</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="maker_id" id="maker_id" size="10" placeholder="メーカーID">
                                </div>
                            </div>

                            <!-- フォームグループ　商品名 -->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="item_name">商品名</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="item_name" id="item_name" placeholder="商品名">
                                </div>
                            </div>

                            <!-- フォームグループ　価格 -->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="price">価格</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="price" id="price" placeholder="価格">
                                </div>
                            </div>

                            <!-- フォームグループ　キーワード -->
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="keyword">キーワード</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="キーワード">
                                </div>
                            </div>

                            <!-- 登録ボタン -->
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-4">
                                <input type="submit" value="登録する" class="btn btn-primary">
                              </div>
                            </div>
                        </form><!-- ./form -->
                    </div>
               </div><!-- 登録フォームここまで -->

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
