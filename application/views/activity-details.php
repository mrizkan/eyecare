<?php include ('inc/header.php'); ?>


    <!-- Start Banner -->

    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">

                    <h1 style="margin-top: 4%;">Activity Details</h1>


                </div>

            </div>
        </div>
    </div>

    <!-- End Banner -->

    <!-- Start Course Description -->
    <section class="about inner padding-lg">
        <div class="container">
            <div class="row">
                <?php foreach ($newsq as $new): ?>
                    <div class="col-md-7 col-md-push-5 left-block">
                        <h2><?=$new->NewsTitle ?></h2>
                        <p><?=$new->Description ?></p>



                    </div>
                    <div class="col-md-5 col-md-pull-7">
                        <div class="enquire-wrapper">
                            <figure class="hidden-xs hidden-sm"><img src="<?=UP.$new->Image ?>" class="img-responsive" alt=""></figure>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- End Course Description -->







<?php include ('inc/footer.php'); ?>