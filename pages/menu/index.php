<?php 
$seoArray = [
    "title"       => "Our Menu",
    "description" => "The nail spa menu offers a variety of luxurious treatments designed to pamper and enhance your nails. It includes manicures and pedicures with options for regular, gel, or acrylic polish in a wide array of colors. Special treatments like paraffin wax, nail art, and French tips are also available. The menu extends beyond nails to include hand and foot massages, exfoliation, and hydrating treatments. For those seeking ultimate relaxation, combination packages that include facials and body massages are offered. The nail spa menu ensures a personalized, rejuvenating experience for every customer.",
    "keywords"    => "7 days guarantee for gel/shellac, Pedicure Services, Acrylic, Refill, Dipping, Gel X, Regular Manicure, Nail Add-ons, Gel Manicure, Nail Repairs, Gel Builder, Kid Services, Waxing",
    "image"       => "https://executivenailsspawestuniversity.com/assets/images/menu.jpg",
];
require('../../includes/head.php'); ?>
<body class="overflow-x-hidden drink-menu" data-mobile-nav-style="classic">
<?php require('../../includes/header.php'); ?>
<main>
<section class="page-title-parallax-background bg-dark-gray ipad-top-space-margin position-relative"
         data-parallax-background-ratio="0.5"
         style="background-image: url(../../assets/images/demo-spa-salon-menu-title-bg.jpg)">
    <div class="opacity-extra-medium bg-gradient-nero-grey-brown"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column extra-small-screen">
                    <div class="mt-auto">
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-400 ls-minus-1px"
                            data-fancy-text="{ &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [50, 0], &quot;filter&quot;: [&quot;blur(20px)&quot;, &quot;blur(0px)&quot;], &quot;string&quot;: [&quot;Menu&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;easing&quot;: &quot;easeOutQuad&quot; }"></h1>
                    </div>

                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 text-white">
                        <ul data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <li><a href="<?php echo $WEBSITE; ?>" class="text-white">Home</a></li>
                            <li>Menu</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="explore" class="background-repeat position-relative overlap-height z-index-0">
    <div class="container overlap-gap-section container-lg">
        <div class="row justify-content-center mb-1">
            <div class="col-lg-8 text-center">
                <span class="fs-15 mb-5px fw-500 d-block text-uppercase ls-2px" style="color:#284d2d  ">Flexible pricing</span>
                <h2 class="alt-font ls-minus-1px text-base-color h3">Special pricing</h2>
                <p style="color:#36332e">7 days guarantee for gel/shellac, dipping powder, gel X, acrylic powder.</p>
                <ul style="color:#36332e">
                    <li>One-time use buffer and file.</li>
                    <li>Liner protection for all kinds of pedicures.</li>
                    <li>Non-recycled paraffin wax.</li>
                    <li>Sanitized, clean and professional service.</li>
                    <li>Reasonable price.</li>
                </ul>
            </div>
        </div>
        <style>
            .spa-menu {
                padding: 10px 10px;
                background-color: #fff;
                border-radius: 0;
                margin: 30px 30px;
                border: 1px solid var(--base-color);
            }

            .val {
                width: 30%;
                text-align: right;
            }

            .main-val {
                width: 70%;
                text-align: left;
            }

            .main-val-1 {
                width: 37%;
                text-align: left;
            }

            .val-1 {
                width: 21%;
                text-align: center;
            }

            .val-2 {
                width: 20%;
                text-align: center;
            }
        </style>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <ul class="pricing-table-style-12 pe-15px md-pe-0 appear anime-child anime-complete spa-menu"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <li class="justify-content-center mt-3">
                        <h3 class="text-yellow alt-font fs-25 mb-0 h6" style="color:#284d2d">Pedicure Services</h3>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16  main-val" style="color:#284d2d">The everyday</span>

                                <div class="ms-auto fs-16 val" style="color:#284d2d">$35</div>

                                <div class="ms-auto fs-16 val" style="color:#284d2d">25-min</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Sea salt, Trim/file, cuticle care, callus treatment, scrub,5
                                mins massage, polish.</p>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 main-val" style="color:#284d2d">Sun-kissed</span>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">$48</div>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">40-min</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Sea Salt, Trim/file, cuticle care, callus treatment, orange
                                scrub with fresh orange, paraffin, 8 mins massage, fresh cucumber mask, polish.</p>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16  main-val" style="color:#284d2d">Herbal recovery</span>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">$57</div>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">45-min</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Neck wrap, Herbal Leave + Lemongrass Essential Oil soak,
                                Trim/file, cuticle care, callus treatment, herbal scrub, herbal mask, Paraffin, 12 mins
                                massage with hot stone, polish</p>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16  main-val" style="color:#284d2d">Matcha cha cha</span>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">$67</div>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">55-min</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Neck wrap, bottle of milk with matcha powder + tea bag,
                                trim/file, cuticle care, callus treatment, green tea scrub, green tea mask with matcha
                                powder, green tea/ collagen sock, 14 mins massage with hot stones + steam, 5 mins neck
                                massage, polish</p>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16  main-val" style="color:#284d2d">Pahoehoe Lava Flow</span>

                                <div class="ms-auto fs-16 val" style="color:#284d2d">$72</div>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">60-min</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Detox Volcano (Jasmine Pearl, tropical citrus, lavender, green
                                tea) 7 mins neck massage, neck wrap, trim/File, cuticle cut, callus treatment, salt
                                scrub, moisturizing mask, paraffin, 15 mins massage with hot stone + steam, polish.</p>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16  main-val" style="color:#284d2d">Ohh-Jelo Shot</span>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">$74</div>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">60-min</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Jelly (Peppermint, lavender, aloe): jelly soak, 7 min neck
                                massage, neck wrap, trim/file, cuticle cut, callus treatment, salt scrub, moisturizing
                                mask, paraffin, 15 mins massage with hot stone+ steam, polish.</p>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 main-val" style="color:#284d2d">Glamour 24k gold pedicure</span>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">$92</div>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">75-min</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Bomb in water, Foil Gold Scrubs, Gold Foil mask, trim/file,
                                cuticle cut, callus treatment, Collage mask for foot, 20 mins foot massage with hot
                                stone + Steam,8 mins neck massage, Serum 24 gold, Polish.</p>
                        </div>
                    </li>

                </ul>
                <ul class="pricing-table-style-12 pe-15px md-pe-0 appear anime-child anime-complete spa-menu"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <li class="justify-content-center mt-3">
                        <h4 class="alt-font fs-25 mb-0 h6" style="color:#284d2d">Regular Manicure</h4>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 ay main-val" style="color:#284d2d">The everyday</span>
                                <div class="ms-auto fs-16  val" style="color:#284d2d">$25</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Trim/file, cuticle care, short massage, polish</p>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16  main-val" style="color:#284d2d">Herbal healing</span>
                                <div class="ms-auto fs-16  val" style="color:#284d2d">$42</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Trim/file, cuticle care, scrubs, paraffin wax, 8 mins hand
                                massage, polish</p>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16  main-val" style="color:#284d2d">Glamour 24k gold</span>

                                <div class="ms-auto fs-16  val" style="color:#284d2d">$62</div>
                            </div>
                            <p class="fs-14 fst-italic" style="color:#36332e">Neck wrap, 5 mins neck massage, trim/file, cuticle care, gold
                                foil scrubs, gold foil mash, paraffin, 10 mins hand massage with steam, polish</p>
                        </div>
                    </li>

                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Gel Manicure</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Gel Manicure</span>
                                <div class="ms-auto fs-16 text-dark-gray val" >$43</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Gel Manicure with enhancement removal</span>
                                <div class="ms-auto fs-16 text-dark-gray val">$53</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="pricing-table-style-12 pe-15px md-pe-0 appear anime-child anime-complete spa-menu"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <li class="justify-content-center mt-3">
                        <h5 class="text-yellow alt-font fs-25 mb-0 h6" style="color:#284d2d">Kid Services</h5>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Kid Combo</span>
                                <div class="ms-auto fs-16 text-dark-gray val">$38</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Kid Manicure</span>
                                <div class="ms-auto fs-16 text-dark-gray val" >$15</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Kid Pedicure</span>
                                <div class="ms-auto fs-16 text-dark-gray val">$25</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Gel add on mani/pedi</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$15</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Polish change</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$10</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Gel polish change</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$20</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="pricing-table-style-12 pe-15px md-pe-0 appear anime-child anime-complete spa-menu"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Waxing</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Eyebrows</span>
                                <div class="ms-auto fs-16 text-dark-gray val" >$13</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Lip</span>
                                <div class="ms-auto fs-16 text-dark-gray val">$10</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Chin</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$13+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Side burns</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$17+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Full face</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$45+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Back</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$55+</div>
                            </div>
                        </div>
                    </li>
                    <!--<li class="last-paragraph-no-margin" style="">-->
                    <!--    <div class="ms-15px me-15px xs-ms-0 flex-grow-1">-->
                    <!--        <div class="d-flex align-items-center w-120 fs-18">-->
                    <!--            <span class="fs-16 text-dark-gray main-val" >Brazilian</span>-->

                    <!--            <div class="ms-auto fs-16 text-dark-gray val" >$50+</div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</li>-->
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Under Arm</span>
                                <div class="ms-auto fs-16 text-dark-gray val">$27+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Half Arm</span>
                                <div class="ms-auto fs-16 text-dark-gray val" >$32+</div>
                            </div>
                        </div>
                    </li>
                    <!--<li class="last-paragraph-no-margin" style="">-->
                    <!--    <div class="ms-15px me-15px xs-ms-0 flex-grow-1">-->
                    <!--        <div class="d-flex align-items-center w-120 fs-18">-->
                    <!--            <span class="fs-16 text-dark-gray main-val" >Chin</span>-->

                    <!--            <div class="ms-auto fs-16 text-dark-gray val" >$10+</div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</li>-->
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Half Legs</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$42+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Full arm</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$52+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Full legs</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$62+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Bikini</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$50+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Brazilian</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$65+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Chest</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$50</div>
                            </div>
                        </div>
                    </li>
                    <!--<li class="last-paragraph-no-margin" style="">-->
                    <!--    <div class="ms-15px me-15px xs-ms-0 flex-grow-1">-->
                    <!--        <div class="d-flex align-items-center w-120 fs-18">-->
                    <!--            <span class="fs-16 text-dark-gray main-val" >Stomach</span>-->

                    <!--            <div class="ms-auto fs-16 text-dark-gray val" >$25</div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</li>-->
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="pricing-table-style-12 pe-15px md-pe-0 appear anime-child anime-complete spa-menu"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Acrylic</h6>
                    </li>
                    <li class="last-paragraph-no-margin pb-0" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Fullset Gel</span>

                                <div class="ms-auto fs-16 text-dark-gray val">
                                    $59+
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Full set Color powder</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$53+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val" >Full set Ombre</span>

                                <div class="ms-auto fs-16 text-dark-gray val" >$65+</div>
                            </div>
                        </div>
                    </li>
                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Refill</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Refill Gel</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$55+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Refill Color powder same color</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$43+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Refill color powder diff color</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$48+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Refill ombre</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$55+ / $60+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Refill pink and white</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$55+ / $60+</div>
                            </div>
                        </div>
                    </li>
                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Dipping</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Dip powder</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$52+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Dip powder Ombre</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$65+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Dip powder French<br>(tips add-on $5+)</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$65+</div>
                            </div>
                        </div>
                    </li>
                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Gel X</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Full set</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$60+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Full set medium length</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$65+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Full set long/ extra-long</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$70+</div>
                            </div>
                        </div>
                    </li>

                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Nails add-ons</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Special shape</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$5</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Longer length</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$5-$25+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Reshape to different shape</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$5+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Cuticle trim with service</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$5</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">French design (base on curve)</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$10-$30+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Design</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$10+</div>
                            </div>
                        </div>
                    </li>

                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Nail repairs</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">w/ service</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$5+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">w/o service</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$10+</div>
                            </div>
                        </div>
                    </li>

                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Removals</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Acrylic, gel X w/ service</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$5</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Acrylic, Dipping, Gel X w/o services</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$15</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Gel polish w/o service</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$10</div>
                            </div>
                        </div>
                    </li>

                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Gel Builder</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Fullset</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$60+</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Refill</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$50+</div>
                            </div>
                        </div>
                    </li>

                    <li class="justify-content-center mt-3">
                        <h6 class="text-yellow alt-font fs-25 mb-0" style="color:#284d2d">Add-ons</h6>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Extra Massage (w/ service)</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$2/min</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Paraffin Wax</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$10</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Gel polish add-on</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$20</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Acrylic toe</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$7</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Acrylic toe refill</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$5</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Regular polish changes</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$15</div>
                            </div>
                        </div>
                    </li>
                    <li class="last-paragraph-no-margin" style="">
                        <div class="ms-15px me-15px xs-ms-0 flex-grow-1">
                            <div class="d-flex align-items-center w-120 fs-18">
                                <span class="fs-16 text-dark-gray main-val">Gel polish change</span>

                                <div class="ms-auto fs-16 text-dark-gray val">$30</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
</main>
<?php require('../../includes/footer.php'); ?>
</body>
