<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoWood Podovi | <?= $pageTitle ?></title>
    <link rel="preload" href="assets/css/main.min.css?v=1.0.8" as="style">
    <link rel="preload" href="assets/js/app.js?v=1.0.4" as="script">
    <meta name="description" content="JoWood |  Kompanija za izradu podova od drveta. Royal Oak program podova. <?php echo $ogDesc; ?>">
    <meta name="author" content="https://cedomirivanovic.global-webmasters.com/">
    <meta name="robots" content="index, follow">
    <meta name="copyright" content="Jovan Grahovac, JoWood">
    <meta name="rating" content="general">
    <!-- Open Graph Meta -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="JoWood Podovi | <?php echo $pageTitle; ?>">
    <meta property="og:url" content="https://jowood.ba/<?php echo $ogUrl; ?>">
    <meta property="og:image" content="https://jowood.ba/<?php echo $ogImg; ?>">
    <meta property="og:description" content="JoWood |  Kompanija za izradu podova od drveta. Royal Oak program podova. <?php echo $ogDesc; ?>">
    <meta property="business:contact_data:street_address" content="Skendera Kulenovića 14">
    <meta property="business:contact_data:locality" content="Banja Luka">
    <meta property="business:contact_data:postal_code" content="78000">
    <meta property="business:contact_data:country_name" content="Bosnia and Herzegovina">
    <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/x-icon">
    <!-- Css -->
    <link rel="stylesheet" href="node_modules/lightbox2/src/css/lightbox.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <?php /* <link rel="stylesheet" href="node_modules/aos/dist/aos.css"> */ ?>
    <link rel="stylesheet" href="assets/css/main.min.css?v=1.0.8">
    <!-- Canonical -->
    <link rel="canonical" href="https://jowood.ba/<?php echo $ogUrl; ?>">
    <!-- Scripts -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/9ebe8cbaa6.js" crossorigin="anonymous"></script>
    <!-- Schema org -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "LocalBusiness",
            "@id": "https://jowood.ba",
            "name": "JoWood | Proizvodnja podova",
            "image": "https://jowood.ba/assets/img/logo/jowood-logo.png",
            "telephone": "+38766221588",
            "url": "https://jowood.ba",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Skendera Kulenovića 14",
                "addressLocality": "Banja Luka",
                "postalCode": "78000",
                "addressCountry": "Bosnia and Herzegovina"
            },
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "20:00"
            }],
            "sameAs": []
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WBN7087GJC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WBN7087GJC');
    </script>
    <?php
    require('functions.php');
    ?>
</head>