<?php
/**
 * Created by PhpStorm.
 * User: Rizkan
 * Date: 5/4/2018
 * Time: 8:37 PM
 */
?>
<?php include ('inc/header.php'); ?>
<!-- Start Banner -->
<div class="inner-banner blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <h1>News & Events Details</h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start News & Events -->
<div class="container blog-wrapper padding-lg">
    <div class="row">
        <!-- Start Left Column -->
        <div class="col-sm-12 blog-left">
            <ul class="blog-listing detail">
                <?php foreach ($eventq as $event): ?>
                <li> <img src="<?=UP.$event->Image ?>" class="img-responsive" style="margin-left: 180px;" alt="">
                    <h2><?=$event->EventTitle ?></h2>

                    <p><?=$event->Description ?></p>


                </li>
                <?php endforeach; ?>
            </ul>



        </div>
        <!-- End Left Column -->

        <!-- Start Right Column -->

        <!-- End Right Column -->

    </div>
</div>
<!-- End News & Events -->

<?php include ('inc/footer.php'); ?>
