<?php include ('inc/header.php'); ?>


<!-- Start Banner -->

<div class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">

                    <h1 style="margin-top: 4%;">Course Details</h1>


            </div>

        </div>
    </div>
</div>

<!-- End Banner -->

<!-- Start Course Description -->
<section class="about inner padding-lg">
    <div class="container">
        <div class="row">
            <?php foreach ($blogq as $blog): ?>
            <div class="col-md-7 col-md-push-5 left-block">
                <h2><?=$blog->BlogTitle ?></h2>
                <p><?=$blog->Description ?></p>



            </div>
            <div class="col-md-5 col-md-pull-7">
                <div class="enquire-wrapper">
                    <figure class="hidden-xs hidden-sm"><img src="<?=UP.$blog->Image ?>" class="img-responsive" alt=""></figure>

                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- End Course Description -->



<!-- Start How to Apply -->

<section class="how-apply padding-lg" style="margin-top: -120px">
    <div class="container">
        <h2>How to Apply</h2>
        <ul class="row">
            <li class="col-sm-4">
                <div class="icon-block"> <span class="num">1</span> <img src="<?= base_url() ?>media/images/registration-ico.png" alt=""></div>
                <h3>REGISTRATION</h3>
                <p>Register to the Course.</p>
            </li>
            <li class="col-sm-4">
                <div class="icon-block"> <span class="num">2</span> <img src="<?= base_url() ?>media/images/doc-ico.png" alt=""></div>
                <h3>DOCUMENTATION</h3>
                <p>Submit the Documents when We ask.</p>
            </li>
            <li class="col-sm-4">
                <div class="icon-block"> <span class="num">3</span> <img src="<?= base_url() ?>media/images/get-start-ico.png" alt=""></div>
                <h3>Get started now</h3>
                <p>Start your Course with us.</p>
            </li>
        </ul>
        <div class="button-wrapper"> <a href="/Contact-Us" class="btn">Contact Us <span class="icon-more-icon"></span></a> </div>
    </div>
</section>
<!-- End How to Apply -->



<?php include ('inc/footer.php'); ?>