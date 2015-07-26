<?php

if (!empty($_POST)) {
    // エラー項目の確認
    if ($_POST['name'] == '') {
        $error['name'] = 'blank';
    }

    if ($_POST['email'] == '') {
        $error['name'] = 'blank';
    }

    if (strlen($_POST['password']) < 4) {
        $error['password'] = 'length';
    }

    if ($_POST['password'] == '') {
        $error['password'] = 'blank';
    }

    if (empty($error)) {
        $_SESSION['join'] = $_POST;
        header('Location: check.php');
        exit();
    }

}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="phpの練習">

    <title>Mutter</title>

    <!-- Bootstrap Core CSS -->
    <link href="/lesson/blog/css/bootstrap.min.css" rel="stylesheet" type="text/csss">
    <!-- Custom CSS -->
    <link href="/lesson/blog/css/business-casual.css" rel="stylesheet" type="text/csss">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <!-- cssの設定 -->
    <link href="/lesson/blog/css/common.css" rel="stylesheet" type="text/csss">
    <link href="/favicon/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="bgimage">

    <div class="brand">Mutter</div>
    <div class="address-bar">phpで作るTwitter風blog</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="/lesson/blog/">今日Casual</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">


        <!-- 会員登録 -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                  <p class="text-center">次のフォームに必要事項をご記入ください。</p>

                  <!-- 会員登録フォーム -->
                  <form class="form-horizontal" method="post" enctype="multipart/form-data">

                    <!-- ニックネーム -->
                    <div class="form-group">
                      <label class="control-label col-sm-5" for="name">ニックネーム<span class="create_data">　※必須</span></label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" size="35" maxlength="255" placeholder="ニックネームを入力してください。">
                        <?php if ($error['name'] == 'blank') { ?>
                        <p class="error">※ニックネームを入力してください。</p>
                        <?php } ?>
                      </div>
                    </div>

                    <!-- メールアドレス -->
                    <div class="form-group">
                      <label class="control-label col-sm-5" for="email">メールアドレス<span class="create_data">　※必須</span></label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="email" name="email" size="35" maxlength="255" placeholder="メールアドレスを入力してください。">
                      </div>
                    </div>

                    <!-- パスワード -->
                    <div class="form-group">
                      <label class="control-label col-sm-5" for="password">パスワード<span class="create_data">　※必須(4文字以上)</span></label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" id="password" name="password" size="32" maxlength="32" placeholder="4文字以上のパスワードを入力してください。">
                      </div>
                    </div>

                    <!-- 写真等 -->
                    <div class="form-group">
                      <label class="control-label col-sm-5" for="image">画像ファイル</label>
                      <div class="col-sm-6">
                        <input type="file" class="form-control" id="image" name="image" maxlength="100">
                      </div>
                    </div>

                    <!-- 登録ボタン -->
                    <div class="form-group">
                      <div class="text-center">
                        <input type="submit" value="入力内容を確認する" class="btn btn-primary">
                      </div>
                    </div>
                  </form>

                </div>
            </div>
        </div>


    </div>
    <!-- /.container -->

    <footer class="login_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; local_php.stone-rise.com 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/lesson/blog/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/lesson/blog/js/bootstrap.min.js"></script>

</body>

</html>
