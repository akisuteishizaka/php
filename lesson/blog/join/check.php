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

                  <p>次のフォームに必要事項をご記入ください。</p>

                  <!-- 会員登録フォーム -->
                  <form class="form-horizontal" method="post" enctype="multipart/form-data" action="check.php">
                    <dl class="dl-horizontal">
                      <dt>ニックネーム</dt>
                      <dd>
                        
                      </dd>

                      <dt>メールアドレス</dt>
                      <dd>
                        
                      </dd>

                      <dt>パスワード</dt>
                      <dd>
                        【表示されません】
                      </dd>

                      <dt>写真など</dt>
                      <dd></dd>
                    </dl>

                    <!-- 登録ボタン -->
                    <div class="form-group">
                      <div class="text-center">
                        <a href="/lesson/blog/join/index.php?action=rewrite">書き直す　　</a>
                        <input type="submit" value="登録する" class="btn btn-primary">
                      </div>
                    </div>
                  </form>

                </div>
            </div>
        </div>


    </div>
    <!-- /.container -->


    <!-- jQuery -->
    <script src="/lesson/blog/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/lesson/blog/js/bootstrap.min.js"></script>

</body>

</html>
