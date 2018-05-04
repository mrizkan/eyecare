<?php
/**
 * Created by PhpStorm.
 * User: Rizkan
 * Date: 5/4/2018
 * Time: 8:44 PM
 */
?>
<?php include ('inc/header.php'); ?>

<!-- Start Banner -->

<div class="inner-banner blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <h1>News & Events</h1>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Banner -->

<!-- Start News & Events -->



<section class="news-events padding-lg">
    <div class="container">
        <h2><span>There are many ways to learn</span>News and events</h2>
        <ul class="row cs-style-3">
            <?php foreach ($eventp as $event): ?>
                <li class="col-sm-4" style="margin-bottom: 20px;">
                    <div class="inner">
                        <figure><img src="<?=UP.$event->Image ?>" class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"><a href="<?= base_url('Event-Details/').url_title($event->EventTitle).'/'.$event->EventId ?>" class="plus-icon">+</a>
                                    <h3><?=$event->EventTitle ?><br><br></h3>

                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
            <?php endforeach; ?>


        </ul>

        </div>
    </div>
</section>
<!-- End News & Events -->






<?php include ('inc/footer.php'); ?>
