<?php
$seoArray = [
    "title"       => "Blogs - Executive Nails Spa",
    "description" => "Stay updated with the latest nail care tips, trends, and information on the Executive Nails Spa blog. Explore articles on manicures, pedicures, nail extensions, and more.",
    "keywords"    => "nail care blog, Executive Nails Spa blogs, nail care tips, nail trends, manicure tips, pedicure advice, nail extensions, nail art ideas, Houston nail salon blog, beauty tips",
    "image"       => "https://executivenailsspawestuniversity.com/assets/images/demo-spa-salon-about-img-04.jpg",
];

require('../includes/head.php');
$blogs = json_decode(file_get_contents('blog.json'), true);


?>


<body class="overflow-x-hidden" data-mobile-nav-style="classic">
    <?php require('../includes/header.php'); ?>
<main>
    <section class="page-title-parallax-background bg-dark-gray ipad-top-space-margin position-relative" data-parallax-background-ratio="0.5" style="background-image: url(<?php echo $WEBSITE ?>assets/images/demo-spa-salon-treatments-title-bg.jpg)">
        <div class="opacity-extra-medium bg-gradient-nero-grey-brown"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center position-relative page-title-extra-large">
                    <div class="d-flex flex-column extra-small-screen">
                        <div class="mt-auto">
                            <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-400 ls-minus-1px" data-fancy-text="{ &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [50, 0], &quot;filter&quot;: [&quot;blur(20px)&quot;, &quot;blur(0px)&quot;], &quot;string&quot;: [&quot;Blogs&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;easing&quot;: &quot;easeOutQuad&quot; }"></h1>
                        </div>

                        <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 text-white" role="navigation">
                            <ul data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                <li><a href="<?php echo $WEBSITE; ?>" class="text-white">Home</a></li>
                                <li>Blogs</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="background-repeat position-relative overlap-height">
        <div class="position-absolute left-minus-40px top-50px z-index-2 d-none d-lg-inline-block skrollable skrollable-between" data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(100px)" style="transform: translateY(-30px);">
            <img src="<?php echo $WEBSITE ?>assets/images/pattern/Pattern-01.png?new1" alt="Executive nails spa side image" data-no-retina="" style="width: 40%">
        </div>
        <div class="position-absolute right-minus-50px top-30px z-index-minus-1 d-none d-lg-inline-block skrollable skrollable-between" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" style="transform: translateY(-30px);">
            <img src="<?php echo $WEBSITE ?>assets/images/pattern/Pattern-02.png?new1" alt="Executive nails spa side second image" data-no-retina="" style="width: 50%">
        </div>
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 col-sm-7 text-center">
                    <!-- <span class="fs-15 mb-5px text-yellow fw-500 d-block text-uppercase ls-2px">What we offer</span> -->
                    <h2 class="alt-font ls-minus-1px text-base-color h3">Explore our latest nail art trends and information</h2>
                </div>
            </div>
            <?php
            foreach ($blogs as $blog) {
                $id = $blog['id'];
                $img = $WEBSITE . $blog['image'];
                $url = $WEBSITE . "blog/" . $blog["slug"]."/";

            ?>
                <?php
                if (!($id % 2 == 0)) {
                ?>
                    <div class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8" data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="col-lg-7 md-h-400px sm-h-230px text-center">
                            <img src="<?php echo $img ?>" alt="Executive nails spa blogs images" style="width: 100%;height:100%">
                        </div>
                        <div class="col-lg-5 border border-color-base-color bg-base-color">
                            <div class="pt-13 pb-8 ps-10 pe-10 lg-ps-6 lg-pe-6 lg-pt-12 last-paragraph-no-margin text-white">
                                <h3 class="alt-font fw-400 text-white mb-20px ls-minus-1px d-inline-block h4"><?php echo $blog['title'] ?>
                                </h3>
                                <p><?php echo $blog['summary'] ?></p>
                            </div>
                            <div class="ps-10 pe-15 pt-5 pb-5 lg-ps-9 lg-pe-9 lg-pt-4 lg-pb-4 align-items-center d-flex justify-content-between text-center text-sm-start">
                                <a href="<?php echo $url; ?>" class="btn btn-very-small btn-double-border btn-border-color-white">
                                    <span>
                                        <span class="btn-double-text" data-text="Read more">Read more</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8 flex-row-reverse" data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="col-lg-7 md-h-400px sm-h-230px text-center">
                            <img src="<?php echo $img ?>" alt="Executive Nails spa blogs images" style="width: 100%">
                        </div>
                        <div class="col-lg-5 border border-color-base-color bg-base-color">
                            <div class="pt-13 pb-8 ps-10 pe-10 lg-ps-6 lg-pe-6 lg-pt-12 last-paragraph-no-margin text-white">
                                <h4 class="alt-font fw-400 text-white mb-20px ls-minus-1px d-inline-block"><?php echo $blog['title'] ?>
                                </h4>
                                <p><?php echo $blog['summary'] ?></p>

                            </div>
                            <div class="ps-10 pe-15 pt-5 pb-5 lg-ps-9 lg-pe-9 lg-pt-4 lg-pb-4 align-items-center d-flex justify-content-between text-center text-sm-start">
                                <a href="<?php echo $url; ?>" class="btn btn-very-small btn-double-border btn-border-color-white">
                                    <span>
                                        <span class="btn-double-text" data-text="Read more">Read more</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            <?php
            }
            ?>
           


        </div>
    </section>
</main>    
    <?php require('../includes/footer.php'); ?>
</body>