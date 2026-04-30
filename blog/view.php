<?php
$rootPath = realpath(__DIR__ . '/../');
$slug = trim($uri_parts[1]);
$slug = preg_replace('/[^a-zA-Z0-9-_]/', '', $slug);
$blogs = json_decode(file_get_contents($rootPath.'/blog/blog.json'), true);

$seoArray = [];
$blog_content = null;
// Loop through the blogs and find the matching slug
foreach ($blogs as $blog) {
    if ($blog['slug'] == $slug) {
        $seoArray['title'] = $blog['title'];
        $seoArray['description'] = $blog['summary'];
        $seoArray['keywords'] = implode(', ', explode(' ', $blog['title']));
        $seoArray['image'] = $blog['image'];
        $blog_content = $blog;
        break;
    }
}
require($rootPath . '/includes/head.php');
?>

<body class="overflow-x-hidden" data-mobile-nav-style="classic">
    <?php require($rootPath . '/includes/header.php'); ?>
<main> 
    <section class="page-title-parallax-background bg-dark-gray ipad-top-space-margin position-relative" data-parallax-background-ratio="0.5" style="background-image: url(<?php echo $WEBSITE ?>/assets/images/demo-spa-salon-treatments-title-bg.jpg)">
        <div class="opacity-extra-medium bg-gradient-nero-grey-brown"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center position-relative page-title-extra-large">
                    <div class="d-flex flex-column extra-small-screen">
                        <div class="mt-auto">
                            <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-400 ls-minus-1px" style="font-size:3rem;"><?php if($blog_content){ echo $blog_content["title"]; } ?></h1>
                        </div>

                        <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 text-white">
                            <ul>
                                <li><a href="<?php echo $WEBSITE; ?>" class="text-white">Home</a></li>
                                <li><?php if($blog_content){ echo $blog_content["slug"]; } ?></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="background-repeat position-relative overlap-height">
        <div class="position-absolute left-minus-40px top-50px z-index-2 d-none d-lg-inline-block skrollable skrollable-between" data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(100px)" style="transform: translateY(-30px);">
            <img src="<?php echo $WEBSITE ?>/assets/images/pattern/Pattern-01.png?new1" alt="Executive nails spa side image" data-no-retina="" style="width: 40%">
        </div>
        <div class="position-absolute right-minus-150px bottom-150px z-index-minus-2 d-none d-lg-inline-block skrollable skrollable-between" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" style="transform: translateY(-30px);">
            <img src="<?php echo $WEBSITE ?>/assets/images/pattern/Pattern-02.png?new1" alt="Executive nails spa side second image" data-no-retina="" style="width: 80%">
        </div>
        <div class="container overlap-gap-section">
            <?php if ($blog_content){ ?>
            <div class="row justify-content-center mb-4">
                    <div class="col-md-6 col-sm-12 text-center">
                        <h2 class="alt-font ls-minus-1px text-base-color h3"><?php echo $blog_content['title'] ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 detail_blog">
                        <ul>
                            <?php
                            foreach ($blog_content['content'] as $item) {
                            ?>
                                <li>
                                    <h3 class="alt-font ls-minus-1px xl-w-80 sm-w-100 mx-auto mb-15px" style="color:#284d2d"><?php echo $item['title'] ?></h3>
                                    <?php
                                    if (isset($item['description'])) {
                                    ?>
                                        <p style="color:#36332e"><?php echo $item['description'] ?></p>
                                    <?php
                                    }
                                    ?>
                                    <?php if (isset($item['pros'])) { ?>
                                        <h4 class="alt-font ls-minus-1px text-yellow xl-w-80 sm-w-100 mx-auto mb-0" style="color:#284d2d">Pros :</h4>
                                        <?php foreach ($item['pros'] as $pros) { ?>
                                            <ul class="list_ul" style="color:#36332e">
                                                <li>
                                                    <?php echo $pros; ?>
                                                </li>
                                            </ul>
                                        <?php } ?>
                                        <h4 class="alt-font ls-minus-1px text-yellow xl-w-80 sm-w-100 mx-auto mb-0 my-3" style="color:#284d2d">Cons :</h4>
                                        <?php foreach ($item['cons'] as $cons) { ?>
                                            <ul class="list_ul" style="color:#36332e">
                                                <li>
                                                    <?php echo $cons; ?>
                                                </li>
                                            </ul>
                                        <?php } ?>
                                    <?php
                                    }
                                    ?>

                                </li>
                                <div class="image-container my-3">
                                    <?php
                                    if (isset($item['image'])) {
                                        $image = $WEBSITE . $item['image'];
                                    ?>
                                        <img src="<?php echo $image ?>" alt="Executive nails spa Blog image" style="" data-no-retina="">
                                    <?php
                                    }

                                    ?>
                                </div>
                            <?php
                            }

                            ?>

                        </ul>
                    </div>
                </div>
            <?php
            } ?>
        </div>
    </section>
</main>   
    <?php require($rootPath . '/includes/footer.php'); ?>