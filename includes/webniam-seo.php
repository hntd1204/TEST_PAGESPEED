<?php
// Define your titles with slugs as keys

// Extract the current URI
$request_uri = $_SERVER['REQUEST_URI'];

// Remove the leading '/' and any query stringss
$request_uri = parse_url($request_uri, PHP_URL_PATH); // Extract only the path

// Trim leading and trailing slashes
$request_uri = trim($request_uri, '/');

// Split the URI into parts
$uri_parts = explode('/', $request_uri);

// Initialize variables
$slug = '';

// Check if the URI has the expected parts
if (isset($uri_parts[0]) && $uri_parts[0] === 'services' &&
   isset($uri_parts[1]) && !empty($uri_parts[1])) {
require("titles.php");
if(array_key_exists($uri_parts[1], $titles)){
    // Get the slug
    $slug = $uri_parts[1];

// Initialize variables for title and description
$title = '';
$description = '';
$title = $titles[htmlspecialchars($slug)];
$description = 'Are you looking for "' . $title . '"? Yes, you are in the right place. We are here to offer you the best spa and nail services. Let\'s connect with us to see how we can enhance your experience and meet your needs.';

$seoArray = [
    "title"       => htmlspecialchars($title),
    "description" => $description,
    "keywords"    => str_replace(' ', ', ', $title),
];
require('includes/head.php');
?>

<body data-mobile-nav-style="classic">
<style>
.pcs {
    padding-top: 5rem;
}

@media (max-width: 767px) {
.pcs {
        padding-top: 8.75rem;
    }
}
.footer-dark, .footer-dark a, .footer-dark p {
    color: #d0d3d8;
}
.bg-extra-medium-slate-blue {
    background-color: #0c0d0f;
}
</style>
<?php require('includes/header.php'); ?>
<section class="page-title-big-typography bg-dark py-md-10 py-sm-6">
        <div class="container pcs">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 position-relative text-center">
                    <h1 class="m-auto text-white text-shadow-double-large display-3 ls-minus-3px xs-ls-minus-2px"><?php echo htmlspecialchars($title); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
<div class="mb-6 mb-lg-0" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
    <h2 class="my-4 display-6 text-dark" itemprop="name">Are you looking for "<?php echo htmlspecialchars($title); ?>"?</h2>  
<div class="text-dark"><i class="bi bi-patch-check-fill text-base-color"></i> Your query has been successfully matched with our services!</div>
    <div class="mb-4 bg-primary bg-opacity-10 text-dark px-2 py-4 rounded" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div itemprop="text">
<p class="fs-24 px-md-4 px-sm-2">
    Indeed, you've come to the right place. Our dedicated team is committed to delivering exceptional service tailored to your needs, ensuring that your requirements are met promptly and efficiently.
    <br><br>
    We invite you to connect with us to explore how we can enhance your spa and nail experience. Let's work together to make your visit unforgettable.
</p>

       </div>
    </div>
    <div>
    <a href="https://executivenailsspawestuniversity.com/pages/contact-us/" class="btn btn-large btn-base-color btn-green-hover btn-box-shadow btn-rounded mt-15px sm-mt-10px">Contact Us</a>
    <a href="https://executivenailsspawestuniversity.com/pages/menu/" class="btn btn-large btn-transparent-base-color btn-green-hover btn-box-shadow btn-rounded mt-15px sm-mt-10px">Our Menu</a>
    </div>
  </div>
<hr class="my-2">
<div class="col-md-12 text-end">
<p class="fs-7 text-dark" rel="nofollow"><strong>Want to report this post?</strong><br> Please contact us.</p>
</div>
        </div>
    </div>
    </div>
</section>
<?php require('includes/footer.php'); ?>
</body>
</html>
<?php exit;  }} ?>
