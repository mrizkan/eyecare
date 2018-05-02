
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('inc/header_tag.php'); ?>

</head>

<body class="res layout-subpage">
<div id="wrapper" class="wrapper-full ">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        <?php $this->view('inc/site_header.php'); ?>
    </header>
    <!-- //Header Container  -->
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="<?= base_url('Home') ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="<?= base_url('Packages') ?>">Packages</a></li>
            <li><a><?= $header->MediaComTitle ?></a></li>
            <li><a><?= $header->PackagesTitle ?></a></li>



        </ul>
<?php
                                    function change_currency($amount)
                                    {

                                        $from = 'INR';
                                        $to = 'LKR';

                                        $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to";

                                        $req = curl_init();

                                        $timeout = 0;
                                        curl_setopt ($req, CURLOPT_URL, $url);
                                        curl_setopt ($req, CURLOPT_RETURNTRANSFER, 1);

                                        curl_setopt ($req, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
                                        curl_setopt ($req, CURLOPT_CONNECTTIMEOUT, $timeout);
                                        $rawdata = curl_exec($req);


                                        $data = explode('bld>', $rawdata);
                                        $data = explode($to, $data[1]);
                                        $value = round($data[0], 2);
                                        return $value;

                                    }
                                    ?>
        <div class="row">

            <!--Middle Part Start-->
            <div id="content" class="col-md-12 col-sm-12">
                <h3 class="offset_title"><?= $header->MediaComTitle ?> - <?= $header->PackagesTitle ?> - LKR <?= $header->Price    ?></h3>
                <div class="products-category">

                    <!--changed listings-->
                    <div class="products-list row list">

                        <?php //p($Tags); ?>
                        <div class="product-layout col-md-8 col-sm-4 col-xs-12 ">
                            <div class="panel-group" id="accordion">
                                <?php foreach ($Tags as $i=> $tag): ?>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle"  aria-expanded="false">
                                                    <?= $tag->Tag->ChannelTagTitle; ?>
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div  class="panel-collapse collapse in" aria-expanded="false" style="">
                                            <div class="panel-body">
                                                <?php foreach ($tag->Channels as $val): ?>
                                                    <div class="col-md-4">
                                                        <div class="feature-box well">
                                                            <img src="<?= UP.$val->Image ?>"  class="img-thumbnail" >
                                                            <!--                                                        <i class="feature-icon fa fa-book"></i>-->
<!--                                                            <div class="col-md-6">-->
                                                                <h4><?= $val->ChannelTitle ?></h4>

<!--                                                            </div>-->
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

                                            </div>
                                        </div>
                                    </div>








                                <?php endforeach; ?>



                            </div>
                        </div>

                        <div class="product-layout col-md-4 col-sm-4 col-xs-12 ">
                            <div>
                                <a href="<?= UP.$home_addz_08->AddURL; ?>"><img src="<?= UP.$home_addz_08->Image; ?>" alt="left-image"></a>
                            </div>
                            <div class="module titleLine">
                                <h3 class="modtitle">Our Services</h3>
                                <div class="modcontent">
                                    <div class="block-clientsay block ">
                                        <ul class="simple-ul">
                                            <li>Recharge service for all Dish TVs</li>
                                            <li>Local TV antenna installation
                                                Watch all the channels crystal clear</li>
                                            <li>TV brackets installation for
                                                LED/LCD TVs
                                            </li>
                                            <li>Satellite TV system installation and repairs
                                                <!--<ul>
                                                    <li>Libero massa
                                                        dapibus
                                                        dui,
                                                        eu</li>
                                                    <li>Celerisque
                                                        nec,
                                                        rhoncus
                                                        eget</li>
                                                    <li>Praesent
                                                        vitae
                                                        dui</li>

                                                </ul> -->
                                            </li>
                                            <li>DMaster TV antenna system
                                                Get one antenna for all your TV sets</li>
                                            <li>Large dish antenna installation
                                                China, Korea, Maldive and Many European channels</li>

                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="module latest-product titleLine">
                                <h3 class="modtitle">Latest Product</h3>
                                <div class="modcontent ">
                                    <?php foreach ( $related_products as $related_product): ?>

                                        <div class="product-latest-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?= base_url().'Product-Details/'.url_title($related_product->ProductTitle).'/'.$related_product->ProductId?>">
                                                        <img src="<?=UP.$related_product->Image?>"  class="img-responsive" style="width: 100px; height: 82px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="<?= base_url().'Product-Details/'.url_title($related_product->ProductTitle).'/'.$related_product->ProductId?>"> <?= $related_product->ProductTitle ?></a></h4>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>



                    </div>




                </div>

            </div>



        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    <footer class="footer-container">
        <?php $this->view('inc/site_footer.php'); ?>
    </footer>
    <!-- //end Footer Container -->

</div>




<link rel='stylesheet' property='stylesheet'  href='<?= base_url('media/css/') ?>cpanel.css' type='text/css' media='all' />

<!-- Preloading Screen -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Preloading Screen -->

<?php $this->view('inc/footer_js.php'); ?>
</body>
</html>