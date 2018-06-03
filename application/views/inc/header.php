<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>media/images/favi.png">
    <title>EYE CARE INSTITUTE</title>
    <!-- Reset CSS -->
    <link href="<?= base_url() ?>media/css/reset.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url() ?>media/css/fonts.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>media/css/bootstrap.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?= base_url() ?>media/css/select2.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url() ?>media/css/font-awesome.min.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="<?= base_url() ?>media/css/magnific-popup.css" rel="stylesheet">
    <!-- Iconmoon -->
    <link href="<?= base_url() ?>media/css/iconmoon.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="<?= base_url() ?>media/css/owl.carousel.min.css" rel="stylesheet">
    <!-- Animate -->
    <link href="<?= base_url() ?>media/css/animate.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="<?= base_url() ?>media/css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?= base_url() ?>media/js/html5shiv.min.js"></script>
    <script src="<?= base_url() ?>media/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

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

<!-- Start Header -->
<header>

    <!-- Start Header Middle -->
    <div class="container header-middle">
        <div class="row"> <span class="col-xs-6 col-sm-3"><a href="<?= base_url('/') ?>"><img src="<?= base_url() ?>media/images/logo.png" class="img-responsive" alt=""></a></span>
            <div class="col-xs-6 col-sm-3"></div>
            <div class="col-xs-6 col-sm-9">
                <div class="contact clearfix">
                    <ul class="hidden-xs">
                        <li> <span>Email</span> <a href="mailto:info@eyecare.lk">info@eyecare.lk</a> </li>
                        <li> <span>Call Us</span>+94 112 682 277</li>
                    </ul>
                    <?php

                        if($this->session->userdata['front_user_main']){
                            echo '<a href="Students-logout" class="login">Student Logout <span class="icon-more-icon"></span></a> </div>';

                         }else{
                            echo '<a href="Students-login" class="login">Student Login <span class="icon-more-icon"></span></a> </div>';

                        }
                    ?>

<!--                    <a href="Students-login" class="login">Student Login <span class="icon-more-icon"></span></a> </div>-->
            </div>
        </div>
    </div>
    <!-- End Header Middle -->
    <!-- Start Navigation -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar">

                <ul class="nav navbar-nav">
                    <li> <a href="<?= base_url('/') ?>">Home</a></li>
                    <li> <a href="<?= base_url('About-Us') ?>">About Us</a></li>
                    <li> <a href="<?= base_url('Activities') ?>">Activities</a></li>
                    <li class="dropdown"> <a data-toggle="dropdown" href="#">Our Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <?php foreach ($blogs as $blog): ?>
                            <li><a href="<?= base_url('Cause-Details/').url_title($blog->BlogTitle).'/'.$blog->BlogId ?>"><?=$blog->BlogTitle ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li> <a href="<?= base_url('Gallery') ?>">Gallery</a></li>
                    <li> <a href="<?= base_url('Events') ?>">News & Evetns</a></li>

                    </li>
                    <li> <a href="<?= base_url('Contact-Us') ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header --> 