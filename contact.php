<?php
    $pageTitle = "Contact - Moon Star Power & Technology";
    require_once 'includes/header.php';
?> 
        <!--Start breadcrumb area-->     
        <section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
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
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-form-text-box">
                            <div class="inner">
                                <div class="icon-holder wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
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
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <div class="inner">
                                <form id="contact-form" name="contact_form" class="default-form" action="sendmail.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <select class="selectmenu" name="form_subject" required>
                                                    <option value="" selected>Discuss About</option>
                                                    <option value="Installation">Installation</option>
                                                    <option value="Maintenance">Maintenance</option>
                                                    <option value="Monitoring">Monitoring</option>
                                                    <option value="Consultation">Consultation</option>
                                                    <option value="Roof Solution">Roof Solution</option>
                                                    <option value="Inverter Repair">Inverter Repair</option>
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
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-contact-details-box text-center">
                            <div class="image-box">
                                <img src="/images/resources/contact-details-1.jpg" alt="Awesome Image">
                            </div>
                            <div class="text">
                                <p>Ph: (+880) 1911-284405<br> Email: msptl.amr@gmail.com</p>
                                <a class="btn-two" href="#">Schedule for Call<span class="icon-null"></span></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-contact-details-box text-center">
                            <div class="google-map-box">
                                <div 
                                    class="google-map" 
                                    id="contact-google-map" 
                                    data-map-lat="23.708536" 
                                    data-map-lng="90.380998" 
                                    data-icon-path="/images/resources/map-marker.png" 
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
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-contact-details-box text-center">
                            <div class="image-box">
                                <img src="/images/resources/contact-details-2.jpg" alt="Awesome Image">
                            </div>
                            <div class="text">
                                <p>We’re here to help with any question<br> of our customers.</p>
                                <a class="btn-two" href="#">Customers FAQ’s<span class="icon-null"></span></a>    
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="emergency-call wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                            <h6>Any Emergency? Call our 24/7 customer support team at <span>+880 1911-284405</span></h6>
                        </div>
                    </div>
                </div> 
            </div>
        </section>  
        <!--End Contact Details Area-->
        
<?php  require_once 'includes/footer.php';  ?>