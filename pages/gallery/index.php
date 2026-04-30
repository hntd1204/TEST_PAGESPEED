<?php 
$seoArray = [
    "title"       => "Gallery",
    "description" => "Explore our nail art masterpieces, latest trends, and high-quality services. This visual portfolio serves as an inspiration for our clients, highlighting our expertise in manicures, pedicures, nail extensions, and more. Our gallery also demonstrates our commitment to hygiene and customer satisfaction. As you browse through, you will find a variety of nail designs, colors, and styles to suit every preference. Discover the creativity, professionalism, and luxury experience we offer, setting us apart in the nail care industry.",
    "keywords"    => "Nail Spa Gallery, Nail Art Designs, Manicure and Pedicure Images, Luxury Nail Spa Photos, Nail Treatment Gallery, Professional Nail Services, Nail Spa Interior Images, Nail Salon Design Ideas, Nail Spa Before and After Photos, High-Quality Nail Spa Images, Nail Spa Artwork Gallery, Nail Spa Portfolio, Nail Color Options",
    "image"       => "https://executivenailsspawestuniversity.com/assets/images/gallery/2.jpg",
];
require('../../includes/head.php'); ?>
<body class="overflow-x-hidden" data-mobile-nav-style="classic">
<main>
<?php require('../../includes/header.php'); ?>
<section class="page-title-parallax-background bg-dark-gray ipad-top-space-margin position-relative" data-parallax-background-ratio="0.5"
        role="img"  style="background-image: url(../../assets/images/demo-spa-salon-gallery-title-bg.jpg)">
    <div class="opacity-extra-medium bg-gradient-nero-grey-brown"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column extra-small-screen">
                    <div class="mt-auto">
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-400 ls-minus-1px"
                            data-fancy-text="{ &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [50, 0], &quot;filter&quot;: [&quot;blur(20px)&quot;, &quot;blur(0px)&quot;], &quot;string&quot;: [&quot;Gallery&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;easing&quot;: &quot;easeOutQuad&quot; }"></h1>
                    </div>

                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 text-white" role="navigation">
                        <ul data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <li><a href="<?php echo $WEBSITE; ?>" class="text-white">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="explore" class="background-repeat position-relative overlap-height z-index-0">
    <div class="container-fluid overlap-gap-section">
        <div class="row">
            <div class="col-12 filter-content">
                <ul class="portfolio-simple portfolio-wrapper grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center"
                    style="position: relative; height: 1096.54px;">
                    <li class="grid-sizer"></li>

                    <?php
                    for ($i = 1; $i < 21; $i++) {
                        ?>
                        <li class="grid-item selected digital transition-inner-all"
                            style="position: absolute; left: 0%; top: 0px;">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-medium-gray border-radius-4px">
                                    <img src="<?php echo $WEBSITE; ?>assets/images/gallery/<?php echo $i ?>.webp" alt="Executive nal gallery images"
                                         data-no-retina="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="<?php echo $WEBSITE; ?>assets/images/gallery/<?php echo $i ?>.webp"
                                               data-group="portfolio-items" title="Executive Gallery"
                                               class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-55px h-55px rounded-circle box-shadow-large move-bottom-top">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</section>

</main> 
<?php require('../../includes/footer.php'); ?>
</div>
</body>
