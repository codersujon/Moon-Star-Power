<?php
    $pageTitle = isset($pageTitle) ? $pageTitle : "Moon Star Power & Technology";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon.svg">
</head>
<body>
    <div class="boxed_wrapper">
        <div class="preloader"></div> 

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
                                                <p>Niketan, Gulshan-1, Dhaka-1212</p>    
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
                                <div class="headers1-button">
                                    <a class="btn-one" href="contact.php">
                                        <b>Consultation</b><span class="icon-null"></span>
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
                                <div class="navbar-header clearfix">       
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