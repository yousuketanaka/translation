<!DOCTYPE html>
<html lang="ja">

<head>
    <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Bowlby+One+SC|Indie+Flower|Martel:900|Montserrat:900" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="./css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<div class="wrap">
<body id="page-top" class="index">
  <header>
    <div class="container">
      <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
            <!-- <div class="row"> -->
              <div class="navbar-header page-scroll">
                  <div class="navbar-header page-scroll">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="#page-top">
                          <?xml version="1.0" encoding="utf-8"?>
                          <!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                          <svg version="1.1" id="svg-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                             y="0px" viewBox="0 0 662.3 139.9" style="enable-background:new 0 0 662.3 139.9;" xml:space="preserve">
                          <style type="text/css">
                            .st0{fill:#8FC31F;}
                            .st1{fill:#3E3A39;}
                            .st2{font-family:'TimesNewRomanPS-BoldMT';}
                            .st3{font-size:43px;}
                          </style>
                          <circle class="st0" cx="78.6" cy="46.8" r="46.8"/>
                          <circle class="st0" cx="111.5" cy="93.1" r="46.8"/>
                          <circle class="st0" cx="46.8" cy="93.1" r="46.8"/>
                          <text transform="matrix(1 0 0 1 19.4339 92.5719)" class="st1 st2 st3">VIETNAM BUSINESS SUPPORT</text>
                          </svg>
                        </a>
                      </div>
                  </div>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right g-nav-01">
                      <li class="hidden">
                          <a href="#page-top"></a>
                      </li>
                      <li class="page-scroll">
                          <a href="<?php echo home_url(); ?>"><i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i>HOME</a>
                      </li>
                      <li class="page-scroll">
                          <a href="<?php echo home_url(); ?>/about"><i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i>ご挨拶</a>
                      </li>
                      <li class="page-scroll dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i>サービス<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo home_url(); ?>/tsuyaku">通訳/翻訳</a></li>
                          <li><a href="<?php echo home_url(); ?>/accounting">進出サポート</a></li>
                          <li><a href="<?php echo home_url(); ?>/education">教育</a></li>
                        </ul>
                      </li>
                      <li class="page-scroll dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i>その他<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="./contact.html">お問い合わせ</a></li>
                          <li><a href="./company.html">会社情報</a></li>
                          <li><a href="./blog.html">ブログ</a></li>
                        </ul>
                      </li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
            <!-- </div> -->
          </div>
          <!-- /.container-fluid -->
      </nav>
    </div> <!-- container -->
  <?php wp_head(); ?>
  </header>