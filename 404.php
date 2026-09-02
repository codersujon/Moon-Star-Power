<?php
    $pageTitle = "404 - Page Not Found | Moon Star Power & Technology";
    $pageDescription = "The page you are looking for could not be found. Return to Moon Star Power & Technology homepage to explore our lift, generator, substation and solar solutions.";

    require_once 'includes/header.php';
?>

<!-- Start Error Page Area -->
<section class="error-page-area py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-content text-center">

                    <!-- Subtitle Fade In Down -->
                    <span class="wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">Page Not Found</span>

                    <!-- Big 404 Text Zoom In Effect -->
                    <div class="title wow zoomIn" data-wow-delay="200ms" data-wow-duration="1200ms">404</div>

                    <!-- Description Text Fade In Up -->
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        We’re sorry, but the page you are looking for
                        could not be found. It may have been moved,
                        deleted, or the URL may be incorrect.
                    </p>

                    <!-- Back to Home Button Bounce In Effect -->
                    <div class="button wow bounceIn" data-wow-delay="600ms" data-wow-duration="1200ms">
                        <a class="btn-three" href="index.php">
                            Back to Home
                            <span class="icon-null"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Error Page Area -->

<!-- Force Trigger JS Animation script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (typeof WOW === 'function') {
            new WOW().init();
        }
    });
</script>

<?php require_once 'includes/footer.php'; ?>

