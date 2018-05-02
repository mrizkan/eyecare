
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
            <li><a >Brands</a></li>


        </ul>

        <div class="row">

            <!--Middle Part Start-->
            <div id="content" class="col-md-12 col-sm-12">
                <h3 class="offset_title">All Brands</h3>
                <div class="products-category">







                    <!--changed listings-->
                    <div class="products-list row list">

                        <?php foreach ($brands1 as $i=> $brand): ?>

                        <div class="product-layout col-md-2 col-sm-4 col-xs-12 ">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container lazy second_img ">
                                        <img data-src="<?= UP.$brand->Image; ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="" class="img-responsive" />
                                        <img data-src="<?= UP.$brand->Image; ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="<?= $brand->BrandTitle; ?>" class="img_0 img-responsive" />
                                    </div>
                                    <!--full quick view block-->
                                    <a class="quickview  visible-lg"   href="<?= base_url().'Brand/'.url_title($brand->BrandTitle).'/'.$brand->BrandId?>">  view</a>
                                    <!--end full quick view block-->
                                </div>

                                <div class="right-block">
                                    <div class="caption">
                                        <h4>
                                            <a href="<?= base_url().'Brand/'.url_title($brand->BrandTitle).'/'.$brand->BrandId?>">
                                                <?= $brand->BrandTitle; ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>


                        <?php endforeach; ?>


                    </div>				<!--// End Changed listings-->
                    <!-- Filters -->
                    <!--<div class="product-filter product-filter-bottom filters-panel" >
                        <div class="row">
                            <div class="col-md-2 hidden-sm hidden-xs">

                            </div>
                            <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
                                <div class="form-group" style="margin: 7px 10px">Showing 1 to 9 of 10 (2 Pages)</div>
                            </div>
                            <div class="box-pagination col-md-3 col-sm-4 text-right"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="http://localhost/ytc_templates/opencart/so_market/index.html?route=product/category&amp;path=33&amp;page=2">2</a></li><li><a href="http://localhost/ytc_templates/opencart/so_market/index.html?route=product/category&amp;path=33&amp;page=2">&gt;</a></li><li><a href="http://localhost/ytc_templates/opencart/so_market/index.html?route=product/category&amp;path=33&amp;page=2">&gt;|</a></li></ul></div>

                        </div>
                    </div>-->
                    <!-- //end Filters -->

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
<script type="text/javascript">

    window.onload = function()
    {
        document.getElementById("brand").className = "hover home";
    }
</script>
</body>
</html>