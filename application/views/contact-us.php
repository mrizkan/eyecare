<?php include('inc/header.php'); ?>


<style>
    .form-wrapper select {
        width: 100%;
        padding: 0 22px;
        height: 46px;
        border: none;
        border-bottom: 1px #dae4e8 solid;
        border-left: 1px #dae4e8 solid;
        font-size: 12px;
        color: #858788;
    }

    @media (max-width: 767px) {
        .contact-detail .address {
            display: none;
        }

    }

</style>

<!-- Start Banner -->

<div class="inner-banner contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-9">
                <div class="content">
                    <h1 style="margin-top: 4%;">Contact Us</h1>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- End Banner -->

<!-- Start Contact Us -->
<section class="our-impotance have-question padding-lg">
    <div class="container">

        <div class="inner">

            <h6><b>Head Office : 235, Ward Place, Colombo 07</b></h6>
        </div>


        <div class="inner" style="margin-top: 1%;"><h6 style="text-transform: lowercase"><b><i
                            class="fa fa-envelope-o"></i> : info@eyecare.lk </b></h6></div>

        <div class="inner" style="margin-top: 1%">

            <h6><b><i class="fa fa-phone"></i> : +94 112 682 277 / +94 773 440 937</b></h6>

        </div>


    </div>
</section>


<section class="form-wrapper padding-lg" style="margin-top: -10%">
    <div class="container">
        <h2>Inquiry Form</h2><br>
        <form name="contact-form" id="contactfrm">
            <div class="row input-row">
                <div class="col-sm-6">
                    <input name="name" type="text" required placeholder="Name">
                </div>


            </div>
            <div class="row input-row">
                <div class="col-sm-6">
                    <select name="course" required>
                        <?php foreach ($blogs as $blog): ?>
                            <option value="<?= $blog->BlogTitle ?>"><?= $blog->BlogTitle ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>


                <div class="col-sm-4">
                    <input name="email" type="email" required placeholder="Email">
                </div>

            </div>
            <div class="row input-row">
                <div class="col-sm-6">
                    <input name="address" type="text" required placeholder="Address">
                </div>
                <div class="col-sm-4">
                    <input name="phone" type="text" required placeholder="Phone Number">
                </div>


            </div>
            <div class="row input-row">
                <div class="col-sm-10">
                    <input name="message" type="text" placeholder="Message">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <button class="btn">Submit<span class="icon-more-icon"></span></button>
                    <div id="status"></div>
                </div>
            </div>
        </form>
    </div>
</section>

<script src="<?= base_url('media/js/') ?>jquery-1.11.1.min.js"></script>
<script src="<?= base_url('media/js/') ?>bootstrap.min.js"></script>

<script>

    // this is the id of the form
    $(document).ready(function () {

        $("#contactform").submit(function (e) {
            //  e.preventDefault();
            $.ajax({
                type: "POST",
                url: '<?= base_url('Home/contact_us') ?>',
                data: $(this).serialize(), // serializes the form's elements.
                success: function (data) {
                    $('#status').html('<p  class="fontresize text-center color-light bold">Your Query Sent Successfully We will Contact you Soon</p>');
                    $('#contactform')[0].reset();
                }
            });
            return false;
        });

    });
</script>

<!-- end Contact Us -->

<!-- Start Google Map -->

<section class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.186256790477!2d79.8759645!3d6.9149098!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x614fbd9988cf7417!2sEye+Care+Institute!5e0!3m2!1sen!2slk!4v1526103739339"
            width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="container">
        <div class="contact-detail">
            <div class="address">
                <div class="inner">
                    <h3>Eye Care Institute</h3>
                    <p>Head Office : 235, Ward Place,<br> Colombo 07</p>
                </div>
                <div class="inner">
                    <h3>+94 112 682 277</h3>
                </div>
                <div class="inner" style="text-transform: lowercase"><a href="info@balacademy.lk">info@eyecare.lk</a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- End Google Map -->

<!-- Start Have Questions -->


<!-- End Have Questions -->
<div style="margin-top: -2%">
    <?php include('inc/footer.php'); ?>
</div>
