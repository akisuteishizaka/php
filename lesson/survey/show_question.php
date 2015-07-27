<?php
// 日付チェック関数の作成
function get_checked_date($date)
{
  // 全角から半角へ変換
  $checked_date = mb_convert_kana($date, 'a', 'UTF8');
  // 「-」で分割
  list($year,$month,$day) = explode('-', $checked_date);
  //　日付チェック
  if (!checkdate($month,$day,$year)) {
    // 現在の日付
    $checked_date = date('Y-m-d');
  }
  return $checked_date;
}

$sdate = get_checked_date($_POST['sdate']);
$edate = get_checked_date($_POST['edate']);
$sort = htmlspecialchars($_POST['sort'], ENT_QUOTES);

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
                      <h2>アンケートにご回答ください。</h2>

                      <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>購入日</th>
                            <th>平均購入額</th>
                            <th>評価</th>
                            <th>PHP</th>
                            <th>Perl</th>
                            <th>Java</th>
                            <th>C#</th>
                            <th>Basic</th>
                            <th>職業</th>
                            <th>登録日</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            // mysqlへの接続
                            $conn = mysql_connect('localhost','sample_user','123456');

                            if ($conn) {
                              //　データベースの選択
                              mysql_select_db('sample_db',$conn);
                              mysql_query('SET NAMES UTF8');

                              // データベースへの問い合わせSQL文
                              $sql = 'SELECT id,purchase_date,purchase_price,star,lang_php,lang_perl,lang_java,lang_cs,lang_basic,job,entry_date FROM question WHERE purchase_date >= "' . $sdate . '" AND purchase_date <= "' . $edate . '"';
                              //　ソート
                              if ($sort == 'date') {
                                $sql = $sql . 'ORDER BY purchase_date';
                              } else {
                                $sql = $sql . 'ORDER BY star';
                              }

                              // SQL文の実行
                              $query = mysql_query($sql, $conn);

                              // データの取り出し
                              while($row=mysql_fetch_object($query)) {
                                echo '<tr>';
                                echo '<td>' . $row->id .'</td>';
                                echo '<td>' . $row->purchase_date .'</td>';
                                echo '<td>' . $row->purchase_price .'</td>';
                                echo '<td>' . $row->star .'</td>';
                                echo '<td>' . $row->lang_php .'</td>';
                                echo '<td>' . $row->lang_perl .'</td>';
                                echo '<td>' . $row->lang_java .'</td>';
                                echo '<td>' . $row->lang_cs .'</td>';
                                echo '<td>' . $row->lang_basic .'</td>';
                                echo '<td>' . $row->job .'</td>';
                                echo '<td>' . $row->entry_date .'</td>';
                                echo '</tr>';
                              }
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
