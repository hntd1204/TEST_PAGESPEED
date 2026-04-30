<?php require("pre-setting.php"); ?>
<!doctype html>
<html class="no-js" lang="<?= $website_primary_language; ?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="<?= $website_name; ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="author" content="Nivisco">
<link rel="dns-prefetch" href="<?= $website_url; ?>">
    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="<?= $website_primary_color; ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= $website_primary_color; ?>">
    <link rel="preload" href="https://fastcashhomebuyerstexas.com/assets/css/style.min2.css" as="style">
    
<?php if(isset($seoArray) && is_array($seoArray)){ ?>

    <title><?= htmlspecialchars($seoArray["title"] ?? "", ENT_QUOTES, 'UTF-8') ?></title>
    <meta name='title' content="<?= htmlspecialchars($seoArray["title"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
    <meta name='description' content="<?= htmlspecialchars($seoArray["description"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
    <meta name='keywords' content="<?= htmlspecialchars($seoArray["keywords"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
    <meta property='og:title' content="<?= htmlspecialchars($seoArray["title"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
    <meta property='og:description' content="<?= htmlspecialchars($seoArray["description"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
    <meta property='og:url' content='<?= htmlspecialchars($seoArray["page_url"] ?? "", ENT_QUOTES, 'UTF-8') ?>'>
    <link rel='canonical' href='<?= htmlspecialchars($seoArray["page_url"] ?? "", ENT_QUOTES, 'UTF-8') ?>'>
    <meta name='twitter:card' content='summary_large_image'>
    <meta name='twitter:title' content="<?= htmlspecialchars($seoArray["title"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
    <meta name='twitter:description' content="<?= htmlspecialchars($seoArray["description"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
    <meta property='og:image' content='<?= htmlspecialchars($seoArray["image"] ?? "", ENT_QUOTES, 'UTF-8') ?>'>
    <meta name='twitter:image' content='<?= htmlspecialchars($seoArray["image"] ?? "", ENT_QUOTES, 'UTF-8') ?>'>
<?php } ?>


   <?php if(isset($is_home)){ ?>
    <link rel="preload" fetchpriority="high" as="image" href="https://executivenailsspawestuniversity.com/assets/images/demo-spa-salon-slider-0001.webp" type="image/jpg">
    <link rel="preload" fetchpriority="high" as="image" href="https://executivenailsspawestuniversity.com/assets/images/demo-spa-salon-slider-01.webp" type="image/jpg">
    <link rel="preload" fetchpriority="high" as="image" href="https://executivenailsspawestuniversity.com/assets/images/demo-spa-salon-slider-02.webp" type="image/jpg">
    
    <?php /* removed preload images
    <link rel="preload" fetchpriority="high" as="image" href="https://executivenailsspawestuniversity.com/assets/images/Pedi.webp" type="image/jpg">
      <link rel="preload" fetchpriority="high" as="image" href="https://executivenailsspawestuniversity.com/assets/images/demo-spa-salon-home-12.webp" type="image/jpg">
       <link rel="preload" fetchpriority="high" as="image" href="https://executivenailsspawestuniversity.com/assets/images/Mani.jpg" type="image/jpg">
    */  ?>
    
   
   
    <?php } ?>
    


    <link rel="shortcut icon" href="<?php echo $WEBSITE . 'assets/images/Favicon.png'; ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
 
     <?php /* Removed css files
         <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/icon.min.css"/>
         
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"/>
     */  ?>
   
   <!--boostrap -->
    <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/vendors.min2.css"/> 
    <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/blog2.css" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/style.min2.css" />
    <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/responsive.min2.css" media="print" onload="this.media='all'"  />
    <link rel="stylesheet" href="<?php echo $WEBSITE . 'assets/' ?>css/spa-salon2.css" media="print" onload="this.media='all'" /> 


<style>
    --focus-outline-color: #d39121; /* Define the color variable */
}/* Ensuring focus styles are visible for keyboard users */
a:focus,button:focus,input:focus,select:focus,textarea:focus{
    outline:1px solid var(--focus-outline-color);
    box-shadow:0 0 0 1px transparent;}
/* Optional - for accessibility-friendly design */
a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible, textarea:focus-visible {
    outline:1px solid var(--focus-outline-color);
    box-shadow:0 0 0 1px transparent;}
/* Removes focus outline for non-keyboard navigation */
a:focus:not(:focus-visible), button:focus:not(:focus-visible), input:focus:not(:focus-visible), 
select:focus:not(:focus-visible), textarea:focus:not(:focus-visible) {
    outline: none;
    box-shadow: none;}
    
.swiper-number-pagination-style-02 .swiper-number .swiper-pagination-bullet{
    color:white !important;
    }
        
 @media (min-width: 992px) {
    #navbar{
      background-color: #0000002d; /* Semi-transparent black */
    }
  }        
</style>
</head>

