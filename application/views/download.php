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
                    <h1>Download Section</h1>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Banner -->

<!-- Start News & Events -->



<section class="news-events padding-lg">
    <div class="container">

        <ul class="row cs-style-3">
            <?php foreach ($documents as $document): ?>
                <li class="col-sm-4" style="margin-bottom: 20px;">
                    <div class="inner">

                        <figure><img src="<?= base_url() ?>media/images/logo.png" class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"><a href="<?=base_url('media/doc/').$document->File ?>" class="plus-icon">+</a>
                                    <h3>Download the <?=$document->DocumentTitle ?> Document<br><br></h3>

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
