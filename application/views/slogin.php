
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>media/images/favi.png">
    <title>Edumart - Educational Template</title>
    <!-- Reset CSS -->
    <link href="<?= base_url() ?>media/css/reset.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url() ?>media/css/fonts.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>media/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url() ?>media/css/font-awesome.min.css" rel="stylesheet">
    <!-- Iconmoon -->
    <link href="<?= base_url() ?>media/css/iconmoon.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="<?= base_url() ?>media/css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?= base_url() ?>media/js/html5shiv.min.js"></script>
    <script src="<?= base_url() ?>media/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fill-bg">

<!-- Start Preloader -->
<div id="loading">
    <div class="element">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Login -->
<section class="login-wrapper">
    <div class="inner">
        <div class="login">
            <div class="login-logo">
                <a href="<?= base_url('/') ?>"><img src="<?= base_url() ?>media/images/logo.png" class="img-responsive" alt=""></a>
            </div>
            <div class="head-block">
                <h1>LOGIN  Now</h1>
            </div>
            <div class="cnt-block">
                <form action="" method="post" class="form-outer">
                    <input name="user_name" type="text" placeholder="Username">
                    <input name="password" type="password" placeholder="password">
                    <div class="button-outer">
                        <button class="btn" type="submit">Login now <span class="icon-more-icon"></span></button>

                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
<!-- End Login -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url() ?>media/js/jquery.min.js"></script>
<!-- Bootsrap JS -->
<script src="<?= base_url() ?>media/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="<?= base_url() ?>media/js/custom.js"></script>
</body>
</html>