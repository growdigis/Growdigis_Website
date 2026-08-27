<!--====== Home ======-->
<style>
    /* ================================
       HERO SECTION
    ================================= */

    .header-hero {
        position: relative;
        overflow: hidden;
        min-height: 580px;
        padding: 70px 0;
    }

    .header-hero-content {
        position: relative;
        z-index: 5;
        max-width: 800px;
        padding-top: 10px;
        margin-left: 40px;
        text-align: left;
    }

    /* Main heading */
    .header-hero-content .hero-title {
        margin: 0 0 16px;
        padding: 0;

        color: #050505;
        font-family: "Poppins", Arial, sans-serif;

        font-size: 52px;
        font-weight: 800;
        line-height: 1.12;
        letter-spacing: -1.5px;

        text-align: left;
    }

    /* Blue tagline */
    .header-hero-content .hero-subTitle {
        display: block;

        margin: 0 0 10px;
        padding: 0;

        color: #2693e6;
        font-family: "Poppins", Arial, sans-serif;

        font-size: 32px;
        font-weight: 500;
        line-height: 1.25;
        letter-spacing: -0.5px;

        text-align: left;
    }

    /* Description */
    .header-hero-content .hero-description {
        display: block;

        max-width: 590px;
        margin: 0;
        padding: 0;

        color: #111111;
        font-family: "Poppins", Arial, sans-serif;

        font-size: 26px;
        font-weight: 400;
        line-height: 1.48;
        letter-spacing: -0.3px;

        text-align: left;
    }

    /* Hero image */
    .header-hero-image {
        position: relative;
        z-index: 2;
    }

    .header-hero-image .image img {
        display: block;
        max-width: 100%;
        height: auto;
    }


    /* ================================
       DESKTOP
    ================================= */

    @media (min-width: 1200px) {

        .header-hero {
            min-height: 580px;
        }

        .header-hero-content {
            max-width: 650px;
        }

        .header-hero-content .hero-title {
            font-size: 52px;
        }

        .header-hero-content .hero-subTitle {
            font-size: 32px;
        }

        .header-hero-content .hero-description {
            font-size: 26px;
        }
    }


    /* ================================
       LAPTOP
    ================================= */

    @media (min-width: 992px) and (max-width: 1199px) {

        .header-hero-content {
            max-width: 570px;
        }

        .header-hero-content .hero-title {
            font-size: 44px;
            letter-spacing: -1px;
        }

        .header-hero-content .hero-subTitle {
            font-size: 28px;
        }

        .header-hero-content .hero-description {
            font-size: 22px;
            max-width: 510px;
        }
    }


    /* ================================
       TABLET / MOBILE
    ================================= */

    @media (max-width: 991px) {

        .header-hero {
            min-height: auto;
            padding: 70px 0 50px;
        }

        .header-hero-content {
            max-width: 100%;
            padding: 0 20px;
            margin-left: 0;
            text-align: center;
        }

        .header-hero-content .hero-title {
            font-size: 40px;
            line-height: 1.15;
            letter-spacing: -0.8px;
            text-align: center;
        }

        .header-hero-content .hero-subTitle {
            font-size: 27px;
            text-align: center;
        }

        .header-hero-content .hero-description {
            max-width: 600px;
            margin: 0 auto;
            font-size: 21px;
            line-height: 1.5;
            text-align: center;
        }

        .header-hero-image {
            justify-content: center;
            margin-top: 40px;
        }
    }


    /* ================================
       SMALL MOBILE
    ================================= */

    @media (max-width: 575px) {

        .header-hero {
            padding: 55px 0 40px;
        }

        .header-hero-content {
            padding: 0 15px;
        }

        .header-hero-content .hero-title {
            font-size: 31px;
            line-height: 1.17;
            letter-spacing: -0.5px;
        }

        .header-hero-content .hero-subTitle {
            font-size: 22px;
            line-height: 1.3;
        }

        .header-hero-content .hero-description {
            font-size: 18px;
            line-height: 1.5;
        }
    }
</style>

<div class="header-hero bg_cover d-lg-flex align-items-center"
    style="background-image: url(assets/images/background.png)">

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-hero-content">

                    <h1 class="hero-title wow fadeInUp"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        Your Brand Is The Feeling<br>
                        People Remember
                    </h1>

                    <div class="hero-subTitle wow fadeInUp"
                        data-wow-duration="1s"
                        data-wow-delay="0.4s">
                        Let’s make it happen.
                    </div>

                    <p class="hero-description wow fadeInUp"
                        data-wow-duration="1s"
                        data-wow-delay="0.6s">
                        We build scroll-stopping content and social strategies
                        for brands that want to grow.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="header-hero-image d-flex align-items-center wow fadeInRightBig"
        data-wow-duration="1s"
        data-wow-delay="1.1s">

        <div class="image">
            <img src="assets/images/hero-image.png" alt="Hero Image">
        </div>

    </div>

</div>


<!--====== Brand ======-->
<?php include __DIR__ . '/brand.php'; ?>

<!--====== About ======-->
<section class="about-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 class="welcome">WELCOME</h6>
                    <h3 class="title">One-Stop Agency For<span>&nbsp;All Your Business Needs</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="assets/images/about.png" alt="about">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="about-content pt-45">
                    <p class="text-center text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"> 
                        <b>While the new normal is still taking shape, innovation has the power to make the future even better than the past.</b>
                    </p>

                    <div class="about-counter pt-60">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">125</span></span>
                                        <p class="text">Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">95</span>%</span>
                                        <p class="text">Satisfaction</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">300</span>+</span>
                                        <p class="text">Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Service ======-->
<section class="service-area pt-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h6 class="sub-title">What we do</h6>
                    <h4 class="title">GrowDigis is an expert media, design <span>and digital marketing agency.</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="service-wrapper mt-60 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single-service d-flex">
                        <div class="service-icon">
                            <img src="assets/images/service-3.png" alt="Icon">
                        </div>
                        <div class="service-content media-body">
                            <h4 class="service-title">Social Media</h4>
                            <p class="text">Strategy, management & growth</p>
                        </div>
                        <div class="shape shape-1">
                            <img src="assets/images/shape/shape-1.svg" alt="shape">
                        </div>
                        <div class="shape shape-2">
                            <img src="assets/images/shape/shape-2.svg" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-service service-border d-flex">
                        <div class="service-icon">
                            <img src="assets/images/service-2.png" alt="Icon">
                        </div>
                        <div class="service-content media-body">
                            <h4 class="service-title">Branding</h4>
                            <p class="text">Visual identity & Social Presence</p>
                        </div>
                        <div class="shape shape-3">
                            <img src="assets/images/shape/shape-3.svg" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-service d-flex">
                        <div class="service-icon">
                            <img src="assets/images/service-1.png" alt="Icon">
                        </div>
                        <div class="service-content media-body">
                            <h4 class="service-title">Content Creation</h4>
                            <p class="text">Engaging stories that resonate with your audience</p>
                        </div>
                        <div class="shape shape-4">
                            <img src="assets/images/shape/shape-4.svg" alt="shape">
                        </div>
                        <div class="shape shape-5">
                            <img src="assets/images/shape/shape-5.svg" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-btn text-center pt-25 pb-15">
                        <a class="main-btn main-btn-2" href="services"target="_blank">All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Gallery ======-->
<section class="gallery-area pt-115">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-sm-8">
                <div class="section-title pb-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <h6 class="sub-title">PROJECT</h6>
                    <h4 class="title">Made to be noticed.</h4>
                    <p>See what we’ve been creating. </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="gallery-btn pb-30 text-sm-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                    <a class="main-btn" href="gallery">View Gallery</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="gallery">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="single-gallery mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="gallery-image">
                        <img src="assets/images/Logo_Mockup.jpg" alt="gallery">
                    </div>
                    <div class="gallery-icon gallery-logo exe1">
                        <a class="image-popup" href="assets/images/Hanging_T-Shirt_Mockup.jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/iphone-12-pro-mockup.jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/laptop_2.jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/MacBook_Pro_Workspace_PSD_Mockup.jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/mug.jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/paper-bag-mockup-1.jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/Wall_Logo_Mockup.jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/cards.jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/Book_with_Pen_Mockup.jpg">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="single-gallery mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="gallery-image">
                        <img src="assets/images/dhk_modular_updated3.png" alt="gallery">
                    </div>
                    <div class="gallery-icon gallery-poster">
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(2).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(3).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(4).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(5).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(6).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(7).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(8).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(9).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(10).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(12).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(13).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(14).jpg">
                            <span></span>
                        </a>
                        <a class="image-popup" href="assets/images/dhk_modular_updated2_(15).jpg">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Our Services ======-->
<section class="our-services-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-9">
                <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h6 class="sub-title">Our services</h6>
                    <h4 class="title">Why fit in <span>when you can stand out?</span></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="our-services-tab pt-30">
                    <ul class="nav justify-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s"
                        id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="email-tab" data-toggle="tab" href="#email" role="tab"
                                aria-controls="email" aria-selected="true">
                                <img src="assets/images/Social_Media_Marketing.gif" alt="service"><span>Social
                                    Media<br> Marketing</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social"
                                aria-selected="false">
                                <img src="assets/images/Search_Engine_Optimisation.gif" alt="service"> <span>Search
                                    Engine<br> Optimisation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video"
                                aria-selected="false">
                                <img src="assets/images/UI_&_UX_Designing.gif" alt="service"> <span>UI & UX
                                    <br>Designing</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market"
                                aria-selected="false">
                                <img src="assets/images/Video_Creation.gif" alt="service"><span>Video
                                    <br>Creation</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="email" role="tabpanel" aria-labelledby="email-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="our-services-image mt-50 wow fadeInUpBig" data-wow-duration="1s"
                                        data-wow-delay="0.2s">
                                        <img src="assets/images/Social-Medis-Marketing.png" alt="service">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-services-content mt-45 wow fadeInUpBig" data-wow-duration="1s"
                                        data-wow-delay="0.5s">
                                        <h3 class="services-title">Leveling up your <span>Social Media
                                                Marketing.</span></h3>
                                        <p class="text">We help grow and engage your audiences against digital
                                            noise. <br>
                                            <br> Our targeted storytelling identifies where your audiences
                                            congregate online and delivers your messages there. This approach
                                            creates opportunities for your brand to connect, converse, and
                                            collaborate.
                                        </p>
                                        <div class="our-services-progress d-flex align-items-center mt-55">
                                            <div class="circle" id="circles-1"></div>
                                            <div class="progress-content">
                                                <h4 class="progress-title">Leads Generated From<br> Social Media
                                                    Marketing.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="our-services-image mt-50 wow fadeInUpBig" data-wow-duration="1s"
                                        data-wow-delay="0.2s">
                                        <img src="assets/images/SEO.png" alt="service">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-services-content mt-45 wow fadeInUpBig" data-wow-duration="1s"
                                        data-wow-delay="0.5s">
                                        <h3 class="services-title">Make the world a <span>techier experience.</span>
                                        </h3>
                                        <p class="text">GrowDigis have expert team members who specialise in each of
                                            these essential areas. <br> <br> We create websites that rank well in
                                            the Search Engine Results Pages
                                            (SERPs) and drive traffic to your website; resulting in genuine, engaged
                                            customers and increased sales.
                                        </p>
                                        <div class="our-services-progress d-flex align-items-center mt-55">
                                            <div class="circle" id="circles-2"></div>
                                            <div class="progress-content">
                                                <h4 class="progress-title">Leads Generated From<br> Search Engine
                                                    Optimization.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="our-services-image mt-50 wow fadeInUpBig" data-wow-duration="1s"
                                        data-wow-delay="0.2s">
                                        <img src="assets/images/UI-and-UX-Designing.png" alt="service">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-services-content mt-45 wow fadeInUpBig" data-wow-duration="1s"
                                        data-wow-delay="0.5s">
                                        <h3 class="services-title">We create digitally
                                            <span>beautiful interactions.</span>
                                        </h3>
                                        <p class="text">Design is not just what it looks like and feels like.
                                            Design is how it works.<br> <br> We create user-friendly interfaces that
                                            enable users to understand how to use complex technical products.
                                        </p>
                                        <div class="our-services-progress d-flex align-items-center mt-55">
                                            <div class="circle" id="circles-3"></div>
                                            <div class="progress-content">
                                                <h4 class="progress-title">Of The Time Better UI & UX Makes <br> A
                                                    Positive Impact On Users.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="our-services-image mt-50 wow fadeInUpBig" data-wow-duration="1s"
                                        data-wow-delay="0.2s">
                                        <img src="assets/images/Video-Creation.png" alt="service">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-services-content mt-45 wow fadeInUpBig" data-wow-duration="1s"
                                        data-wow-delay="0.5s">
                                        <h3 class="services-title">You are different.
                                            <span>So is your story. We tell it.</span>
                                        </h3>
                                        <p class="text">It is a known fact that people engage more when
                                            they watch a video.<br> <br> The amount of information contained in one
                                            single frame can take three pages to describe. The Feeling, the colors
                                            and the
                                            message is seen immediately.
                                        </p>
                                        <div class="our-services-progress d-flex align-items-center mt-55">
                                            <div class="circle" id="circles-4"></div>
                                            <div class="progress-content">
                                                <h4 class="progress-title">Of The Time People Remember<br> What They
                                                    See Visually.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Pricing ======-->
<!--<?php include './section/pricing'; ?> -->

<!--====== Testimonals ======-->
<section class="testimonial-area  pb-120">
    <div class="container" id="review">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="testimonial-left-content mt-45 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="section-title">
                        <h6 class="sub-title">Testimonials</h6>
                        <h4 class="title">What Client Says, About Us</h4>
                    </div>
                    <ul class="testimonial-line">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p class="text">Don’t take our word for it... take theirs. A single genuine review from a happy customer can instantly reach and influence millions. We are deeply grateful for the powerful stories our community shares about us every day.<br> <br></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-right-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="quota">
                        <i class="lni-quotation"></i>
                    </div>
                    <div class="testimonial-content-wrapper testimonial-active">
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">"GrowDigis has truly transformed our online presence. Their web development services are exceptional,
                                     delivering a visually stunning and seamless website that captivates our audience. Highly recommended!" </p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="assets/images/DHK_70x70.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name"> Kuldeep Bafna</h5>
                                        <span class="sub-title">CEO of DHK Modular</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                    </ul>
                                    <span class="review">( 4 Reviews )</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">"GrowDigis is a game-changer in digital marketing.
                                    Their strategic approach and creative campaigns have propelled our growth. Highly recommended!"</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="assets/images/Athira_70x70.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">Ronit Nandeshwar</h5>
                                        <span class="sub-title">CEO of Athira Healthcare</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                    </ul>
                                    <span class="review">( 4 Reviews )</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">"GrowDigis is our go-to for captivating design. Their talent and understanding of our 
                                    brand have resulted in stunning visuals.
                                     Highly recommended!" </p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="assets/images/Florence_70x70.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">Harshad Bafna</h5>
                                        <span class="sub-title"> CEO of Florence</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                    </ul>
                                    <span class="review">( 4 Reviews )</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">"GrowDigis exceeded our expectations in software development.
                                     Their skilled team delivered a robust application. Highly recommended!"</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="assets/images/Terzi_70x70.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name"> Selvi Venkatesan</h5>
                                        <span class="sub-title"> CFO of Terzishop</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                    </ul>
                                    <span class="review">( 4 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Poppins Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">