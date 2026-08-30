<?php
    $pageTitle = "404-Page - Moon Star Power & Technology";
    require_once 'includes/header.php';
?>    

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                    <h2>PFI Panel Board</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">PFI Panel</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area--> 

<!--Start Project single area-->
<section class="project-single-area" style="padding: 60px 0;">
    <div class="container">
        
        <!-- Project Images Header -->
        <div class="row mb-5">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="single-project-image-box">
                    <img src="images/projects/6.jpg" alt="Moon Star PFI Panel Project 1" class="img-fluid rounded shadow" style="width: 100%; height: 350px; object-fit: cover;">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="single-project-image-box">
                    <img src="images/projects/PFI/PFI-1.jpeg" alt="Moon Star PFI Panel Project 2" class="img-fluid rounded shadow" style="width: 100%; height: 350px; object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- Main Project Content -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="single-project-content-box">
                    
                    <!-- Title Section -->
                    <div class="section-title text-center mb-5">
                        <span class="text-primary font-weight-bold" style="letter-spacing: 1px; text-transform: uppercase;">Energy Efficiency & Power Quality</span>
                        <h2 class="mt-2 font-weight-bold" style="color: #1a1a1a;">Automatic Power Factor Improvement (PFI) Panels</h2>
                        <h4 class="text-muted mt-2">Invest in Safety, Optimal Efficiency & Reduced Utility Penalties Across Bangladesh</h4>
                    </div>

                    <!-- Introduction -->
                    <div class="text lead-text mb-5" style="color: #444; font-size: 1.05rem; line-height: 1.8;">
                        <p>Welcome to <strong>Moon Star Power & Technology</strong>! Building on our long-standing expertise in substation engineering and industrial electrical infrastructure, we manufacture state-of-the-art <strong>Automatic Power Factor Improvement (PFI) Panels</strong>. Designed to eliminate reactive power wastage, prevent utility low power factor penalties (imposed by BPDB/REB for PF < 0.90), reduce cable overheating, and stabilize plant voltage, our PFI panels are essential for modern commercial and industrial facilities.</p>
                    </div>

                    <!-- Key Highlights / Important Points (Card Grid) -->
                    <h3 class="font-weight-bold mb-4" style="color: #1a1a1a;">Key Performance Highlights</h3>
                    <div class="row mb-5">
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card border-0 shadow-sm p-3 text-center h-100" style="background: #f8f9fa;">
                                <div class="mb-3 text-primary"><i class="fa fa-line-chart fa-2x"></i></div>
                                <h5 class="font-weight-bold">Zero Utility Surcharge</h5>
                                <p class="small text-muted mb-0">Maintains target power factor above 0.98 to eliminate electrical grid penalties.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card border-0 shadow-sm p-3 text-center h-100" style="background: #f8f9fa;">
                                <div class="mb-3 text-success"><i class="fa fa-leaf fa-2x"></i></div>
                                <h5 class="font-weight-bold">Energy Savings</h5>
                                <p class="small text-muted mb-0">Reduces kVAR demand, lowering heat losses in plant transformers and cables.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card border-0 shadow-sm p-3 text-center h-100" style="background: #f8f9fa;">
                                <div class="mb-3 text-warning"><i class="fa fa-microchip fa-2x"></i></div>
                                <h5 class="font-weight-bold">Automatic Switching</h5>
                                <p class="small text-muted mb-0">Microprocessor APFC relays dynamically regulate capacitor bank steps.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card border-0 shadow-sm p-3 text-center h-100" style="background: #f8f9fa;">
                                <div class="mb-3 text-info"><i class="fa fa-shield fa-2x"></i></div>
                                <h5 class="font-weight-bold">Harmonic Protection</h5>
                                <p class="small text-muted mb-0">Heavy-duty capacitors engineered to handle non-linear industrial loads safely.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Concept: Power Factor & Calculation -->
                    <div class="content-block mb-5">
                        <h3 class="font-weight-bold mb-3" style="color: #1a1a1a;">Understanding Power Factor & Sizing Calculation</h3>
                        <p style="color: #555; line-height: 1.8;">Electrical loads like induction motors, transformers, and HVAC compressors consume active power ($kW$) for real work and reactive power ($kVAR$) for magnetic fields. Excess reactive power degrades overall system efficiency. To determine the necessary PFI capacity, our engineering team utilizes exact load sizing calculations:</p>
                        <div class="bg-light p-4 rounded border my-3">
                            <code style="font-size: 1.05rem; color: #0056b3; font-weight: bold;">Required kVAR = Total kW × [ tan(arccos(PF_old)) - tan(arccos(PF_new)) ]</code>
                            <p class="small text-muted mt-2 mb-0">For instance, elevating a 500 kW industrial facility from a low 0.75 PF up to 0.98 target PF requires precise multi-step capacitor sizing to avoid both under-correction and over-correction hazards.</p>
                        </div>
                    </div>

                    <!-- Component Breakdown -->
                    <div class="content-block mb-5 p-4 rounded" style="background-color: #f1f4f8; border-left: 5px solid #0056b3;">
                        <h3 class="font-weight-bold mb-3" style="color: #1a1a1a;">World-Class Component Sourcing</h3>
                        <p class="mb-4" style="color: #555;">At <strong>Moon Star Power & Technology</strong>, we integrate tier-1 global hardware to prevent capacitor rupture, fire risks, and contactor welding:</p>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="bg-white p-3 rounded shadow-sm h-100">
                                    <h5 class="font-weight-bold text-dark border-bottom pb-2"><i class="fa fa-database text-primary mr-2"></i> Heavy-Duty Capacitors</h5>
                                    <p class="small text-muted"><strong>EPCOS (TDK Japan Tech)</strong> & <strong>ABB (India)</strong> gas-filled/dry-type self-healing capacitors with built-in overpressure disconnector protection.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="bg-white p-3 rounded shadow-sm h-100">
                                    <h5 class="font-weight-bold text-dark border-bottom pb-2"><i class="fa fa-cogs text-primary mr-2"></i> Smart APFC Relays</h5>
                                    <p class="small text-muted"><strong>mikro (Malaysia)</strong> automatic digital power factor controllers providing precise RMS measurements, THD monitoring, and automatic step rotation.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="bg-white p-3 rounded shadow-sm h-100">
                                    <h5 class="font-weight-bold text-dark border-bottom pb-2"><i class="fa fa-exchange text-primary mr-2"></i> Switching Contactors</h5>
                                    <p class="small text-muted"><strong>Hyundai (Korea)</strong> & <strong>Donga (Korea)</strong> specialized duty contactors fitted with damping resistors to suppress high inrush currents.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comparison Table -->
                    <div class="content-block mb-5">
                        <h3 class="font-weight-bold mb-4" style="color: #1a1a1a;">Moon Star PFI Panel vs. Conventional Local Panels</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Evaluation Feature</th>
                                        <th>Moon Star Power PFI Panel</th>
                                        <th>Substandard Local Panels</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Energy Savings</strong></td>
                                        <td class="text-success font-weight-bold">Guaranteed 0.98+ PF (Zero Penalty)</td>
                                        <td class="text-danger">Inaccurate step switching & recurring penalties</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Capacitor Quality</strong></td>
                                        <td class="text-success">EPCOS / ABB Dry-Type Duty</td>
                                        <td class="text-danger">Low-grade oil capacitors prone to explosion</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Inrush Protection</strong></td>
                                        <td class="text-success">Damping resistor contactors integrated</td>
                                        <td class="text-danger">Standard contactors prone to contact welding</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Equipment Life</strong></td>
                                        <td class="text-success">Extends transformer & cable lifespan</td>
                                        <td class="text-danger">Causes excessive overheating and harmonics</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Why Choose Us -->
                    <div class="content-block mb-5">
                        <h3 class="font-weight-bold mb-3" style="color: #1a1a1a;">Why Partner with Moon Star Power & Technology?</h3>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <p style="color: #555;"><i class="fa fa-check text-primary mr-2"></i> <strong>Comprehensive Site Energy Audits:</strong> Data logger measurements to determine precise kVAR and harmonic levels.</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p style="color: #555;"><i class="fa fa-check text-primary mr-2"></i> <strong>Detuned Reactor Options:</strong> Custom detuned filter reactors added to safeguard against non-linear harmonic distortion.</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p style="color: #555;"><i class="fa fa-check text-primary mr-2"></i> <strong>Powder-Coated Enclosures:</strong> Heavy-gauge sheet metal cubicles designed for optimum heat dissipation and ventilation.</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p style="color: #555;"><i class="fa fa-check text-primary mr-2"></i> <strong>Lifetime Technical Support:</strong> Routine inspection, step testing, and after-sales service across Bangladesh.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Call To Action -->
                    <div class="cta-box text-center p-5 rounded text-white" style="background: linear-gradient(135deg, #0056b3, #0088cc);">
                        <h3 class="text-white font-weight-bold mb-3">Eliminate Power Factor Penalties & Reduce Electricity Bills</h3>
                        <p class="mb-4" style="font-size: 1.1rem;">Contact Moon Star Power & Technology today to schedule a site power factor assessment and get a customized PFI panel quotation.</p>
                        <a href="contact.php" class="btn btn-warning btn-lg font-weight-bold px-4 py-2 text-uppercase">Request PFI Panel Quote</a>
                    </div>

                </div>   
            </div>
        </div>
    </div>
</section>
<!--End Project single area-->

<?php  require_once 'includes/footer.php';  ?>