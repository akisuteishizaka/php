<!-- メニューを共通ファイルにして読み込み ファイルのみのためincludeを使用 -->
<?php
  include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>

<?php
  //　ファイル名の取り出し
  $file_name = $_FILES['filename']['name'];
  // ファイル(MIME)・タイプの取り出し
  $file_type = $_FILES['filename']['type'];
  // 一時ファイルの取り出し
  $temp_name = $_FILES['filename']['tmp_name'];

  // 保存先のディレクトリ
  $dir = '/lesson/image_up/uploads/';

  // 保存先のファイル名
  $upload_name = $dir . $file_name;

  // サムネイル画像の保存先ディレクトリ
  $dir_s = '/lesson/image_up/uploads/s/';
  // サムネイル画像の保存先
  $upload_name_s = $dir_s . $file_name;

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
                            <i class="fa fa-info-circle"></i>  <strong>画像のアップロード確認</strong>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h2>アップロードした画像ファイルを確認してください。</h2>
                        <p>
                          
                          <?php
                            // JPEB形式ファイルをアップロードする
                            if (($file_type == 'image/jpeg') || ($file_type == 'image/pjpeg')) {
                              // アップロードファイル移動
                              // フルパスで設定してやる必要がある
                              $file_path = '/var/www/html/php/lesson/image_up/uploads/' . $file_name;
                              $result = move_uploaded_file($temp_name, $file_path);

                                if ($result) {
                                  // アップロード成功
                                  echo 'アップロード成功';
                                  // アップロードされた画像情報を取得する
                                  $image_size = getimagesize($file_path);
                                  $width = $image_size[0];
                                  $height = $image_size[1];

                                  // サムネイル画像の幅と高さを決める
                                  $width_s = 120;
                                  $height_s = round($width_s*$height/$width);

                                  // アップロードされた画像を取り出す
                                  $image = imagecreatefromjpeg($file_path);
                                  // サムネイルの大きさの画像を新規作成
                                  $image_s = imagecreatetruecolor($width_s,$height_s);

                                  // アップロードされた画像からサムネイル画像を作成
                                  $result_s = imagecopyresampled(
                                  $image_s, $image,
                                  0,0, 0,0,
                                  $width_s,$height_s, $width,$height);
                                  if ($result_s) {
                                    // サムネイル画像作成成功
                                    // サムネイル画像の保存
                                      $file_path_s = '/var/www/html/php/lesson/image_up/uploads/s/' . $file_name;
                                      if (imagejpeg($image_s,$file_path_s)) {
                                        echo ' ->サムネイル画像保存';
                                      } else {
                                        echo ' ->サムネイル画像保存失敗';
                                      }
                                    } else {
                                    // サムネイル画像作成失敗
                                      echo ' ->サムネイル画像作成失敗';
                                  }

                                  // 画像の破棄
                                  imagedestroy($image);
                                  imagedestroy($image_s);

                                } else {
                                  // アップロード失敗
                                  echo 'アップロード失敗';
                                }
                              } else {
                                // JPEG形式以外のファイルはアップロードさせない
                                echo 'JPEG形式の画像をアップロードしてください。';

                              }

                          ?>

                        </p>

                  <ul class="list-group">
                    <li class="list-group-item">
                      <p>画像ファイル：<?php echo $upload_name . ' (' . $width . '✕' . $height . ')'; ?></p>
                    </li>
                    <li class="list-group-item">
                      <p><img class="img-responsive" src="<?php echo $upload_name; ?>"></p>
                    </li>
                    <li class="list-group-item">
                      <p>サムネイル:<?php echo $upload_name_s . '(' . $width_s . '✕' . $height_s . ')'; ?></p>
                      <p><img class="img-responsive" src="<?php echo $upload_name_s; ?>"></p>
                    </li>
                  </ul>

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
