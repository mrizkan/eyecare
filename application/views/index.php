<?php include('inc/header.php'); ?>

    <!-- Start Banner Carousel -->
    <div class="banner-outer">
        <div class="banner-slider">


            <?php foreach ($sliders as $slider): ?>
            <div class="slide1">
                <div class="container">
                    <div class="content animated fadeInRight">
                        <div class="fl-right">
                            <img class="banner-outer slide1" src="<?=UP.$slider->Image ?>" style="no-repeat center top / cover">
                            <h1 class="animated fadeInRight"><?=$slider->SliderTitle ?> <span class="animated fadeInRight"><?=$slider->title2 ?></span>
                            </h1>
                            <p class="animated fadeInRight"><?=$slider->ShortDescription ?></p>
                            <a href="<?=$slider->Url ?>" class="btn animated fadeInRight">Know More <span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


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
                        <h3>See Our Courses</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </li>
                <li class="col-sm-4 prospects clearfix equal-hight">
                    <div class="icon"><img src="<?= base_url() ?>media/images/prospects-ico.png" class="img-responsive"
                                           alt=""></div>
                    <div class="detail">
                        <h3><span>Download</span>Prospects</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </li>
                <li class="col-sm-4 certification clearfix equal-hight">
                    <div class="icon"><img src="<?= base_url() ?>media/images/certification-ico.png"
                                           class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3>Certification</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
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
                    <div class="know-more-wrapper"><a href="#" class="know-more">Know More <span
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
                        <figure><img src="<?=UP.$blog->Image ?>" alt=""></figure>
                        <h3> <span><?=$blog->BlogTitle ?></span></h3>
                        <p><?=$blog->ShortDescription ?></p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>Course</h4>
                                <span> Details</span></div>
                            <a href="#"><span class="icon-more-icon"></span></a></div>
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
                        <h3>Malleable Study Time</h3>
                        <p>Study material available online 24/7. Study in your free time, no time management issues,
                            perfect balance between work and study time.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"><img src="<?= base_url() ?>media/images/placement-ico.jpg"
                                            alt="Placement Assistance">
                        <h3>Placement Assistance</h3>
                        <p>Edumart University Online has access to all of Edumart Group’s placement Consultants and
                            alumni network, through which thousands of job opportunities are generated.</p>
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
                        <p>LMS that is easily accessible on a number of devices such as mobile phones, I-pads, computers
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
            <h2><span>There are many ways to learn</span>News and events</h2>
            <ul class="row cs-style-3">
                <li class="col-sm-4">
                    <div class="inner">
                        <figure><img src="<?= base_url() ?>media/images/new-event-img1.jpg" class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"><a href="<?= base_url('Event-Details/').url_title($row->EventTitle).'/'.$row->EventId ?>" class="plus-icon">+</a>
                                    <h3>We have added new features to Dream Palace<br><br></h3>

                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
                <li class="col-sm-4">
                    <div class="inner">
                        <figure><img src="<?= base_url() ?>media/images/new-event-img2.jpg" class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"><a href="#" class="plus-icon">+</a>
                                    <h3>We have added new features to Dream Palace<br><br></h3>

                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
                <li class="col-sm-4">
                    <div class="inner">
                        <figure><img src="<?= base_url() ?>media/images/new-event-img3.jpg" class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"><a href="#" class="plus-icon">+</a>
                                    <h3>We have added new features to Dream Palace<br><br></h3>

                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
            </ul>
            <div class="know-more-wrapper"><a href="#" class="know-more">More Post <span class="icon-more-icon"></span></a>
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
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour1.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour2.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour3.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour4.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour5.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour6.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour7.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour8.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour9.jpg" class="img-responsive" alt=""></figure>
            </li>
            <li>
                <div class="overlay">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum</p>
                    <a class="galleryItem" href="<?= base_url() ?>media/images/dummy.jpg"><span
                                class="icon-enlarge-icon"></span></a></div>
                <figure><img src="<?= base_url() ?>media/images/tour10.jpg" class="img-responsive" alt=""></figure>
            </li>
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley...</p>
                        <span>Thomas, <span>London</span></span></li>
                    <li>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley...</p>
                        <span>Thomas, <span>London</span></span></li>
                    <li>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley...</p>
                        <span>Thomas, <span>London</span></span></li>
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