<?php require("pre-setting.php"); ?>
<!doctype html>
<html class="no-js" lang="<?= $website_primary_language; ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <meta name="author" content="<?= $website_name; ?>">
    <meta name="theme-color" content="<?= $website_primary_color; ?>">

    <link rel="dns-prefetch" href="<?= $website_url; ?>">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- SEO -->
    <?php if (isset($seoArray) && is_array($seoArray)) { ?>
        <title><?= htmlspecialchars($seoArray["title"] ?? "", ENT_QUOTES, 'UTF-8') ?></title>
        <meta name="description" content="<?= htmlspecialchars($seoArray["description"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
        <link rel="canonical" href="<?= htmlspecialchars($seoArray["page_url"] ?? "", ENT_QUOTES, 'UTF-8') ?>">
    <?php } ?>

    <!-- Favicon -->
    <link rel="icon" href="/assets/images/Favicon.png">

    <!-- ================= CSS NON-BLOCKING ================= -->

    <!-- Preload CSS -->
    <link rel="preload" href="/assets/css/vendors.min2.css?v=1" as="style">
    <link rel="preload" href="/assets/css/style.min2.css?v=1" as="style">
    <link rel="preload" href="/assets/css/responsive.min2.css?v=1" as="style">
    <link rel="preload" href="/assets/css/blog2.css?v=1" as="style">
    <link rel="preload" href="/assets/css/spa-salon2.css?v=1" as="style">

    <!-- Load CSS async -->
    <link rel="stylesheet" href="/assets/css/vendors.min2.css?v=1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/assets/css/style.min2.css?v=1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/assets/css/responsive.min2.css?v=1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/assets/css/blog2.css?v=1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/assets/css/spa-salon2.css?v=1" media="print" onload="this.media='all'">

    <!-- Fallback -->
    <noscript>
        <link rel="stylesheet" href="/assets/css/vendors.min2.css?v=1">
        <link rel="stylesheet" href="/assets/css/style.min2.css?v=1">
        <link rel="stylesheet" href="/assets/css/responsive.min2.css?v=1">
        <link rel="stylesheet" href="/assets/css/blog2.css?v=1">
        <link rel="stylesheet" href="/assets/css/spa-salon2.css?v=1">
    </noscript>

    <!-- Font Awesome (async) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        media="print" onload="this.media='all'">

    <!-- Google Fonts (non-blocking) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400;700&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Rufina:wght@400;700&display=swap" rel="stylesheet">
    </noscript>

    <!-- ================= CUSTOM CSS ================= -->
    <style>
        :root {
            --focus-outline-color: #d39121;
        }

        a:focus,
        button:focus,
        input:focus,
        select:focus,
        textarea:focus {
            outline: 1px solid var(--focus-outline-color);
        }

        @media (min-width: 992px) {
            #navbar {
                background-color: #0000002d;
            }
        }
    </style>

</head>