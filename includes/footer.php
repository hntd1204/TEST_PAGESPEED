<footer id="footer" class="mt-2 half-footer pb-45px border-top border-color-light-gray background-repeat">
    <div class="container">
        <div class="overlap-section position-absolute left-0px right-0px text-center d-none d-md-inline-block">
            <img src="<?php echo $WEBSITE . 'assets/images/demo-spa-salon-home-15.webp?new'; ?>"
                alt="spa salon home 15 image" class="w-20 h-100">
        </div>
        <div class="row">
            <div
                class="col-lg-3 col-md-4 col-sm-6 last-paragraph-no-margin me-auto z-index-1 text-center text-sm-start xs-mb-20px">
                <span class="fs-20 fw-500 d-block mb-5px" style="color:#284d2d" role="heading" aria-level="2">Nail Salon
                    Location</span>
                <p class="w-100" style="color:#36332e">3817 Bellaire Blvd, Houston, TX 77025, United States</p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 last-paragraph-no-margin text-center text-sm-end z-index-1">
                <span class="fs-20 fw-500 d-block mb-5px" role="heading" aria-level="2" style="color:#284d2d">Working
                    Time</span>
                <p class="w-100 mb-0 pb-0" style="color:#36332e">Mon - Sat: 9:30AM – 7PM</p>
                <p class="w-100" style="color:#36332e">Sun: 10:00AM – 5PM</p>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mt-20px mb-10px md-mb-20px">
            <div class="col d-none d-md-flex">
                <div class="divider-style-03 divider-style-03-01 border-color-light-gray"></div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 text-center elements-social social-icon-style-04">
                <ul class="large-icon dark mb-0">
                    <li><a class="facebook" href="https://www.facebook.com/executivewestuniversity/" target="_blank"
                            aria-label="Facebook page (opens new tab)"><i
                                class="fa-brands fa-facebook-f"></i><span></span></a></li>
                    <li><a class="instagram" href="https://www.instagram.com/executivenailsspawestu" target="_blank"
                            aria-label="Instagram page (opens new tab)"><i
                                class="fa-brands fa-instagram"></i><span></span></a></li>
                </ul>
            </div>
            <div class="col d-none d-md-flex">
                <div class="divider-style-03 divider-style-03-01 border-color-light-gray" role="presentation"></div>
            </div>
        </div>
        <div class="last-paragraph-no-margin text-center text-md-start sm-mb-10px">
            <p class="fs-15 text-center" style="color:#284d2d">&copy; 2024 Crafted By <a href="https://nivisco.com"
                    aria-label="Nivisco website (opens new tab)" target="_blank" class="text-decoration-line-bottom"
                    style="color:#284d2d">Nivisco.com</a>
            </p>
        </div>
    </div>
</footer>


<div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll" role="button">
        <span class="scroll-text" style="color:#284d2d">Scroll</span><span class="scroll-line"><span
                class="scroll-point"></span></span>
    </a>
</div>

<?php /* Removed files
<script type="text/javascript" src="<?php echo $WEBSITE . 'assets/' ?>js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
*/ ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- animation -->
<script defer type="text/javascript" src="<?php echo $WEBSITE . 'assets/' ?>js/vendors.min.js?v=1"></script>
<script defer type="text/javascript" src="<?php echo $WEBSITE . 'assets/' ?>js/main2.js?v=1"></script>

<?php /*
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VSGFXEYDC5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VSGFXEYDC5');
</script>
*/ ?>
<script>
    window.addEventListener('load', function() {
        // Load the second GTM script
        var gtagScript1 = document.createElement('script');
        gtagScript1.src = "https://www.googletagmanager.com/gtag/js?id=G-VSGFXEYDC5";
        gtagScript1.async = true;
        document.head.appendChild(gtagScript1);

        gtagScript1.onload = function() {
            // Ensure both scripts are loaded before configuring GTM
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'G-VSGFXEYDC5');
        };
    });
</script>
</body>

</html>