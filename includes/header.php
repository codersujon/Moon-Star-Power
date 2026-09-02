<?php
    //** Page Title */
    $pageTitle = isset($pageTitle) ? $pageTitle : "Moon Star Power & Technology | Lift, Generator, Substation & Solar";

    //** Page Description */
    $pageDescription = isset($pageDescription) ? $pageDescription : "Moon Star Power & Technology provides complete solutions for lifts, generators, substations and solar systems, including transformers, LT & HT switchgear, PFI panels and solar power solutions in Bangladesh."; 

    //** Current page URL */
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';

    $host = $_SERVER['HTTP_HOST'];

    $path = strtok($_SERVER['REQUEST_URI'], '?');

    $canonicalUrl = $protocol . $host . $path;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta -->
    <meta charset="UTF-8">

    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="Moon Star Power & Technology">

    <meta name="robots" content="index, follow">

     <!-- Canonical URL --> 
     <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Favicon --> 
    <link rel="icon" type="image/svg+xml" href="../images/favicon/favicon.svg"> 
    <link rel="apple-touch-icon" href="../images/favicon/favicon.svg">

    <!-- SEO Share Links -->
    <!-- Open Graph / Facebook --> 
    <meta property="og:type" content="website"> 
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>"> 
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>"> 
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>"> 
    <meta property="og:site_name" content="Moon Star Power & Technology"> 
    <meta property="og:image" content="https://www.moonstarpower.com/images/og-image.jpg"> 
    <meta property="og:image:width" content="1200"> <meta property="og:image:height" content="630"> 
    <meta property="og:image:alt" content="Moon Star Power & Technology"> 
    
    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image"> 
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>"> 
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>"> 
    <meta name="twitter:image" content="https://www.moonstarpower.com/images/og-image.jpg"> 
    <meta name="twitter:image:alt" content="Moon Star Power & Technology">
    
    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <div class="boxed_wrapper">

        <!-- preloader start -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-ring ring-1"></div>
                <div class="loader-ring ring-2"></div>
                <div class="loader-ring ring-3"></div>

                <div class="loader-core"></div>
            </div>
        </div>
        <!-- preloader end -->

        <!--Start header style1 area-->
        <header class="header-style1-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="header-style1 clearfix">
                            <div class="headers1-logo float-left">
                                <a href="index.php">
                                    <img src="images/resources/logo.png" alt="Moon Star Power & Technology">
                                </a>                       
                            </div>   
                            <div class="headers1-header-right float-right">
                                <ul class="header-contact-info clearfix">
                                    <li>
                                        <div class="single-item">
                                            <div class="icon">
                                                <img src="images/icon/header-icon-1.png" alt="Awesome Image">
                                            </div>
                                            <div class="text">
                                                <h3>For Visitors</h3>
                                                <p style="font-size: 14px"><strong>Factory Address:</strong> Saban Factory Road, <br> Shuvadda Purbo Para, South Keranigonj, Dhaka-1310</p>    
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-item">
                                            <div class="icon">
                                                <img src="images/icon/header-icon-2.png" alt="Awesome Image">
                                            </div>
                                            <div class="text">
                                                <h3>Mail Us On</h3> 
                                                <p>msptl.amr@gmail.com</p>   
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="headers1-button social-icons">
                                    <a href="https://www.facebook.com/moonstarpower/" class="social-icon facebook" target="_blank" aria-label="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="https://www.youtube.com/@moonstarpowertechnology" class="social-icon youtube" target="_blank" aria-label="YouTube">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </header>
        <!--End header style1 area-->
        
        <!--Start mainmenu area-->
        <section class="mainmenu-area stricky">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix d-flex justify-content-center">
                            <nav class="main-menu clearfix">
                                
                                <!-- Mobile Flex Container -->
                                <div class="mobile-nav-header">
                                    <!-- Mobile Logo -->
                                    <div class="mobile-logo">
                                        <a href="index.php">
                                            <img src="images/resources/logo.png" alt="Moon Star Power & Technology">
                                        </a>
                                    </div>

                                    <!-- Hamburger Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <?php 
                                            $currentPage = basename($_SERVER['PHP_SELF']); 
                                        ?>
                                        <li class="<?php echo ($currentPage == 'index.php') ? 'current' : ''; ?>"><a href="index.php">Home</a></li>
                                        <li class="<?php echo ($currentPage == 'about.php') ? 'current' : ''; ?>"><a href="about.php">About us</a></li>
                                        <li class="<?php echo ($currentPage == 'products.php') ? 'current' : ''; ?>"><a href="products.php">Products</a></li>
                                        <li class="<?php echo ($currentPage == 'services.php') ? 'current' : ''; ?>"><a href="services.php">Services</a></li>
                                        <li class="<?php echo ($currentPage == 'media.php') ? 'current' : ''; ?>"><a href="media.php">Media</a></li>
                                        <li class="<?php echo ($currentPage == 'contact.php') ? 'current' : ''; ?>"><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End mainmenu area-->