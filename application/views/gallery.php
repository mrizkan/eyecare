<?php include ('inc/header.php'); ?>

<!-- Start Banner -->

<div class="inner-banner blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <h1>Gallery</h1>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Banner -->

<!-- Start Campus Tour -->

    <section class="campus-tour"">

        <ul class="gallery clearfix">

            <?php foreach ($galleriesr as $gallery): ?>
                <li>
                    <div class="overlay">
                        <h3><?=$gallery->GalleryTitle ?></h3>
                        <p>Lorem ipsum</p>
                        <a class="galleryItem" href="<?=UP.$gallery->Image ?>"><span
                                    class="icon-enlarge-icon"></span></a></div>
                    <figure><img src="<?= base_url() ?>media/images/tour1.jpg" class="img-responsive" alt=""></figure>
                </li>
            <?php endforeach; ?>


        </ul>
    </section>

<!-- End Campus Tour -->


<?php include ('inc/footer.php'); ?>