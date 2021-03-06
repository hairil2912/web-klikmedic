<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout5">
    <div class="bg-img"><img src="<?= base_url('assets/images/backgrounds/6.jpg') ?>" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
                <h1 class="pagetitle__heading my-3"><?= $post->title ?></h1>
                <nav>
                    <ol class="breadcrumb my-3">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="about-us.html">About</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                    </ol>
                </nav>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
       FAQ
    ========================= -->
<section class="faq pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar has-marign-right">
                    <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                        <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                        <div class="widget-content">
                            <div class="widget__icon">
                                <i class="icon-call3"></i>
                            </div>
                            <h4 class="widget__title">Emergency Cases</h4>
                            <p class="widget__desc">Please feel welcome to contact our friendly reception staff with any general
                                or medical enquiry call us.
                            </p>
                            <a href="tel:+201061245741" class="phone__number">
                                <i class="icon-phone"></i> <span>01061245741</span>
                            </a>
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-help -->
                    <div class="widget widget-schedule">
                        <div class="widget-content">
                            <div class="widget__icon">
                                <i class="icon-charity2"></i>
                            </div>
                            <h4 class="widget__title">Opening Hours</h4>
                            <ul class="time__list list-unstyled mb-0">
                                <li><span>Monday - Friday</span><span>8.00 - 7:00 pm</span></li>
                                <li><span>Saturday</span><span>9.00 - 10:00 pm</span></li>
                                <li><span>Sunday</span><span>10.00 - 12:00 pm</span></li>
                            </ul>
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-schedule -->
                    <div class="widget widget-reports">
                        <a href="#" class="btn btn__primary btn__block">
                            <i class="icon-pdf-file"></i>
                            <span>2020 Patient Reports</span>
                        </a>
                    </div>
                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->


            <div class="post-item mb-0">
                <div class="post__img">
                    <a href="#">
                        <img src="<?= site_url('assets/uploads/' . $post->img) ?>" alt="post image" loading="lazy">
                    </a>
                </div><!-- /.post-img -->
                <div class="post__body pb-0">
                    <div class="post__meta-cat">
                        <!-- <a href="#">Consulting</a><a href="#">Sales</a> -->
                    </div><!-- /.blog-meta-cat -->

                    <h1 class="post__title mb-30">
                        <?= $post->title ?>
                    </h1>
                    <div class="post__desc">
                        <?= $post->content; ?>
                    </div><!-- /.blog-desc -->
                </div>
            </div><!-- /.post-item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.FAQ -->

<!-- ======================
     Work Process 
    ========================= -->
<section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
    <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
    <div class="container">
        <div class="row heading-layout2">
            <div class="col-12">
                <h2 class="heading__subtitle color-primary">Caring For The Health Of You And Your Family.</h2>
            </div><!-- /.col-12 -->
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                <h3 class="heading__title color-white">We Provide All Aspects Of Medical Practice For Your Whole Family!
                </h3>
            </div><!-- /.col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
                <p class="heading__desc font-weight-bold color-gray mb-40">We will work with you to develop individualised
                    care
                    plans, including
                    management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of
                    practitioner you require. We treat all enquiries sensitively and in the strictest confidence.
                </p>
                <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled">
                    <li>Fractures and dislocations</li>
                    <li>Health Assessments</li>
                    <li>Desensitisation injections</li>
                    <li>High Quality Care</li>
                    <li>Desensitisation injections</li>
                </ul>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="carousel-container mt-90">
                    <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <!-- process item #1 -->
                        <div class="process-item">
                            <span class="process__number">01</span>
                            <div class="process__icon">
                                <i class="icon-health-report"></i>
                            </div><!-- /.process__icon -->
                            <h4 class="process__title">Fill In Our Medical Application</h4>
                            <p class="process__desc">Medcity offers low-cost health coverage for adults with limited income, you
                                can
                                enroll.</p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Doctors??? Timetable</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.process-item -->
                        <!-- process-item #2 -->
                        <div class="process-item">
                            <span class="process__number">02</span>
                            <div class="process__icon">
                                <i class="icon-dna"></i>
                            </div><!-- /.process__icon -->
                            <h4 class="process__title">Review Your Family Medical History</h4>
                            <p class="process__desc">Regular health exams can help find all the problems, also can find it early
                                chances.</p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Start A Check Up</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.process-item -->
                        <!-- process-item #3 -->
                        <div class="process-item">
                            <span class="process__number">03</span>
                            <div class="process__icon">
                                <i class="icon-medicine"></i>
                            </div><!-- /.process__icon -->
                            <h4 class="process__title">Choose Between Our Care Programs</h4>
                            <p class="process__desc">We have protocols to protect our patients while continuing to provide
                                necessary
                                care.</p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Explore Programs</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.process-item -->
                        <!-- process-item #4 -->
                        <div class="process-item">
                            <span class="process__number">04</span>
                            <div class="process__icon">
                                <i class="icon-stethoscope"></i>
                            </div><!-- /.process__icon -->
                            <h4 class="process__title">Introduce You To Highly Qualified Doctors</h4>
                            <p class="process__desc">Our administration and support staff have exceptional skills and trained to
                                assist you. </p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Meet Our Doctors</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.process-item -->
                        <!-- process-item #5 -->
                        <div class="process-item">
                            <span class="process__number">05</span>
                            <div class="process__icon">
                                <i class="icon-head"></i>
                            </div><!-- /.process__icon -->
                            <h4 class="process__title">Your custom Next process</h4>
                            <p class="process__desc">Our administration and support staff have exceptional skills to assist you.
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Meet Our Doctors</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.process-item -->
                    </div><!-- /.carousel -->
                </div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="cta bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-2 col-lg-2">
                    <img src="assets/images/icons/alert.png" alt="alert">
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <h4 class="cta__title">True Healthcare For Your Family!</h4>
                    <p class="cta__desc">Serve the community by improving the quality of life through better health. We have
                        put protocols to protect our patients and staff while continuing to provide medically necessary care.
                    </p>
                </div><!-- /.col-lg-7 -->
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <a href="appointment.html" class="btn btn__secondary btn__secondary-style2 btn__rounded mr-30">
                        <span>Healthcare Programs</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.cta -->
</section><!-- /.Work Process -->

<!-- ========================= 
      Testimonials layout 2
      =========================  -->
<section class="testimonials-layout2 pt-130 pb-40">
    <div class="container">
        <div class="testimonials-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="heading-layout2">
                        <h3 class="heading__title">Inspiring Stories!</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="slider-with-navs">
                        <!-- Testimonial #1 -->
                        <div class="testimonial-item">
                            <h3 class="testimonial__title">???Their doctors include highly qualified practitioners who come from a
                                range of backgrounds and bring with them a diversity of skills and special interests. They also have
                                registered nurses on staff who are available to triage any urgent matters, and the administration
                                and support staff all have exceptional people skills???
                            </h3>
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item">
                            <h3 class="testimonial__title">???Their doctors include highly qualified practitioners who come from a
                                range of backgrounds and bring with them a diversity of skills and special interests. They also have
                                registered nurses on staff who are available to triage any urgent matters, and the administration
                                and support staff all have exceptional people skills???
                            </h3>
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class="testimonial-item">
                            <h3 class="testimonial__title">???Their doctors include highly qualified practitioners who come from a
                                range of backgrounds and bring with them a diversity of skills and special interests. They also have
                                registered nurses on staff who are available to triage any urgent matters, and the administration
                                and support staff all have exceptional people skills???
                            </h3>
                        </div><!-- /. testimonial-item -->
                    </div><!-- /.slick-carousel -->
                    <div class="slider-nav mb-60">
                        <div class="testimonial__meta">
                            <div class="testimonial__thmb">
                                <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div>
                                <h4 class="testimonial__meta-title">Sami Wade</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div>
                        </div><!-- /.testimonial-meta -->
                        <div class="testimonial__meta">
                            <div class="testimonial__thmb">
                                <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div>
                                <h4 class="testimonial__meta-title">Ahmed</h4>
                                <p class="testimonial__meta-desc">Web Inc</p>
                            </div>
                        </div><!-- /.testimonial-meta -->
                        <div class="testimonial__meta">
                            <div class="testimonial__thmb">
                                <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div>
                                <h4 class="testimonial__meta-title">Sonia Blake</h4>
                                <p class="testimonial__meta-desc">Web Inc</p>
                            </div>
                        </div><!-- /.testimonial-meta -->
                    </div><!-- /.slider-nav -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
    </div><!-- /.container -->
</section><!-- /.testimonials layout 2 -->

<!-- ========================
     gallery
    =========================== -->
<section class="gallery pt-0 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                    <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                        <img src="assets/images/gallery/1.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                        <img src="assets/images/gallery/2.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                        <img src="assets/images/gallery/3.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                        <img src="assets/images/gallery/4.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                        <img src="assets/images/gallery/5.jpg" alt="gallery img">
                    </a>
                    <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                        <img src="assets/images/gallery/6.jpg" alt="gallery img">
                    </a>
                </div><!-- /.gallery-images-wrapper -->
            </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.gallery 2 -->