<?php
require("includes/webniam-seo.php");
if (isset($uri_parts[0]) && $uri_parts[0] === 'blog' && isset($uri_parts[1])) {
    require("blog/view.php");
} else {
    $is_home = true;
    $seoArray = [
        "title"       => "Executive Nails Spa West University",
        "description" => "Executive Nails Spa West University is your go-to destination for premium nail care and spa services. Our website offers a user-friendly experience, providing detailed information about our wide range of services, from manicures and pedicures to luxurious spa treatments. With our professional and skilled staff, we ensure top-notch service to enhance your beauty and wellness. Our website also allows easy online booking for your convenience.",
        "keywords"    => "Executive Nails Spa West University, Best Nail Spa in Houston, Manicure and Pedicure, Nail Art Designs, High-Quality Nail Products, Nail Enhancement Services, Nail Spa Packages, Nail Spa Appointments, Long-Lasting Nail Polish",
        "image"       => "https://executivenailsspawestuniversity.com/assets/images/demo-spa-salon-home-12.webp",
    ];
    require('includes/head.php'); ?>

    <body class="overflow-x-hidden" data-mobile-nav-style="classic">
        <?php require('includes/header.php'); ?>
        <main>
            <script src="https://cdn.jsdelivr.net/npm/react-player/dist/ReactPlayer.standalone.js"></script>
            <style>
                #banner-video {
                    height: -webkit-fill-available;
                    position: relative;
                    object-fit: cover;
                    width: 100%;
                }
            </style>

            <section class="p-0 bg-slide">
                <div class="swiper full-screen ipad-top-space-margin md-h-600px sm-h-500px swiper-number-pagination-style-01 base-color"
                    tabindex="0"
                    data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-number&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;autoplay&quot;: { &quot;delay&quot;: 5000, &quot;disableOnInteraction&quot;: false },  &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;fade&quot; }"
                    data-number-pagination="1" role="button">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="position-absolute left-0px top-0px w-100 h-100 cover-background"
                                style="background-image:url('assets/images/demo-spa-salon-slider-0001.webp');" role="banner"
                                fetchpriority="high"
                                aria-label="Nail perfection is our mission, satisfaction is our promise">

                            </div>
                            <div class="opacity-extra-medium bg-gradient-nero-grey-brown"></div>
                            <div class="container h-100">
                                <div class="row align-items-center h-100 justify-content-center">
                                    <div class="col-lg-10 position-relative text-white text-center">
                                        <style>
                                            @media only screen and (max-width: 767px) {
                                                .edit_text_center {
                                                    letter-spacing: 8px !important;
                                                }
                                            }
                                        </style>
                                        <span class="fs-15 d-block mb-15px ls-4px text-uppercase edit_text_center">Executive
                                            Nails & Spa West University</span>
                                        <div class="alt-font fs-60 sm-fs-40 xs-fs-30 mb-40px w-80 lg-w-100 md-w-90 sm-w-100 mx-auto sm-mb-35px anime-text ls-minus-2px"
                                            role="heading" aria-level="2">
                                            Nail perfection is our mission, satisfaction is our promise
                                        </div>
                                        <!--<a href="https://www.zbook.us/#/appt-book/executive3817" aria-label="https://www.zbook.us/#/appt-book/executive3817 website page (opens new tab)"-->
                                        <a href="https://www.zbook.us/#/appt-book/executive3817"
                                            aria-label="https://www.zbook.us/#/appt-book/executive3817 website page (opens new tab)"
                                            target="_blank"
                                            aria-label="https://www.zbook.us/#/appt-book/executive3817 website page (opens new tab)"
                                            class="btn btn-medium fw-500 btn-double-border btn-border-color-transparent-white">
                                            <span>
                                                <span class="btn-double-text" data-text="Book appointment">Book
                                                    appointment</span>
                                            </span>
                                        </a>
                                        <!--<a href="tel:+13463309472"
                               target="_blank"
                               class="btn btn-medium fw-500 btn-double-border btn-border-color-transparent-white">
                                <span>
                                    <span class="btn-double-text" data-text="+1 (346)-330-9472">Call Us to Book: +1 (346)-330-9472</span>
                                </span>
                            </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="position-absolute left-0px top-0px w-100 h-100 cover-background"
                                style="background-image:url('assets/images/demo-spa-salon-slider-01.webp');"
                                fetchpriority="high" role="banner" aria-label="Transforming nails into a fashion statement">
                            </div>
                            <div class="opacity-extra-medium bg-gradient-nero-grey-brown"></div>
                            <div class="container h-100">
                                <div class="row align-items-center h-100 justify-content-center">
                                    <div class="col-lg-10 position-relative text-white text-center">
                                        <span class="fs-15 d-block mb-15px ls-4px text-uppercase edit_text_center">Executive
                                            Nails & Spa West University</span>
                                        <div class="alt-font fs-60 sm-fs-40 xs-fs-30 mb-40px w-80 lg-w-100 md-w-90 sm-w-100 mx-auto sm-mb-35px anime-text ls-minus-2px"
                                            role="heading" aria-level="2">
                                            Transforming nails into a fashion statement
                                        </div>
                                        <!--<a href="https://www.zbook.us/#/appt-book/executive3817" aria-label="https://www.zbook.us/#/appt-book/executive3817 website page (opens new tab)"-->
                                        <a href="https://www.zbook.us/#/appt-book/executive3817"
                                            aria-label="https://www.zbook.us/#/appt-book/executive3817 website page (opens new tab)"
                                            target="_blank"
                                            aria-label="https://www.zbook.us/#/appt-book/executive3817 website page (opens new tab)"
                                            class="btn btn-medium fw-500 btn-double-border btn-border-color-transparent-white">
                                            <span>
                                                <span class="btn-double-text" data-text="Book appointment">Book
                                                    appointment</span>
                                            </span>
                                        </a>
                                        <!--<a href="tel:+13463309472"
                               target="_blank"
                               class="btn btn-medium fw-500 btn-double-border btn-border-color-transparent-white">
                                <span>
                                    <span class="btn-double-text" data-text="+1 (346)-330-9472">Call Us to Book: +1 (346)-330-9472</span>
                                </span>
                            </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="position-absolute left-0px top-0px w-100 h-100 cover-background"
                                style="background-image:url('assets/images/demo-spa-salon-slider-02.webp');"
                                fetchpriority="high" role="banner"
                                aria-label="Experience ultimate pampering, one nail at a time"></div>
                            <div class="opacity-light bg-gradient-nero-grey-brown"></div>
                            <div class="container h-100">
                                <div class="row align-items-center h-100 justify-content-center">
                                    <div class="col-lg-10 position-relative text-white text-center">
                                        <span class="fs-15 d-block mb-15px ls-4px text-uppercase edit_text_center">Executive
                                            Nails & Spa West University</span>
                                        <div class="alt-font fs-60 sm-fs-40 xs-fs-30 mb-40px w-80 lg-w-100 md-w-90 sm-w-100 mx-auto sm-mb-35px anime-text ls-minus-2px"
                                            role="heading" aria-level="3">
                                            Experience ultimate pampering, one nail at a time
                                        </div>
                                        <!--<a href="https://www.zbook.us/#/appt-book/executive3817" aria-label="https://www.zbook.us/#/appt-book/executive3817 (opens new tab)"-->
                                        <a href="https://www.zbook.us/#/appt-book/executive3817"
                                            aria-label="https://www.zbook.us/#/appt-book/executive3817 (opens new tab)"
                                            target="_blank"
                                            class="btn btn-medium fw-500 btn-double-border btn-border-color-transparent-white">
                                            <span>
                                                <span class="btn-double-text" data-text="Book appointment">Book
                                                    appointment</span>
                                            </span>
                                        </a>
                                        <!--<a href="tel:+13463309472"
                               target="_blank"
                               class="btn btn-medium fw-500 btn-double-border btn-border-color-transparent-white">
                                <span>
                                    <span class="btn-double-text" data-text="+1 (346)-330-9472">Call Us to Book: +1 (346)-330-9472</span>
                                </span>
                            </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="swiper-pagination container right-0px text-center swiper-pagination-clickable swiper-number fs-14 xs-w-100">
                    </div>

                    <div
                        class="slider-one-slide-prev-1 icon-very-small text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-light h-55px w-55px d-none d-sm-flex border-radius-100">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div
                        class="slider-one-slide-next-1 icon-very-small text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-light h-55px w-55px d-none d-sm-flex border-radius-100">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </section>





            <section class="background-repeat bg-base-color pt-50px pb-50px">
                <div class="container">
                    <div class="row justify-content-center mb-2">
                        <div
                            class="col-lg-5 text-center appear anime-child anime-complete border-end border-color-light-gray xs-border-end-0">
                            <h1 class="alt-font ls-minus-1px text-yellow w-65 xl-w-80 sm-w-100 mx-auto mb-15px h3" style="">
                                Opening
                                Hours</h1>
                            <div class="divider-style-03 divider-style-03-03 border-color-white mx-auto" style="width: 20%">
                            </div>
                            <div class="mt-3 text-white">
                                <p class="mb-0">Mon - Sat: 9:30AM – 7PM</p>
                                <p>Sun: 10:00AM – 5PM</p>
                            </div>
                            <h2 class="alt-font ls-minus-1px text-yellow w-65 xl-w-80 sm-w-100 mx-auto mb-15px h3" style="">
                                Contact
                                Us</h2>
                            <div class="divider-style-03 divider-style-03-03 border-color-white mx-auto" style="width: 20%">
                            </div>
                            <div class="mt-3 text-white">
                                <p>Call: <a href="tel:+13463309472">+1 (346)-330-9472</a></p>
                                <!--<p>Call: <a href="tel:+1(832)367-0465">+1 (832) 367-0465</a></p>-->
                            </div>
                            <div>
                                <!--<a href="https://www.zbook.us/#/appt-book/executive3817" class="btn btn-very-small btn-double-border btn-border-color-white">-->
                                <a href="https://www.zbook.us/#/appt-book/executive3817"
                                    class="btn btn-very-small btn-double-border btn-border-color-white">
                                    <span>
                                        <span class="btn-double-text" data-text="Book now">Book now</span>
                                    </span>
                                </a>
                                <!--<a href="tel:+13463309472"
                               target="_blank"
                               class="btn btn-medium fw-500 btn-double-border btn-border-color-transparent-white">
                                <span>
                                    <span class="btn-double-text" data-text="+1 (346)-330-9472">Call Us to Book: +1 (346)-330-9472</span>
                                </span>
                            </a>-->
                            </div>
                        </div>
                        <div class="col-lg-7 text-center appear anime-child anime-complete">
                            <h2 class="h3 alt-font ls-minus-1px text-yellow w-65 xl-w-80 sm-w-100 mx-auto mb-15px sm-mt-20px md-mt-20px"
                                style="">
                                Daily specials</h2>
                            <div class="divider-style-03 divider-style-03-03 border-color-white mx-auto" style="width: 20%">
                            </div>
                            <div class="mt-3 text-white">
                                <p class="mb-0">From Monday to Thursday, 10% off main services for:</p>
                                <div class="head-content-daily-special fw-300">
                                    <p class="mb-0">Medical staffs</p>
                                    <p class="mb-0">Students arnd teachers</p>
                                    <p class="mb-0">Seniors</p>
                                    <p class="mb-0">First responders and military</p>

                                </div>
                                <div class="bot-content-daily-special">
                                    <div class="mt-3 text-white">
                                        <p class="mb-0">10% off main services on your birthday</p>
                                    </div>
                                    <div class=" text-white">
                                        <p class="mb-0">Earn cash back reward</p>
                                    </div>
                                    <div class="text-white fw-300 ">
                                        <p class="mb-0"> (Valid id must be present for discount)</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>



            <section class="background-repeat position-relative">
                <div class="position-absolute right-minus-150px top-50 z-index-2 d-none d-lg-inline-block"
                    style="transform: translateY(-30px);">
                    <img src="assets/images/pattern/Pattern-01.png?new" loading="lazy"
                        alt="Executive nails spa website pattern 01 image" data-no-retina="" class="w-25 h-25">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6 md-mb-70px sm-mb-45px">
                            <span class="fs-15 mb-15px fw-500 d-block text-uppercase ls-2px" style="color: #284d2d">
                                <h3 class="alt-font ls-minus-1px text-base-color w-80 xl-w-90 md-w-100">
                                    Our Customer Service</h3>
                                <p class="w-80 md-w-100 mb-40px" style="color:#36332e">
                                    We strive to understand and cater to each client's needs at Executive Nails & Spa West
                                    University.
                                    Our staff begins
                                    with a thorough analysis of your nails, cuticles, and skin to determine the appropriate
                                    care
                                    required. We then suggest the best services and products to achieve your goals while
                                    protecting your
                                    hands and feet. We ensure effective communication with our clients for a splendid
                                    experience. Our
                                    front desk personnel will use this information to select the most suitable technician
                                    for you.
                                </p>
                                <div class="d-inline-block w-100">
                                    <a href="services"
                                        class="btn btn-small btn-double-border btn-border-base-color me-25px xs-me-15px">
                                        <span>
                                            <span class="btn-double-text" data-text="Explore more">Explore more</span>
                                            <span><i class="fa-solid fa-arrow-right" role="presentation"></i></span>
                                        </span>
                                    </a>
                                    <div
                                        class="fw-500 d-inline-block align-middle text-dark-gray fs-18 xs-mt-20px xs-mb-20px">
                                        <a href="tel:3463309472"><i class="bi bi-telephone-outbound icon-small me-10px"
                                                role="presentation"></i>+1 (346)
                                            330-9472</a>
                                    </div>
                                    <!--<a href="tel:+1(832)367-0465"><i class="bi bi-telephone-outbound icon-small me-10px" role="presentation"></i>+1 (832) 367-0465</a></div>-->
                                </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 position-relative offset-lg-1 offset-md-2">
                            <!--<img class="w-100" height="100" src="assets/images/photo_2025-12-05_23-06-56.webp" alt="Executive nails spa website spa salon home 01 image">-->
                            <div class="w-80 overflow-hidden position-relative md-w-90 border-radius-6px float-end">
                                <img class="w-100" height="100" src="assets/images/demo-spa-salon-home-01.webp"
                                    alt="Executive nails spa website spa salon home 01 image">
                            </div>
                            <div
                                class="position-absolute left-minus-70px bottom-minus-30px w-60 overflow-hidden md-left-minus-100px sm-left-15px">
                                <img class="w-100 border-radius-6px" height="100"
                                    src="assets/images/demo-spa-salon-home-02.webp"
                                    alt="Executive nails spa website spa salon home 02 image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <section
                class="mt-40px pt-40px pb-40px background-repeat border-bottom border-color-light-gray text-white bg-base-color">
                <div class="container-fluid ps-9 pe-9 lg-ps-1 lg-pe-1 md-ps-15px md-pe-15px">
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">

                        <div
                            class="col icon-with-text-style-03 border-end border-color-light-gray md-mb-30px xs-border-end-0">
                            <div class="feature-box ps-8 pe-8 xl-ps-2 xl-pe-2">
                                <div class="feature-box-icon">
                                    <img src="assets/images/icon/Professional.svg?new" height="100"
                                        style="width: 60px; margin-bottom: 20px" alt="Professional Stylists">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-inline-block alt-font fs-22" role="heading" aria-level="3">Professional
                                        Stylists</span>
                                    <p class="lh-26">Stay current with luxurious nail</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col icon-with-text-style-03 border-end border-color-light-gray md-mb-30px md-border-end-0">
                            <div class="feature-box ps-8 pe-8 xl-ps-2 xl-pe-2">
                                <div class="feature-box-icon">
                                    <img src="assets/images/icon/Luxury.svg?new" style="width: 60px; margin-bottom: 20px"
                                        height="100" alt="Luxury Nail Treatments">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-inline-block alt-font fs-22" role="heading" aria-level="3">Luxury Nail
                                        Treatments</span>
                                    <p class="lh-26">Crafted with top-notch ingredients</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col icon-with-text-style-03 border-end border-color-light-gray xs-border-end-0 xs-mb-30px">
                            <div class="feature-box ps-8 pe-8 xl-ps-2 xl-pe-2">
                                <div class="feature-box-icon">
                                    <img src="assets/images/icon/Eco.svg?new" style="width: 60px; margin-bottom: 20px"
                                        height="100" alt="Eco-Friendly Products">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-inline-block alt-font fs-22" role="heading" aria-level="3">Eco-Friendly
                                        Products</span>
                                    <p class="lh-26">Use safe nail products</p>
                                </div>
                            </div>
                        </div>

                        <div class="col icon-with-text-style-03">
                            <div class="feature-box ps-8 pe-8 xl-ps-2 xl-pe-2">
                                <div class="feature-box-icon">
                                    <img src="assets/images/icon/Affordable.svg?new"
                                        style="width: 60px; margin-bottom: 20px" height="100" alt="Affordable price">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-inline-block alt-font fs-22" role="heading" aria-level="3">Affordable
                                        price</span>
                                    <p class="lh-26">Suitable for different individual budgets.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>




            <section class="background-repeat border-color-light-gray position-relative overlap-height z-index-1">
                <div
                    class="position-absolute left-minus-20px top-20px z-index-minus-1 d-none d-lg-inline-block skrollable skrollable-between">
                    <img src="assets/images/pattern/Pattern-02.webp?new" loading="lazy"
                        alt="Executive nails spac website pattern 02 image" data-no-retina="" class="h-75 w-75">
                </div>
                <div class="container overlap-gap-section">
                    <div class="row justify-content-center mb-2">
                        <div class="col-lg-6 col-md-8 text-center">

                            <span class="fs-15 mb-5px  fw-500 d-block text-uppercase ls-2px" style="color:#284d2d">Luxury
                                services</span>
                            <h3 class="alt-font ls-minus-1px text-base-color w-65 xl-w-80 sm-w-100 mx-auto">Explore our
                                services</h3>
                        </div>
                    </div>
                    <div class="row mb-5 xs-mb-15px">
                        <div class="col-12 position-relative">
                            <div class="outside-box-right-40 sm-outside-box-right-0">
                                <div class="swiper magic-cursor drag-cursor"
                                    data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: false },  &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-three-slide-pagination&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 }, &quot;320&quot;: { &quot;slidesPerView&quot;: 1 } }, &quot;effect&quot;: &quot;slide&quot; }">
                                    <div class="swiper-wrapper pt-20px pb-20px">

                                        <div class="swiper-slide">
                                            <div
                                                class="row g-0 services-box-style-02 border-radius-6px overflow-hidden hover-box dark-hover">
                                                <div class="col-sm-6 position-relative bg-very-light-gray p-5">
                                                    <div
                                                        class="services-box-icon mb-65px position-relative z-index-9 lg-mb-30px">
                                                        <img class="w-75px lg-w-65px" height="100"
                                                            src="assets/images/icon/manicure.svg?new" loading="lazy"
                                                            alt="Executive nails spa manicure svg image">
                                                    </div>
                                                    <div
                                                        class="services-box-content last-paragraph-no-margin position-relative z-index-9">
                                                        <span class="d-inline-block alt-font fs-24 mb-5px"
                                                            style="color:#284d2d" role="heading"
                                                            aria-level="4">MANICURE</span>
                                                        <p class="lh-30" style="color: #36332e">Manicure services enhance
                                                            the beauty of
                                                            your nails.</p>
                                                    </div>
                                                    <div class="box-overlay bg-dark-gray"></div>
                                                </div>
                                                <div class="col-sm-6 services-box-img overflow-hidden">
                                                    <div class="h-100 cover-background position-relative xs-h-300px"
                                                        role="img" loading="lazy"
                                                        style="background-image: url(assets/images/Mani.webp)">
                                                        <span
                                                            class="position-absolute left-minus-30px bottom-50px fs-100 lg-fs-80 xs-fs-90 fw-600 text-very-light-gray xl-bottom-25px md-left-minus-20px">01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div
                                                class="row g-0 services-box-style-02 border-radius-6px overflow-hidden hover-box dark-hover">
                                                <div class="col-sm-6 position-relative bg-very-light-gray p-5">
                                                    <div
                                                        class="services-box-icon mb-65px position-relative z-index-9 lg-mb-30px">
                                                        <img class="w-75px lg-w-65px" height="100"
                                                            src="assets/images/icon/nail-polish.svg?new"
                                                            alt="Executive nails spa website nail polish image">
                                                    </div>
                                                    <div
                                                        class="services-box-content last-paragraph-no-margin position-relative z-index-9">
                                                        <span class="d-inline-block alt-font fs-24 mb-5px"
                                                            style="color:#284d2d">NAIL SERVICES</span>
                                                        <p class=" lh-30" style="color: #36332e">Professional nail service
                                                            ensures
                                                            beautiful nails.</p>
                                                    </div>
                                                    <div class="box-overlay bg-dark-gray"></div>
                                                </div>
                                                <div class="col-sm-6 services-box-img">
                                                    <div class="h-100 cover-background position-relative xs-h-300px"
                                                        role="img" loading="lazy"
                                                        style="background-image: url(assets/images/Nail.webp)">
                                                        <span
                                                            class="position-absolute left-minus-30px bottom-50px fs-100 lg-fs-80 xs-fs-90 fw-600 text-very-light-gray xl-bottom-25px md-left-minus-20px">02</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div
                                                class="row g-0 services-box-style-02 border-radius-6px overflow-hidden hover-box dark-hover">
                                                <div class="col-sm-6 position-relative bg-very-light-gray p-5">
                                                    <div
                                                        class="services-box-icon mb-65px position-relative z-index-9 lg-mb-30px">
                                                        <img class="w-75px lg-w-65px" height="100"
                                                            src="assets/images/icon/kid.svg?new" loading="lazy"
                                                            alt="Executive nails spa website kid image">
                                                    </div>
                                                    <div
                                                        class="services-box-content last-paragraph-no-margin position-relative z-index-9">
                                                        <span class="d-inline-block alt-font  fs-24 mb-5px"
                                                            style="color:#284d2d" role="heading" aria-level="5">KID
                                                            SPA</span>
                                                        <p class=" lh-30" style="color: #36332e">Kid spa offers fun,
                                                            relaxing treatments for children.</p>
                                                    </div>
                                                    <div class="box-overlay bg-dark-gray"></div>
                                                </div>
                                                <div class="col-sm-6 services-box-img">
                                                    <div class="h-100 cover-background position-relative xs-h-300px"
                                                        role="img" loading="lazy"
                                                        style="background-image: url(assets/images/Kid.jpg)">
                                                        <span
                                                            class="position-absolute left-minus-30px bottom-50px fs-100 lg-fs-80 xs-fs-90 fw-600 text-very-light-gray xl-bottom-25px md-left-minus-20px">03</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div
                                                class="row g-0 services-box-style-02 border-radius-6px overflow-hidden hover-box dark-hover">
                                                <div class="col-sm-6 position-relative bg-very-light-gray p-5">
                                                    <div
                                                        class="services-box-icon mb-65px position-relative z-index-9 lg-mb-30px">
                                                        <img class="w-75px lg-w-65px" height="100"
                                                            src="assets/images/icon/waxing.svg?new" loading="lazy"
                                                            alt="Executive nails spa website waxing svg image">
                                                    </div>
                                                    <div
                                                        class="services-box-content last-paragraph-no-margin position-relative z-index-9">
                                                        <span class="d-inline-block alt-font  fs-24 mb-5px"
                                                            style="color:#284d2d" role="heading"
                                                            aria-level="5">WAXING</span>
                                                        <p class=" lh-30" style="color:#284d2d">Professional waxing service
                                                            for smooth,
                                                            hair-free skin.</p>
                                                    </div>
                                                    <div class="box-overlay bg-dark-gray"></div>
                                                </div>
                                                <div class="col-sm-6 services-box-img overflow-hidden">
                                                    <div class="h-100 cover-background position-relative xs-h-300px"
                                                        role="img" loading="lazy"
                                                        style="background-image: url(assets/images/Wax.webp)">
                                                        <span
                                                            class="position-absolute left-minus-30px bottom-50px fs-100 lg-fs-80 xs-fs-90 fw-600 text-very-light-gray xl-bottom-25px md-left-minus-20px">04</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div
                                                class="row g-0 services-box-style-02 border-radius-6px overflow-hidden hover-box dark-hover">
                                                <div class="col-sm-6 position-relative bg-very-light-gray p-5">
                                                    <div
                                                        class="services-box-icon mb-65px position-relative z-index-9 lg-mb-30px">
                                                        <img class="w-75px lg-w-65px" height="100"
                                                            src="assets/images/icon/pedicure.svg?new" loading="lazy"
                                                            alt="Executive nails spa website predicure svg image">
                                                    </div>
                                                    <div
                                                        class="services-box-content last-paragraph-no-margin position-relative z-index-9">
                                                        <span class="d-inline-block alt-font  fs-24 mb-5px"
                                                            style="color:#284d2d" role="heading"
                                                            aria-level="6">PEDICURE</span>
                                                        <p class="lh-30" style="color:#284d2d">Relaxing and professional
                                                            pedicure
                                                            service.</p>
                                                    </div>
                                                    <div class="box-overlay bg-dark-gray"></div>
                                                </div>
                                                <div class="col-sm-6 services-box-img">
                                                    <div class="h-100 cover-background position-relative xs-h-300px"
                                                        role="img" loading="lazy"
                                                        style="background-image: url(assets/images/Pedi.webp)">
                                                        <span
                                                            class="position-absolute left-minus-30px bottom-50px fs-100 lg-fs-80 xs-fs-90 fw-600 text-very-light-gray xl-bottom-25px md-left-minus-20px">05</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3 class="alt-font text-dark-gray h5">Ready to embrace the beauty of your nails? <a
                                    href="pages/menu"
                                    class="text-base-color text-yellow-hover text-decoration-line-bottom">Explore our
                                    package</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </section>




            <section
                class="background-repeat border-top border-color-base-color position-relative overlap-height z-index-1 bg-base-color">

                <div class="position-absolute right-minus-140px bottom-0px z-index-2 d-none d-lg-inline-block skrollable skrollable-between"">
        <img src=" assets/images/pattern/Pattern-03.png?new" alt="Executive nails spa pattern 03 image" loading="lazy"
                    data-no-retina="" style="width:100%;max-width:40%; height:auto">
                </div>
                <div class="container overlap-gap-section">
                    <div class="row align-items-center position-relative justify-content-center justify-content-lg-start">
                        <div class="position-absolute left-0px top-0px h-100 w-130px d-none d-lg-inline-block">
                            <div class="vertical-title-center align-items-center justify-content-center">
                                <div class="title fs-16 ls-2px text-uppercase text-white">
                                    Polish <span class="fw-600">your look,</span>
                                    Perfect <span class="fw-600">your style</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-11 position-relative offset-lg-1 md-mb-35px">
                            <!--<img src="assets/images/demo-spa-salon-home-12.webp" class="w-100 border-radius-4px" height="100" width="100" loading="lazy" alt="Executive nails spa demo spa salong home 12 image">-->

                            <div class="swiper slider-custom-text"
                                data-slider-options="{ &quot;loop&quot;: true, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;autoplay&quot;: { &quot;delay&quot;: 10000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav-coco&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav-coco&quot;, &quot;effect&quot;: &quot;fade&quot; } }">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide text-center">
                                        <script type="text/javascript">
                                            document.addEventListener("DOMContentLoaded", (event) => {
                                                const container = document.getElementById('banner-video')
                                                const url =
                                                    'https://video.gumlet.io/6798f6b5f899e36676839471/68e874e94d658cce80624093/main.m3u8'
                                                renderReactPlayer(container, {
                                                    url,
                                                    control: false,
                                                    loop: true,
                                                    muted: true,
                                                    playing: true,
                                                    width: "100%",
                                                    height: "100%"
                                                })
                                            });
                                        </script>
                                        <div id="banner-video"></div>
                                    </div>

                                    <div class="swiper-slide text-center"
                                        style="display: flex;height: auto;object-fit: cover;">
                                        <img src="assets/images/coco.webp" style="object-fit:contain;"
                                            class="w-100 border-radius-4px" height="100" width="100" loading="lazy"
                                            alt="Executive nails spa demo spa salong home 12 image">
                                    </div>

                                    <div class="swiper-slide text-center"
                                        style="display: flex;height: auto;object-fit: cover;">
                                        <img src="assets/images/coco2.webp" style="object-fit:contain;"
                                            class="w-100 border-radius-4px" height="100" width="100" loading="lazy"
                                            alt="Executive nails spa demo spa salong home 12 image">
                                    </div>

                                </div>
                            </div>

                            <div
                                class="swiper-button-previous-nav-coco slider-one-slide-prev-1 icon-very-small text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-light h-55px w-55px d-sm-flex border-radius-100">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div
                                class="swiper-button-next-nav-coco slider-one-slide-next-1 icon-very-small text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-light h-55px w-55px d-sm-flex border-radius-100">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-11 ps-8 md-ps-15px" <span
                            class="fs-15 lg-10px mb-5px fw-500 d-block text-uppercase ls-2px"
                            style="color:white !important">Benefits of Nail Service</span>
                            <h3 class="alt-font ls-minus-1px text-white">Transforming Nails into Masterpieces.</h3>
                            <p class="w-80 xl-w-90 md-w-100 mb-10px text-white">We provide everything you need for flawless
                                nails,
                                from manicures and pedicures to intricate nail art. Our team of skilled technicians ensures
                                that you
                                leave our salon with the perfect nails you've always dreamed of, making us your ultimate
                                one-stop
                                shop for nail perfection.</p>
                            <ul class="p-0 list-style-01 fs-20 alt-font mb-25px">
                                <li class="border-color-light-gray pt-15px pb-15px text-white">Save your Time</li>
                                <li class="border-color-light-gray pt-15px pb-15px text-white">Boost your confidence</li>
                                <li class="border-color-light-gray pt-15px pb-15px text-white">A relaxing experience</li>
                            </ul>
                            <div class="d-inline-block w-100">
                                <a href="services" class="btn btn-small btn-double-border btn-border-color-white">
                                    <span>
                                        <span class="btn-double-text" data-text="Our Services">Our Services</span>
                                        <span><i class="fa-solid fa-arrow-right" role="presentation"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="background-repeat p-0"
                style="background: linear-gradient(to bottom, var(--base-color) 50%, #fff 50%);">
                <div class="container-fluid p-0">
                    <div class="row align-items-center g-0 justify-content-center">
                        <div class="col d-flex flex-column">
                            <div class="divider-style-03 divider-style-03-01 border-color-light-gray"></div>
                        </div>
                        <div class="col-5 col-lg-2 col-sm-3 text-center position-relative"
                            style="background-color: #ffffff; border-radius: 70%; padding: 15px">
                            <img src="assets/images/demo-spa-salon-home-13.png?new" class="" loading="lazy"
                                alt="Executive nails spa demo spa salon home 13 image" style="width: 100%" height="100">
                            <div class="absolute-middle-center lg-w-65 sm-w-50"><img
                                    src="assets/images/demo-spa-salon-home-14.png?new" height="100" width="100"
                                    loading="lazy" alt="Executive nails spa website spa salon home 14 image">
                            </div>
                        </div>
                        <div class="col">
                            <div class="divider-style-03 divider-style-03-01 border-color-light-gray"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="background-repeat overlap-height position-relative pt-4 md-pt-8 pb-60px">
                <div class="container overlap-gap-section">
                    <div class="row justify-content-center md-mb-2 xs-mb-40px">
                        <div
                            class="col-xl-10 testimonials-style-11 position-relative ps-15 pe-15 sm-ps-15px sm-pe-15px text-center">
                            <div class="swiper slider-custom-text"
                                data-slider-options="{ &quot;loop&quot;: true, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot;, &quot;effect&quot;: &quot;fade&quot; } }">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide text-center">
                                        <h3 class="alt-font lh-30 text-dark-gray mb-20px fs-20 h6">I’ve been in three
                                            separate
                                            occasions now, each time I’ve had a different person design my nails, the staff
                                            is very
                                            nice and patient. The first time I went in was for the Christmas red nails and
                                            the lady
                                            put the coat on really thick which I didn’t like but the design was nice. She
                                            also put
                                            on acrylics which I didn’t want because I use my hands a lot with work. The
                                            second time
                                            I was in was for blue nails with the smiley face stickers with Jeni, which I
                                            absolutely
                                            loved. The third time was for my Valentine’s Day nails, pink with a red heart,
                                            another
                                            favorite with Henry. Definitely has become my regular nail salon. I highly
                                            recommend
                                            seeing Jeni or Henry!</h3>
                                        <span
                                            class="fs-15 text-base-color fw-500 d-block text-uppercase ls-2px">Dakoda</span>
                                        <span class="fs-14 lh-20 text-dark-gray fw-500 text-uppercase d-block ls-05px">Relax
                                            massage</span>
                                    </div>


                                    <div class="swiper-slide text-center">
                                        <h4 class="alt-font lh-30 text-dark-gray mb-20px fs-20 h6">Executive is wonderful!
                                            I’ve never
                                            really been particular about what nail salon I visit and would bounce around to
                                            different ones. But I’ve been happy with my experience here at executive every
                                            time that
                                            I’ve finally found my go to nail salon.
                                            Their color selection and design knowledge are great. Ly has done my nails the
                                            last two
                                            times and they always turn out amazing. She’s so sweet and I can’t wait for my
                                            next
                                            appointment with her!</h4>
                                        <span
                                            class="fs-15 text-base-color fw-500 d-block text-uppercase ls-2px">Jenny</span>
                                        <span class="fs-14 lh-20 text-dark-gray fw-500 text-uppercase d-block ls-05px">Relax
                                            massage</span>
                                    </div>


                                    <div class="swiper-slide text-center">
                                        <h5 class="alt-font lh-30 text-dark-gray mb-20px fs-20 h6">The ladies did a great
                                            job on my
                                            hands and my feet. I love the colors. They lasted for a very long time,
                                            especially
                                            throughout my vacation in Mexico. I was very surprised at how well the colors
                                            stayed. It
                                            took less than 20 minutes for the paint to dry enough for me to put my shoes
                                            back on, as
                                            I did not plan ahead and bring flip-flops. I messed up one toe on the opposite
                                            foot, but
                                            it wasn't too bad.
                                            Like I said, the ladies did a great job. The manicure was immaculately done
                                            under the
                                            nail polish. Once the polish was removed, I noticed how lovely my cuticles and
                                            nails
                                            looked. So, I do recommend this place and plan to go back very soon.</h5>
                                        <span class="fs-15 text-base-color fw-500 d-block text-uppercase ls-2px">Rosemary
                                            downing</span>
                                        <span class="fs-14 lh-20 text-dark-gray fw-500 text-uppercase d-block ls-05px">Scalp
                                            massage</span>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="swiper-button-previous-nav swiper-button-prev slider-custom-text-prev fs-14 text-uppercase text-dark-gray fw-500 ls-1px">
                                prev
                            </div>
                            <div
                                class="swiper-button-next-nav swiper-button-next  slider-custom-text-next fs-14 text-uppercase text-dark-gray fw-500 ls-1px">
                                next
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require('includes/footer.php'); ?>
    <?php } ?>