<!-- メニューを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
<?php
  include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>

<?php
  // 保存先のディレクトリ
  $dir = 'uploads/';
  $dir_s = 'uploads/s/';
  // ディレクトリ内のファイルを取得する
  $files = scandir($dir_s);
   // ファイル数を取得する
  $count = count($files);
?>

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
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>サムネイル画像表示</strong>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12 col-md-12">

                      <ul class="list-inline">

                        <?php
                          $col = 0;
                          // ファイルの取得
                          for ($i = 0; $i < $count; $i++) {
                            //　ファイル情報を取得する
                            $file = pathinfo($files[$i]);
                            // ファイル名
                            $file_name = $file['basename'];
                            // ファイル拡張子
                            $file_ext = $file['extension'];

                            // jpeg形式のファイルを表示する
                            if ($file_ext == 'jpg') {
                              // 先頭ならばtrタグ開始
                              if ($col == 1) echo '<tr>';

                              // tdタグ開始
                              echo '<li>';

                              // リンク、画像の表示
                              echo '<a href="'. $dir . $file_name . '" target="_blank"><img class="img-responsive" src="'. $dir_s . $file_name .'"></a>';
                              // tdタグの終わり
                              echo '</li>';

                              // 5列目ならばtrタグ終わり、列位置を0に戻す
                              if ($col == 5) {
                                echo '</tr>';
                                $col=0;
                              }


                            }

                            // 列の残りを埋める
                            if ($col>0) {
                              echo '<td colspan="' . (5 - $col) .'"></td></tr>';
                            }


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
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/js/plugins/morris/raphael.min.js"></script>
    <script src="/js/plugins/morris/morris.min.js"></script>
    <script src="/js/plugins/morris/morris-data.js"></script>

</body>

</html>
