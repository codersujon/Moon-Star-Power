<?php 
    $pageTitle = "Contact Us | Moon Star Power & Technology"; 
    $pageDescription = "Contact Moon Star Power & Technology for complete solutions in lifts, generators, substations, solar systems, transformers, LT & HT switchgear and PFI panels in Bangladesh."; 
    
    require_once 'includes/header.php'; 
?>
    <!--Start breadcrumb area-->     
    <section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="title float-left">
                            <h1>Get Touch With Us</h1>
                        </div>
                        <div class="breadcrumb-menu float-right">
                            <ul class="clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start contact form area-->
    <section class="contact-info-area">
        <div class="container">
            <div class="row">
                <!-- Left Text Box Slide In From Left -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="contact-form-text-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner">
                            <div class="icon-holder wow zoomIn" data-wow-delay="400ms" data-wow-duration="1000ms">
                                <span class="flaticon-envelope"></span>
                            </div>
                            <div class="sec-title">
                                <p>Drop Us a Line</p>
                                <div class="title">Send Your Message</div>
                                <div class="border-box"></div>
                            </div>
                            <div class="inner-content">
                                <h2>Leave your<br> information here and get<br> reply from our expert.</h2>
                            </div>
                        </div>
                    </div>      
                </div>

                <!-- Right Form Slide In From Right -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="contact-form wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1200ms">
                        <div class="inner">
                            <form id="contact-form" name="contact_form" class="default-form consultation-form" action="sendmail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-box">
                                            <select class="selectpicker" name="form_subject" data-width="100%" required>
                                                <option value="" disabled selected>Discuss About</option>
                                                <option>Installation</option>
                                                <option>Maintenance</option>
                                                <option>Monitoring</option>
                                                <option>Consultation</option>
                                                <option>Roof Solution</option>
                                                <option>Inverter Repair</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box"> 
                                            <input type="text" name="form_phone" value="" placeholder="Phone" required>
                                        </div>    
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-box">   
                                            <input type="text" name="form_name" value="" placeholder="Your Name" required>
                                        </div>    
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box"> 
                                            <input type="email" name="form_email" value="" placeholder="Email Address" required>
                                        </div>    
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-box">    
                                            <textarea name="form_message" placeholder="Your Message..." required></textarea>
                                        </div>   
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="btn-three" type="submit" data-loading-text="Please wait...">Send Your Message<span class="icon-null"></span></button>    
                                        </div>     
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End contact form area-->

    <!--Start Contact Details Area-->
    <section class="contact-details-area">
        <div class="container">
            <div class="row">
                <!-- Box 1: Phone & Email -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-contact-details-box text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1200ms">
                        <div class="image-box">
                            <img src="images/resources/contact-details-1.jpg" alt="Contact Phone">
                        </div>
                        <div class="text">
                            <p>Ph: (+880) 1911-284405<br> Email: msptl.amr@gmail.com</p>
                            <span class="btn-two">Schedule for Call<span class="icon-null"></span></span>    
                        </div>
                    </div>
                </div>

                <!-- Box 2: Google Map & Address -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-contact-details-box text-center wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1200ms">
                        <div class="google-map-box">
                            <div 
                                class="google-map" 
                                id="contact-google-map" 
                                data-map-lat="23.708536" 
                                data-map-lng="90.380998" 
                                data-icon-path="images/resources/map-marker.png" 
                                data-map-title="Moon Star Power & Technology" 
                                data-map-zoom="12" 
                                data-markers='{
                                    "marker-1": [23.708536, 90.380998, "<h4>Moon Star Power & Technology</h4><p>Mahtab Saban Factory Rd, Keraniganj, Dhaka</p>"]
                                }'>
                            </div>   
                        </div>
                        <div class="text">
                            <p>H# 86, Fl: B-1, Rd: 10/1, Blk: D, Niketan, Gulshan-1, Dhaka-1212, Bangladesh.</p>
                            <a class="btn-two" target="_blank" href="https://maps.app.goo.gl/hqWia2mrtGz7JLJ1A">View Full Map<span class="icon-null"></span></a>  
                        </div>     
                    </div>
                </div>

                <!-- Box 3: Support & FAQ -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-contact-details-box text-center wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1200ms">
                        <div class="image-box">
                            <img src="images/resources/contact-details-2.jpg" alt="Customer Support">
                        </div>
                        <div class="text">
                            <p>We’re here to help with any question<br> of our customers.</p>
                            <span class="btn-two">Customers FAQ’s<span class="icon-null"></span></span>    
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Emergency Call Bounce Effect -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="emergency-call wow bounceIn" data-wow-delay="200ms" data-wow-duration="1200ms"> 
                        <h6>Any Emergency? Call our 24/7 customer support team at <span>+880 1911-284405</span></h6>
                    </div>
                </div>
            </div> 
        </div>
    </section>  
    <!--End Contact Details Area-->

    <!--Start Branches section-->
    <section class="branches-section">
        <div class="container inner-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="branches-carousel owl-carousel owl-theme">
                        <!--Start Single Branches Box-->
                        <div class="single-branches-box text-center">
                            <div class="title-box"><h3>KHULNA OFFICE:</h3></div>
                            <ul>
                                <li>(+880) 1911-284405</li>
                                <li>msptl.amr@gmail.com</li>
                            </ul> 
                            <div class="text">
                                <p>House: 38, Road: 05, Sonadanga R/A (1st Phase), Khulna.</p>
                            </div>  
                        </div>
                        <!--End Single Branches Box-->
                        <!--Start Single Branches Box-->
                        <div class="single-branches-box text-center">
                            <div class="title-box"><h3>BRANCH OFFICE:</h3></div>
                            <ul>
                                <li>(+880) 1911-284405</li>
                                <li>msptl.amr@gmail.com</li>
                            </ul> 
                            <div class="text">
                                <p>Jannat Monjil, House: 149, Road: 03, Block: A, Bashundhara River View, South Keranigonj, Dhaka-1311.</p>
                            </div>  
                        </div>
                        <!--End Single Branches Box-->
                        <!--Start Single Branches Box-->
                        <div class="single-branches-box text-center">
                            <div class="title-box"><h3>KHULNA OFFICE:</h3></div>
                            <ul>
                                <li>(+880) 1911-284405</li>
                                <li>msptl.amr@gmail.com</li>
                            </ul> 
                            <div class="text">
                                <p>House: 38, Road: 05, Sonadanga R/A (1st Phase), Khulna.</p>
                            </div>  
                        </div>
                        <!--End Single Branches Box-->
                        <!--Start Single Branches Box-->
                        <div class="single-branches-box text-center">
                            <div class="title-box"><h3>FACTORY ADDRESS:</h3></div>
                            <ul>
                                <li>(+880) 1911-284405</li>
                                <li>msptl.amr@gmail.com</li>
                            </ul> 
                            <div class="text">
                                <p>Saban Factory Road, Shuvadda Purbo Para, South Keranigonj, Dhaka-1310</p>
                            </div>  
                        </div>
                        <!--End Single Branches Box-->
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="our-all-branches wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                        <h6>We have successfully running <span>2 branches</span> in Bangladesh.</h6>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!--End Branches section-->
        
<?php  require_once 'includes/footer.php';  ?>