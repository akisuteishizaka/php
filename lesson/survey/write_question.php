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
  if ($lang[$i] == '') {
    $lang[$i] = 0;
  } else {
    $lang[$i] = 1;
  }
}

// 職業
$job = htmlspecialchars($_POST['job'], ENT_QUOTES);

//　日付チェック
//　全角から半角へ変換
$pdate = mb_convert_kana($pdate, 'a' , 'UTF8');
// 「-」で分割
list($year,$month,$day) = explode('-', $pdate);
// 日付チェック
if (!checkdate($month,$day,$year)) $pdate = '';

// 数値チェック
// 全角から半角へ
$pprice = mb_convert_kana($pprice, 'a' , 'UTF8');
// 数値チェック
if (!is_numeric($pprice)) $pprice = '';

// mysqlへの接続
$conn = mysql_connect('localhost','sample_user','123456');

if ($conn) {
    // データベースの選択
    mysql_select_db('sample_db',$conn);
    mysql_query('SET NAMES UTF8');
    //　データベースへの書き込みSQL文
    $sql = 'INSERT INTO question(purchase_date,purchase_price,star,lang_php,lang_perl,lang_java,lang_cs,lang_basic,job) VALUES ("' . $pdate . '",' . $pprice . ',' . $star . ',' . $lang[0] . ',' . $lang[1] . ',' . $lang[2] . ',' . $lang[3] . ',' . $lang[4] . ', "' . $job . '")';

    // SQL文の実行
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
                        <h2>アンケートを登録しました。</h2>

                        <p><a href="uploads/question.csv">ファイルのダウンロード</a></p>




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
