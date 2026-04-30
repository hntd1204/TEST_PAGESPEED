<?php
session_start();
$randomCode = rand();
$_SESSION['user'] = $randomCode;

$seoArray = [
    "title"       => "Contact Us",
    "description" => "At Executive Nails & Spa West University, we place a high value on your feedback and inquiries. Your satisfaction is our top priority, and we strive to offer services that are meticulously executed to ensure maximum satisfaction. Whether you have questions, suggestions, or need more information about our services, we encourage you to reach out to us. Our dedicated customer service team is always ready to assist you promptly and professionally. We believe in maintaining open lines of communication with our esteemed clients, as it helps us to serve you better. Contact us today and let us provide you with an exceptional beauty experience.",
    "keywords"    => "Bellaire Blvd, Houston, Nail Salon, Nail Technicians, Customer Support, Nail Care, Salon Services, Nail Art, Nail Designs, Manicure, Pedicure, Nail Spa, Nail Treatments, Nail Enhancements, Nail Products",
    "image"       => "https://executivenailsspawestuniversity.com/assets/images/contact-us.jpg",
];
require('../../includes/head.php'); ?>
<body class="overflow-x-hidden" data-mobile-nav-style="classic">
<?php require('../../includes/header.php'); ?>
<main>
<section class="page-title-parallax-background bg-dark-gray ipad-top-space-margin position-relative"
         data-parallax-background-ratio="0.5"
         style="background-image: url(../../assets/images/demo-spa-salon-contact-title-bg.jpg)">
    <div class="opacity-extra-medium bg-gradient-nero-grey-brown"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column extra-small-screen">
                    <div class="mt-auto">
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-400 ls-minus-1px" role="presentation"
                            data-fancy-text="{ &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [50, 0], &quot;filter&quot;: [&quot;blur(20px)&quot;, &quot;blur(0px)&quot;], &quot;string&quot;: [&quot;Contact us&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;easing&quot;: &quot;easeOutQuad&quot; }"></h1>
                    </div>

                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 text-white" role="navigation">
                        <ul data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <li><a href="<?php echo $WEBSITE; ?>" class="text-white">Home</a></li>
                            <li>Contact us</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="background-repeat">
    <div class="container">
        <div class="row mb-5 sm-mb-40px">
            <div class="col-md-6 overflow-hidden"
                 data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h2 class="alt-font fw-700 text-base-color fancy-text-style-4 ls-minus-2px h1">Say
                    <span data-fancy-text="{ &quot;effect&quot;: &quot;rotate&quot;, &quot;string&quot;: [&quot;hello!&quot;] }" ></span><i
                            class="bi bi-emoji-smile icon-extra-large ms-15px" role="presentation"></i>
                </h2>
            </div>
            <div class="col-md-6 last-paragraph-no-margin">
                <p class="w-85 xl-w-100" style="color:#36332e"
                   data-anime="{ &quot;el&quot;: &quot;lines&quot;, &quot;translateY&quot;: [30, 0], &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    At Executive Nails & Spa West University, we prioritize customer satisfaction above all else. We pledge to carry out all our services with utmost precision to guarantee the highest level of satisfaction.</p>
            </div>
        </div>
        <div class="row align-items-center justify-content-center"
             data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="col-auto text-center md-mb-20px">
                <span class="text-dark-gray fw-400 alt-font fs-24" role="heading">Experience the art of caring for your nails.</span>
            </div>
            <div class="col-auto d-none d-lg-block">
                <span class="w-200px lg-w-110px h-1px bg-dark-gray opacity-2 d-flex mx-auto" role="presentation"></span>
            </div>
            <div class="col-auto">
                <a href="#appointment" class="btn btn-small btn-double-border btn-border-base-color section-link">
<span>
<span class="btn-double-text" data-text="Book an appointment">Book an appointment</span>
<span><i class="fa-solid fa-arrow-right" role="presentation"></i></span>
</span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="position-relative one-half-screen sm-small-screen" data-parallax-background-ratio="0.5"
         style="background-image: url(../../assets/images/demo-spa-salon-contact-parallax.jpg)">
    <div class="opacity-light bg-gradient-nero-grey-brown"></div>
    <div class="fs-225 lg-fs-160 sm-fs-200 xs-fs-140 ls-minus-1px alt-font fw-700 position-absolute left-100px bottom-minus-70px lg-bottom-minus-50px xs-bottom-minus-30px lg-left-0px" style="color:#284d2d">
        contact
    </div>
</section>


<section class="background-repeat position-relative sm-pt-0">
    <div class="position-absolute left-minus-100px top-minus-150px z-index-minus-2 d-none d-lg-inline-block skrollable skrollable-between"
         data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
         style="transform: translateY(-30px);">
        <img src="../../assets/images/pattern/Pattern-02.png?new1" alt="" data-no-retina="" style="width: 80%">
    </div>
    <div class="position-absolute right-minus-150px bottom-minus-20px z-index-minus-2 d-none d-lg-inline-block skrollable skrollable-between"
         data-bottom-top="transform: translateY(-60px)" data-top-bottom="transform: translateY(40px)"
         style="transform: translateY(-50px);">
        <img src="../../assets/images/pattern/Pattern-03.png?new1" alt="" data-no-retina="" style="width: 50%">
    </div>
    <div class="container-fluid overlap-section p-0">
        <div class="row g-0 justify-content-end overlap-section-one-fourth mb-6 overflow-hidden"
             data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0],&quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="col-xl-3 col-lg-4 col-md-5 bg-base-color p-3 sm-p-12 overflow-hidden">
                <div class="row">
                    <div class="col-12 tab-style-04">
                        <div class="tab-content text-center text-md-start">

                            <div class="tab-pane fade in active show" id="tab_five1">
                                <div>
                                    <span class="fs-22 fw-500 mb-5px d-block text-white" role="heading">Executive Nails & Spa West University</span>
                                    <p class="text-dark-gray w-85 sm-w-100 mb-15px lh-30 text-white">3817 Bellaire Blvd,
                                        Houston,
                                        TX 77025, United States</p>
                                    <div class="w-100 text-white">
                                        <span>Email:</span>
                                        <a href="mailto:glamourqllc@gmail.com"
                                           class="text-white text-dark-gray-hover d-inline-block">glamourqllc@gmail.com</a>
                                    </div>
                                    <div class="w-100 text-white mb-15px last-paragraph-no-margin">
                                        <span>Tel:</span>
                                        <a href="tel:3463309472">3463309472</a>
                                        <!--<a href="tel:+1(832)367-0465">+1 (832) 367-0465</a>-->
                                    </div>
                                    <a href="https://maps.app.goo.gl/nBPhrPKv3LmjHxNt5" aria-label="Executive nails spa (view on Google map)"
                                       target="_blank" class="btn btn-link btn-large fw-500" style="color:#ffffff">View on google map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.4968047243437!2d-95.44015172455563!3d29.70536527509609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16f686785bd%3A0xba29e096af9c239!2sExecutive%20Nails%20%26%20Spa%20West%20University!5e0!3m2!1sen!2s!4v1717520005340!5m2!1sen!2s"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" aria-label="views us on Google map"
                        referrerpolicy="no-referrer-when-downgrade"></iframe> 
            </div>
        </div>
    </div>
     <div class="container" id="appointment">
            <div class="row justify-content-center mb-2">
                <div class="col-12 text-center" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="fs-15 mb-5px fw-500 d-block text-uppercase ls-2px" style="color:#284d2d">Get in touch with us</span>
                    <h3 class="alt-font ls-minus-1px text-base-color">How we can help you?</h3>
                </div>
            </div>
            <div class="row row-cols-md-1 justify-content-center mb-10 md-mb-15 sm-mb-0">
                <div class="col-xl-9 col-lg-10 col-md-12">
                    <form id="contact_form" method="POST" class="contact-form-style-03">
                        <input type="hidden" name="user" value="<?php echo $randomCode; ?>" aria-required="true">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h5 class="text-base-color alt-font">Client Information</h5>
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label fs-13 ls-1px text-uppercase text-dark-gray fw-500 mb-0">Your name*</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray" role="presentation"></i></span>
                                    <input class="fs-17 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail1" value="" type="text" name="name" placeholder="Enter your name?" aria-required="true" />
                                </div>
                                <div id="name-error"></div>
                                <!-- <div id="exampleInputEmail1-error"></div><br> -->



                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail3" class="form-label fs-13 ls-1px text-uppercase text-dark-gray fw-500 mb-0">Your phone number*</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-telephone text-dark-gray" role="presentation"></i></span>
                                    <input class="fs-17 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail3" value="" type="number" name="phone" placeholder="Enter your phone number" aria-required="true" />
                                </div>
                                <div id="phone-error"></div>

                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail2" class="form-label fs-13 ls-1px text-uppercase text-dark-gray fw-500 mb-0">Your email
                                    address*</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-envelope text-dark-gray" role="presentation"></i></span>
                                    <input class="fs-17 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" value="" id="exampleInputEmail2" type="email" name="email" placeholder="Enter your email address" aria-required="true" />
                                </div>
                                <div id="email-error"></div>

                            </div>
                            <div class="col-12 text-center mt-4">
                                <h4 class="text-base-color alt-font h5">Service Request</h4>
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputEmail4" class="form-label fs-13 ls-1px text-uppercase text-dark-gray fw-500 mb-0">Date</label>
                                <div class="position-relative form-group mb-25px">
                                    <input class="fs-17 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail4" type="date" name="date" placeholder="" aria-required="true" />
                                </div>
                                <div id="date-error"></div>

                            </div>

                            <div class="col-md-6">
                                <label for="time" class="form-label fs-13 ls-1px text-uppercase text-dark-gray fw-500 mb-0">Time</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-calendar text-dark-gray" role="presentation"></i></span>
                                    <select class="fs-17 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" name="time" id="time">
                                        <?php
                                        $timeRange = [
                                            "11:30 AM",
                                            "11:45 AM",
                                            "12:00 PM",
                                            "12:15 PM",
                                            "12:30 PM",
                                            "12:45 PM",
                                            "01:00 PM",
                                            "01:15 PM",
                                            "03:00 PM",
                                            "03:15 PM",
                                            "03:30 PM",
                                            "03:45 PM",
                                            "04:00 PM",
                                            "04:15 PM",
                                            "04:30 PM",
                                            "04:45 PM",
                                            "05:00 PM",
                                            "05:15 PM",
                                            "05:30 PM",
                                            "05:45 PM",
                                            "06:00 PM",
                                            "06:15 PM"
                                        ];
                                        ?>
                                        <?php
                                        foreach ($timeRange as $time) {
                                        ?>
                                            <option value="<?php echo $time; ?>"><?php echo $time; ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="service" class="form-label fs-13 ls-1px text-uppercase text-dark-gray fw-500 mb-0">Services</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-heart text-dark-gray" role="presentation"></i></span>
                                    <select class="fs-17 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" name="service" id="service">
                                        <option value="Manicure">Manicure</option>
                                        <option value="Pedicure">Pedicure</option>
                                        <option value="Nails">Nails</option>
                                        <option value="Polish Change">Polish Change</option>
                                        <option value="Kid">Kid</option>
                                        <option value="Waxing">Waxing</option>
                                        <option value="Additional Services">Additional Services</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputEmail6" class="form-label fs-13 ls-1px text-uppercase text-dark-gray fw-500 mb-0">Preferred
                                    Staff</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-people text-dark-gray" role="presentation"></i></span>
                                    <input class="fs-17 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" id="exampleInputEmail6" value="" type="text" name="staff" placeholder="Anyone Or Specific Name" aria-required="true" />
                                </div>
                                <div id="staff-error"></div>

                            </div>


                            <div class="col-12 mb-35px">
                                <label for="message" class="form-label fs-13 ls-1px text-uppercase fw-500 mb-0 text-dark-gray">Special Requests</label>
                                <div class="position-relative form-group form-textarea mb-0">
                                    <textarea class="fs-17 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" value="I am writing to formally request special accommodations for the upcoming exams due to [your reason - e.g., medical condition, personal circumstances, etc.]. I am a [year] student majoring in [your major] at [your institution]." id="message" name="message" placeholder="Please provide any special requests or additional information in the text box below." rows="4"></textarea>
                                    <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray" role="presentation"></i></span>
                                </div>
                                <div id="message-error"></div>

                            </div>
                            <div class="col-md-8 sm-mb-30px text-center text-md-start">
                                <p class="mb-0 fs-15 lh-26 w-80 md-w-85 sm-w-100" style="color:#36332e">We are committed to protecting your
                                    privacy. We will never collect information about you without your explicit consent.</p>
                            </div>
                            <div id="formMessage" class="mt-3"></div>
                            <div class="col-md-4 text-center text-md-end">
                                <button class="btn btn-small btn-double-border btn-border-base-color left-icon submit" name="btn_login" type="submit" id="contactUsButton">
                                    <span>
                                        <span><i class="fa-regular fa-paper-plane" role="presentation"></i></span>
                                        <span class="btn-double-text" data-text="Send message">Send message</span>
                                    </span>
                                </button>
                            </div>

                        </div>
                    </form>
                    <div class="col-12 text-center">
                        <div class="form-results mt-20px d-none"></div>
                    </div>
                </div>
            </div>
        </div>
</section>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contact_form').on('submit', function(event) {
                event.preventDefault();

                // Clear previous error messages
                $('.text-danger').html('');

                // Gather form data
                const name = $('#exampleInputEmail1').val();
                const phone = $('#exampleInputEmail3').val();
                const email = $('#exampleInputEmail2').val();
                const staff = $('#exampleInputEmail6').val();
                const message = $('#message').val();
                const service = $('#service').val();
                const time = $('#time').val();
                const date = $('#exampleInputEmail4').val();
                const website = '<?php echo $WEBSITE ?>';
            
                // Send data via Ajax
                $.ajax({
                    // url: website + 'plugin/api-usage.php', // Replace with your actual backend URL
                    url: 'https://executivenailsspawestuniversity.com/plugin/api-usage.php', // Replace with your actual backend URL
                    method: 'POST',
                    data: {
                        name: name,
                        phone: phone,
                        email: email,
                        staff: staff,
                        message: message,
                        service: service,
                        time: time,
                        date: date
                    },
                    dataType: 'json',
                    success: function(response) {
                        // Handle success response
                        if (response.status === 'success') {
                            $('#formMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                            // Optionally reset the form
                            $('#contact_form')[0].reset();
                        } else {
                            $('#formMessage').html('<div class="alert alert-danger">' + response.message + '</div>');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        var errors = JSON.parse(xhr.responseText);
                        console.log(errors);
                        $.each(errors, function(key, value) {
                            $('#' + key + '-error').html("<div class='text-danger'>" + value + "</div>");
                        });
                    }
                });
            });
        });
    </script>
</div>
</main>
<?php require('../../includes/footer.php'); ?>
</body>
