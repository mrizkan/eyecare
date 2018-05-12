<?php include('inc/header.php'); ?>

    <!-- Start Banner Carousel -->
    <div class="banner-outer">
        <div class="bx-wrapper" style="max-width: 100%;">
            <div class="bx-viewport" aria-live="polite"
                 style="width: 100%; overflow: hidden; position: relative;">
                <div class="banner-slider" style="width: auto; position: relative;">
                    <?php foreach ($sliders as $slider): ?>
                        <div class="slide1"
                             style="float: none; list-style: outside none none; position: absolute; width: 1349px; z-index: 0; display: none;background: url('<?= UP . $slider->Image ?>') no-repeat center top / cover;"
                             aria-hidden="true">
                            <div class="container">
                                <div class="content animated fadeInRight">
                                    <div class="fl-right">
                                        <h1 class="animated fadeInRight"><?= $slider->SliderTitle ?></h1>
                                        <p class="animated fadeInRight"><?= $slider->ShortDescription ?></p>
                                        <a href="<?= $slider->Url ?>" class="btn animated fadeInRight">Know More <span
                                                    class="icon-more-icon"></span></a></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- <div class="bx-controls bx-has-pager">
                 <div class="bx-pager bx-default-pager">
                     <div class="bx-pager-item">
                         <a href="" data-slide-index="0" class="bx-pager-link">1</a>
                     </div>
                     <div class="bx-pager-item">
                         <a href="" data-slide-index="1" class="bx-pager-link active">2</a>
                     </div>
                     <div class="bx-pager-item">
                         <a href="" data-slide-index="2" class="bx-pager-link">3</a>
                     </div>
                 </div>
             </div>-->
        </div>
    </div>
    <!-- End Banner Carousel -->

    <!-- Start About Section -->
    <section class="about">
        <div class="container">
            <ul class="row our-links">
                <li class="col-sm-4 apply-online clearfix equal-hight">
                    <div class="icon"><img src="<?= base_url() ?>media/images/apply-online-ico.png"
                                           class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3>We have best Courses</h3>
                        <p>Best Quality of Courses from Us</p>
                    </div>
                </li>
                <li class="col-sm-4 prospects clearfix equal-hight">
                    <div class="icon"><img src="<?= base_url() ?>media/images/prospects-ico.png" class="img-responsive"
                                           alt=""></div>
                    <div class="detail">
                        <h3><span>Download</span>Prospects</h3>
                        <p>Use your cardinalities for download</p>
                    </div>
                </li>
                <li class="col-sm-4 certification clearfix equal-hight">
                    <div class="icon"><img src="<?= base_url() ?>media/images/certification-ico.png"
                                           class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3>Certification</h3>
                        <p>World Class Certification</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-push-5 left-block"><span class="sm-head">Who We Are</span>

                    <p>Eye Care Institute was founded in 2007 as school of Optometry. The Institute expanded its
                        curriculum and clinical programme to reflect the changing demands of the contemporary Optometry
                        practice. Expansion and other changes did not limit to the institute itself, thus it also
                        reflected in all levels of eye care professionals and other organization those dealing with
                        optometry. Today the Eye Care Institute conducts different levels of Optician & Optometry
                        programmes to cater the demand of the country. Further, Eye Care provides largest network of
                        Optometry programmes with the use of its past students.</p>
                    <div class="know-more-wrapper"><a href="About-Us" class="know-more">Know More <span
                                    class="icon-more-icon"></span></a></div>
                </div>
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="video-block">
                        <div id="thumbnail_container"><img src="<?= base_url() ?>media/images/about-video.jpg"
                                                           id="thumbnail" class="img-responsive" alt=""></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Cources Section -->
    <section class="our-cources padding-lg">
        <div class="container">
            <h2><span>Unique Features of our programs</span> What do you want to study?</h2>
            <ul class="course-list owl-carousel">

                <?php foreach ($blogs as $blog): ?>
                    <li>
                        <div class="inner">
                            <figure><img src="<?= base_url() ?>media/images/course-img2.jpg" alt=""></figure>
                            <h3><span><?= $blog->BlogTitle ?></span></h3>
                            <p><?= $blog->ShortDescription ?></p>
                            <div class="bottom-txt clearfix">
                                <div class="duration">
                                    <h4>Course</h4>
                                    <span> Details</span></div>
                                <a href="<?= base_url('Cause-Details/') . url_title($blog->BlogTitle) . '/' . $blog->BlogId ?>"><span
                                            class="icon-more-icon"></span></a></div>
                        </div>
                    </li>
                <?php endforeach; ?>


            </ul>
        </div>
    </section>
    <!-- End Cources Section -->

    <!-- Start Our Importance Section -->
    <section class="our-impotance padding-lg">
        <div class="container">
            <ul class="row">
                <li class="col-sm-4 equal-hight">
                    <div class="inner"><img src="<?= base_url() ?>media/images/study-time-ico.jpg"
                                            alt="Malleable Study Time">
                        <h3>Optometry Clinic</h3>
                        <p>Eye care clinic with comprehensive eye examination by our lecturers provide complete
                            innovative Eye Care. Complete Eye Care explains conventional vision examination, diagnosis
                            of eye diseases, optical & vision theraphy management, further referral to related
                            specialist and follow up care.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"><img src="<?= base_url() ?>media/images/placement-ico.jpg"
                                            alt="Placement Assistance">
                        <h3>Optical & Dispensing</h3>
                        <p>Along side with optometry Clinic– it carries necessary Optical dispensing, which is also
                            equipped with modern Optical lab, so the technical necessary act could be carried out
                            promptly under our Optometrist supervision. Our optical dispense all varieties of branded
                            and premium product to meet all range of optical need.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"><img src="<?= base_url() ?>media/images/easy-access-ico.jpg"
                                            alt="Easy To Access">
                        <h3>Easy To Access</h3>
                        <p>There is easy accessibility to online help in terms of online teachers and online forums.
                            Teachers can be contacted with the help of video chats and e-mails.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"><img src="<?= base_url() ?>media/images/study-go-ico.jpg" alt="Study on the Go">
                        <h3>Study on the Go</h3>
                        <p>SMS that is easily accessible on a number of devices such as mobile phones, I-pads, computers
                            and other such devices. Availability of ready reckoners such that students can remember the
                            key points of the session learnt.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"><img src="<?= base_url() ?>media/images/get-innovative-ico.jpg"
                                            alt="Get an Innovative, In-depth Transition">
                        <h3>Get an Innovative, <span>In-depth Transition</span></h3>
                        <p>The transition to an environment of learning becomes easy with the availability of multiple
                            sources of learning such as text books, power-point presentations, and story boards on
                            various subjects.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"><img src="<?= base_url() ?>media/images/practical-ico.jpg"
                                            alt="Practical & Interactive Participation">
                        <h3>Practical & Interactive <span>Participation</span></h3>
                        <p>Assessments and interactivities are given at the end of every session such that the practical
                            application of theory learnt can be gauged.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Our Importance Section -->


    <!-- Start New & Events Section -->
    <section class="news-events padding-lg">
        <div class="container">
            <h2><span>What is Happening in </span>News and events</h2>
            <ul class="row cs-style-3">
                <?php foreach ($events as $event): ?>
                    <li class="col-sm-4">
                        <div class="inner">
                            <figure><img src="<?= UP . $event->Image ?>" class="img-responsive">
                                <figcaption>
                                    <div class="cnt-block"><a
                                                href="<?= base_url('Event-Details/') . url_title($event->EventTitle) . '/' . $event->EventId ?>"
                                                class="plus-icon">+</a>
                                        <h3><?= $event->EventTitle ?><br><br></h3>

                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                <?php endforeach; ?>


            </ul>
            <div class="know-more-wrapper"><a href="Events" class="know-more">More Post <span
                            class="icon-more-icon"></span></a>
            </div>
        </div>
    </section>
    <!-- End New & Events Section -->

    <!-- Start Campus Tour Section -->
    <section class="campus-tour padding-lg">
        <div class="container">
            <h2><span>OUR INSTITUTE have a lot to offer for our students</span>TAKE A INSTITUTE TOUR</h2>
        </div>
        <ul class="gallery clearfix">

            <?php foreach ($galleries as $gallery): ?>
                <li>
                    <div class="overlay">
                        <h3><?= $gallery->GalleryTitle ?></h3>

                        <a class="galleryItem" href="<?= UP . $gallery->Image ?>"><span
                                    class="icon-enlarge-icon"></span></a></div>
                    <figure><img src="<?= base_url() ?>media/images/tour1.jpg" class="img-responsive" alt=""></figure>
                </li>
            <?php endforeach; ?>


        </ul>
    </section>
    <!-- End Campus Tour Section -->


    <!-- Start Testimonial -->
    <section class="testimonial padding-lg">
        <div class="container">
            <div class="wrapper">
                <h2>Alumini Testimonials</h2>
                <ul class="testimonial-slide">
                    <li>
                        <p>The Best Institute I ever saw, Friendly environment, Best Teaching Practice.Recomended for all.</p>
                        <span>Thomas, <span>Sri Lanka</span></span></li>
                    <li>
                        <p>It is a great Opertunity for me to Study in here, Best methods and resonalbe price. Good luck</p>
                        <span>Minda, <span>Indian</span></span></li>
                    <li>
                        <p>Quality Teaching and life path chaning Institute. Thank Eye Care</p>
                        <span>Lora, <span>Sri Lanka</span></span></li>
                </ul>
                <div id="bx-pager"><a data-slide-index="0" href=""><img
                                src="<?= base_url() ?>media/images/testimonial-thumb1.jpg" class="img-circle"
                                alt=""/></a> <a data-slide-index="1" href=""><img
                                src="<?= base_url() ?>media/images/testimonial-thumb2.jpg" class="img-circle"
                                alt=""/></a> <a data-slide-index="2" href=""><img
                                src="<?= base_url() ?>media/images/testimonial-thumb3.jpg" class="img-circle"
                                alt=""/></a></div>
            </div>
        </div>
    </section>
    <!-- End Testimonial -->

    <!-- Start Footer -->

<?php include('inc/footer.php'); ?>