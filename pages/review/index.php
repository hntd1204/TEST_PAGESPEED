<?php

require('../../includes/head.php');
?>




<body class="overflow-x-hidden drink-menu" data-mobile-nav-style="classic">

    <?php require('../../includes/header.php'); ?>
    <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/review.css" />
<main>
    <section class="page-title-parallax-background bg-dark-gray ipad-top-space-margin position-relative" data-parallax-background-ratio="0.5" style="background-image: url(../../assets/images/demo-spa-salon-menu-title-bg.jpg)">
        <div class="opacity-extra-medium bg-gradient-nero-grey-brown"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center position-relative page-title-extra-large">
                    <div class="d-flex flex-column extra-small-screen">
                        <div class="mt-auto">
                            <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-400 ls-minus-1px" data-fancy-text="{ &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [50, 0], &quot;filter&quot;: [&quot;blur(20px)&quot;, &quot;blur(0px)&quot;], &quot;string&quot;: [&quot;Review&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;easing&quot;: &quot;easeOutQuad&quot; }"></h1>
                        </div>
                        <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 text-white" role="navigation">
                            <ul data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                <li><a href="<?php echo $WEBSITE; ?>" class="text-white">Home</a></li>
                                <li>Review</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-4">
        <div class="name_linktree text-center">
            <h2 class="font-h2" style="color:#284d2d">
                Connect with Us
            </h2>
            <!-- <p class="font-h2 ml-3" style="margin-left:12px;display: flex; justify-content: center">West University <span class="reg-symbol">®</span></p> -->
        </div>
        <div class="main">
            <!--<a href="https://www.zbook.us/#/appt-book/executive3817">
                <div class="items">
                    <img class="icon" src="<?php echo $WEBSITE  ?>/assets/images/logos/Circle.png" alt="Executive nails spa circle logo">
                    <p class="w-100 text-center" style="color:#36332e">Book Now</p>
                </div>
            </a>-->
            <a href="tel:+13463309472">
                <div class="items">
                    <img class="icon" src="<?php echo $WEBSITE  ?>/assets/images/logos/Circle.png" alt="Executive nails spa circle logo">
                    <p class="w-100 text-center" style="color:#36332e">Call Us to Book: +1 (346)-330-9472</p>
                </div>
            </a>
            <a href="<?php echo $WEBSITE ?>pages/review/rating.php">
                <div class="items">
                    <img src="<?php echo $WEBSITE  ?>/assets/images/logos/logo_google.png" alt="Google logo" class="icon">
                    <p class="w-100 text-center" style="color:#36332e">Leave Us a Review</p>
                </div>
            </a>
            <a href="<?php echo $facebook ?>">
                <div class="items">
                    <img src="<?php echo $WEBSITE  ?>/assets/images/logos/facebook.png" alt="Facebook logo" class="icon">
                    <p class="w-100 text-center" style="color:#36332e">Like Us Here</p>
                </div>
            </a>
            <a href="<?php echo $instagram ?>">
                <div class="items">
                    <img src="<?php echo $WEBSITE  ?>/assets/images/logos/instagram.png" alt="Instagram logo" class="icon">
                    <p class="w-100 text-center" style="color:#36332e">Follow Us</p>
                </div>
            </a>
            <a href="<?php echo $WEBSITE ?>pages/menu/">
                <div class="items">
                    <img src="<?php echo $WEBSITE  ?>/assets/images/logos/menu.svg" alt="Menu logo" class="icon">
                    <p class="w-100 text-center" style="color:#36332e">Service Pricing</p>
                </div>
            </a>


        </div>
    </div>
    </main>
    <?php require('../../includes/footer.php'); ?>


</body>

</html>