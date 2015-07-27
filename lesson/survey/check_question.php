<?php
// アンケート内容の確認

// 購入日
$pdate = htmlspecialchars($_POST['pdate'], ENT_QUOTES);

// 評価
$pprice = htmlspecialchars($_POST['pprice'], ENT_QUOTES);

// 平均購入金額
$star = htmlspecialchars($_POST['star'], ENT_QUOTES);

// 興味のある言語
for ($i = 0; $i < 5; $i++) {
  $lang[$i] = htmlspecialchars($_POST['lang'][$i], ENT_QUOTES);
}

// 職業
$job = htmlspecialchars($_POST['job'], ENT_QUOTES);

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
                            PHPの練習 <small>アンケートフォーム</small>
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
                        <h2>アンケートにご内容をご確認ください。</h2>

                        <ul class="list-group">
                          <li class="list-group-item">
                            <p>この本の購入日を教えて下さい。</p>
                            <p>
                              <?php
                                // 全角から半角へ変換
                                $pdate = mb_convert_kana($pdate, 'a', 'UTF8');

                                // 「-」で分割
                                list($year,$month,$day) = explode('-', $pdate);

                                // 日付チェック
                                if (checkdate($month,$day,$year)) {
                                  echo $pdate;
                                } else {
                                  echo $pdate . '(日付に誤りがあります。)';
                                }
                              ?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <p>1ヶ月あたりの書籍の平均購入金額を教えて下さい。</p>
                            <p>
                              <?php
                                // 全角から半角へ変換
                                $pprice = mb_convert_kana($pprice, 'a', 'UTF8');
                                // 数値チェック
                                if (is_numeric($pprice)) {
                                  echo $pprice . '円';
                                } else {
                                  echo $pprice . '円（数値ではありません。）';
                                }
                              ?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <p>本の評価を教えて下さい。（5段階評価）</p>
                            <p>
                              <?php echo $star; ?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <p>興味のある言語を選択してください。（複数選択可）</p>
                            <p>
                              <?php
                                for ($i = 0; $i < 5; $i++) {
                                  //　チェックされているもののみ表示
                                  if ($lang[$i] !='') echo '[' . $lang[$i] . ']';
                                }
                              ?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <p>あなたの職業を選択してください。</p>
                            <p>
                              <?php echo $job; ?>
                            </p>
                          </li>
                        </ul>

                        <!-- フォーム送信 -->
                        <form action="write_question.php" method="post">
                          <input type="hidden" name="pdate" value="<?php echo $pdate; ?>">
                          <input type="hidden" name="pprice" value="<?php echo $pprice; ?>">
                          <input type="hidden" name="star" value="<?php echo $star; ?>">

                          <?php
                            for ($i = 0; $i < 5; $i++) {
                              echo '<input type="hidden" name="lang[' . $i . ']" value="' . $lang[$i] . '">';
                            }
                          ?>

                          <input type="hidden" name="job" value="<?php echo $job; ?>">

                          <!-- 送信ボタン -->
                          <input type="submit" value="アンケートを送信する" class="btn btn-primary">
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
