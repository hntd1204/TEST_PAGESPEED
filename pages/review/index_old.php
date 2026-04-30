<?php
// require("C:\xampp\htdocs\spa\includes\pre-setting.php");
require("../../includes/pre-setting.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/vendors.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/linktree.css" />

    <title>Linktree Executive Nails Spa West University</title>
</head>

<style>
    .container {
        background: url('<?php echo $WEBSITE ?>/assets/images/logos/bg_spa.avif') no-repeat center center;

    }

    .items {
        border-radius: 50px;
    }

    p {
        font-size: 2rem;
    
    }

    .reg-symbol {
        font-size: 1.2rem;
    }
     @media only screen and (max-width: 767px) {
        .font-h2 {
            font-size: 36px;
        }

        /* .th-btn {
            font-size: 12px !important;
        }

        .header-button:last-child {
            margin-bottom: 10%;
        } */
    }
</style>
<!-- 速 -->

<body>
    <div class="container">
        <div class="name_linktree text-center">
            <img class="d-block mx-auto mb-5" src="<?php echo $WEBSITE  ?>/assets/images/logos/Circle.png" alt="" style="max-width:200px;">
            <h2 class="font-h2">
                Executive Nails Spa
            </h2>
            <p class="font-h2 ml-3" style="margin-left:12px;display: flex; justify-content: center">West University <span class="reg-symbol">®</span></p>
        </div>
        <div class="row review-request">
            <div class="text-center">
                <div class="d-flex justify-content-center">
                    <div class="rating-section">
                        <div id="nivisco-star-rating-container" n-data-google-url="https://g.page/r/CYef-TJNS3JbEBE/review">
                            <div class="nivisco-star-rating"> <a href="#" class="n-star" data-rating="1" data-rating-action="c"></a><a href="#" class="n-star" data-rating="2" data-rating-action="g"></a><a href="#" class="n-star" data-rating="3" data-rating-action="g"></a><a href="#" class="n-star" data-rating="4" data-rating-action="g"></a><a href="#" class="n-star" data-rating="5" data-rating-action="g"></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <a href="https://www.zbook.us/#/appt-book/executive3817">
                <div class="items">
                    <img class="icon" src="<?php echo $WEBSITE  ?>/assets/images/logos/Circle.png" alt="">

                    <p class="w-100 text-center">Book Now</p>
                </div>
            </a>
            <a href="<?php echo $WEBSITE ?>pages/review/rating">
                <div class="items">
                    <img src="<?php echo $WEBSITE  ?>/assets/images/logos/logo_google.png" alt="" class="icon">
                    <p class="w-100 text-center">Leave Us a Review</p>
                </div>
            </a>
            <a href="<?php echo $facebook ?>">
                <div class="items">
                    <img src="<?php echo $WEBSITE  ?>/assets/images/logos/facebook.png" alt="" class="icon">
                    <p class="w-100 text-center">Like Us Here</p>
                </div>
            </a>
            <a href="<?php echo $instagram ?>">
                <div class="items">
                    <img src="<?php echo $WEBSITE  ?>/assets/images/logos/instagram.png" alt="" class="icon">
                    <p class="w-100 text-center">Follow Us</p>
                </div>
            </a>
            <a href="<?php echo $WEBSITE ?>pages/menu">
                <div class="items">
                    <img src="<?php echo $WEBSITE  ?>/assets/images/logos/menu.svg" alt="" class="icon">
                    <p class="w-100 text-center">Service Pricing</p>
                </div>
            </a>


        </div>
    </div>
</body>

</html>