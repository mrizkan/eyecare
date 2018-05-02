
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
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">About Us 3</a></li>
        </ul>

        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="about-us about-demo-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 about-image"> <img src="<?= base_url('media/images/') ?>about_us.jpg" alt="About Us"> </div>
                        <div class="col-lg-6 col-md-6 about-info">
                            <h2 class="about-title">About Us</h2>
                            <div class="about-text">
                                <p> AD Sports Corner is a number one company for Sports Goods, Accessories, Gym, Exercise , Weight Lifting Equipment. We have our sports show room in Sri Lanka for the past 15 Years. </p>
                                <p>We are upright and well recognized in the Sri Lankan Market 
due to our high degree of effective and innovative services, credibility, credentials, 
honesty maintained among our valued customers.</p>
<p>Our focus and dedicated services to the nation in the past, 
have earned many satisfied Sportsmen, Athletes, Schools, Universities, 
Government Organizations, Sports and Recreation Clubs, Star Class Hotels, Holiday Resorts, 
Gymnasiums, Armed Forces, Police, Residencies, Complex, and domestic users, as 
our much valued customers.</p>
<p>In our Shop you can buy the most famous brands of athletic. Our commitment is our everyday effort to improve our services, 
to renew our products regularly and to be updated in the latest fashion trends.</p>

                            </div>
                        </div>
						  <div class="col-lg-6 col-md-6 skills-description">
                             <!--<h2 class="about-title">Our Skills</h2>-->

                            <p>Our aim is to develop a relationship of trust with our customers offering :<br>
							<ul>
							<li>The latest collections</li>
							<li>Continuous offers</li>
							<li>Correct service and reliability</li>
							<li>Economical Prices</li></ul>
							
							</p>
							</div>
<div class="col-lg-6 col-md-6 skills-description">
<p>
Our products are selected very carefully to offer ergonomy and comfort for the athlets. We remain faithfull to our original goals ( quality, reliability , and 
competitive prices ) and we we dynamically continue having you by our side.<br><br>

Thanks for your support all these years. </p>

                        </div>
						

                    </div>
					<div class="col-md-3 skills-description">
					<img src="<?= base_url('media/images/') ?>about_us.jpg" alt="About Us">
						</div>
					
                   
                </div>

            </div>
        </div>
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    <footer class="footer-container">
        <?php $this->view('inc/site_footer.php'); ?>
    </footer>
    <!-- //end Footer Container -->

</div>


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
        document.getElementById("about").className = "hover home";
    }
</script>

</body>
</html>