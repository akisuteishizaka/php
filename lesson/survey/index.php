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

                        <form action="check_question.php" method="post">
                            <div class="form-group">
                                <label class="control-label" for="datepicker">本の購入日時を入力してください。</label>
                                <!-- アンケートフォーム -->
                                <input type="text" class="form-control" id="datepicker" name="pdate" placeholder="日付を選択してください。">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="pprice">1ヶ月あたりの書籍の平均購入額を教えて下さい。</label>
                                <!-- アンケートフォーム -->
                                <input type="text" class="form-control" id="pprice" name="pprice" placeholder="金額を入力してください。">
                            </div>

                            <!-- アンケートフォーム　ラジオボタン -->
                            <div class="form-group">
                                <p class="form_text">本書の評価を選択してください。（5段階）</p>
                                <!-- アンケートフォーム　ラジオボタン -->
                                  <div class="radio-inline">
                                    <input type="radio" name="star" id="star5" value="5">
                                    <label for="star">5:とても良い</label>
                                  </div>

                                  <div class="radio-inline">
                                    <input type="radio" name="star" id="star4" value="4">
                                    <label for="star">4:良い</label>
                                  </div>

                                  <div class="radio-inline">
                                    <input type="radio" name="star" id="star3" value="3" checked="checked">
                                    <label for="star">3:ふつう</label>
                                  </div>

                                  <div class="radio-inline">
                                    <input type="radio" name="star" id="star2" value="2">
                                    <label for="star">2:悪い</label>
                                  </div>

                                  <div class="radio-inline">
                                    <input type="radio" name="star" id="star1" value="1">
                                    <label for="star">1:とても悪い</label>
                                  </div>
                            </div>

                            <!-- アンケートフォーム　チェックボックス -->
                            <div class="form-group">
                                <p class="form_text">興味のある言語を選択してください。（複数選択可）</p>
                                <!-- アンケートフォーム　チェックボックス -->
                                  <div class="checkbox-inline">
                                    <input type="checkbox" name="lang[0]" id="lang0" value="PHP">
                                    <label for="lang0">PHP</label>
                                  </div>

                                  <div class="checkbox-inline">
                                    <input type="checkbox" name="lang[1]" id="lang1" value="Perl">
                                    <label for="lang1">Perl</label>
                                  </div>

                                  <div class="checkbox-inline">
                                    <input type="checkbox" name="lang[2]" id="lang2" value="Java">
                                    <label for="lang2">Java</label>
                                  </div>

                                  <div class="checkbox-inline">
                                    <input type="checkbox" name="lang[3]" id="lang3" value="C#">
                                    <label for="lang3">C#</label>
                                  </div>

                                  <div class="checkbox-inline">
                                    <input type="checkbox" name="lang[4]" id="lang4" value="Basic">
                                    <label for="lang4">Basic</label>
                                  </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label">現在の職業を選択してください。</label>
                                <select name="job" class="form-control">
                                  <option value="プログラマー">プログラマー</option>
                                  <option value="コンサルタント">コンサルタント</option>
                                  <option value="デザイナー">デザイナー</option>
                                  <option value="研究職">研究職</option>
                                  <option value="学生">学生</option>
                                  <option value="その他">その他</option>
                                </select>
                            </div>

                          <input type="submit" value="アンケートの内容を確認する" class="btn btn-primary">
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
