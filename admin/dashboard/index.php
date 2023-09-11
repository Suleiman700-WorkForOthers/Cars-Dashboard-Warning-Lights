<?php
require_once '../../server/config/CONSTANTS.php';
require_once '../../server/classes/Session.php';
$pageTitle = "Dashboard | " . $CONSTANTS['APP_NAME'];
require_once '../includes/prevent-non-logged.php';
?>

<!doctype html>
<html lang="en">
<?php
    require_once '../../includes/page-head.php';
?>
<body class="template-index">
<!-- Start Page Loader -->
<div class="page-loading"></div>
<!-- End Page Loader -->

<!--  Start Main Wrapper -->
<div class="main-wrapper cart-drawer-push">
    <!-- Start Promotional Bar Section -->
    <div class="promotional-bar border-0 rounded-0 d-flex align-items-center alert alert-warning fade show" role="alert">
        <div class="container-fluid full-promotional-bar">
        </div>
    </div>
    <!-- End Promotional Bar Section -->

    <!-- Start Header Section -->
    <header class="header bg-white">
        <div class="container-fluid full-header">
            <div class="d-flex justify-content-between align-items-center">
                <?php
                    require_once '../includes/top-navbar.php';
                ?>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Start Main Content -->
    <main class="main-content">
        <!-- Start Banner Slidershow Section -->
        <div class="ymm-slideshow position-relative sections-spacing">
            <!-- Start Slidershow Banner -->
            <div class="slideshow slideshow-banner">
                <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url(../../assets/images/slider/banner-0.jpg);">
                    <div class="container slideshow-details" style="top: 50%;">
                        <h3>Find Common Cars Problems</h3>
                        <p>Quickly find and fix your car problems</p>
                        <!--                                <a href="shop-grid-left-sidebar.html" class="btn btn-primary">Buy now!</a>-->
                    </div>
                </div>
                <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url(../../assets/images/slider/banner-2.jpg);">
                    <div class="container slideshow-details" style="top: 50%;">
                        <h3>Fix It Yourself</h3>
                        <p>With our professional guides you can fix it yourself</p>
                        <!--                                <a href="shop-grid-left-sidebar.html" class="btn btn-primary">Buy now!</a>-->
                    </div>
                </div>
            </div>
            <!-- End Slidershow Banner -->
        </div>
        <!-- End Banner Slidershow Section -->

        <!-- What We Offer Section -->
        <div class="video-information sections-spacing">
            <div class="container">
                <div class="row d-sm-flex flex-sm-row align-items-sm-center">
                    <div class="col-12 text-center video-info">
                        <div class="section-header">
                            <h2>What We Offers</h2>
                            <p>Wide selection of services to choose from</p>
                        </div>
                        <div class="row storeFeatures">
                            <div class="col-12 col-sm-4 feature-item text-center">
                                <img class="img-fluid blur-up lazyload" src="../../assets/images/icons/car.png" data-src="../../assets/images/icons/car.png" alt="image" title="image" style="width: 48px;" />
                                <h5>Dashboard Lights</h5>
                                <span>Find dashboard warning lights description and how-tos</span>
                            </div>
                            <div class="col-12 col-sm-4 feature-item text-center">
                                <img class="img-fluid blur-up lazyload" src="../../assets/images/icons/car-service.png" data-src="../../assets/images/icons/car-service.png" alt="image" title="image" style="width: 48px;" />
                                <h5>Find A Garage</h5>
                                <span>Find a garages near your place</span>
                            </div>
                            <div class="col-12 col-sm-4 feature-item text-center">
                                <img class="img-fluid blur-up lazyload" src="../../assets/images/icons/phonebook.png" data-src="../../assets/images/icons/phonebook.png" alt="image" title="image" style="width: 48px;" />
                                <h5>Find A Mechanic</h5>
                                <span>Find a mechanic near your place</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Offer Section -->

        <!-- Start Four Banner Section -->
        <div class="home-four-banner sections-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 banner-1">
                        <div class="small-banner-1 position-relative">
                            <a class="animate-scale" href="javascript:void(0)"><img class="img-fluid blur-up lazyload" src="../../assets/images/slider/banner-0.jpg" data-src="../../assets/images/slider/banner-0.jpg" alt="image" title="image" style="width: 570px; height: 448px; object-fit: cover; filter: blur(3px);" /></a>
                            <div class="banner-details">
                                <h3>Dashboard <span>Lights</span></h3>
                                <p>Check dashboard warning lights</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Check Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 banner-23">
                        <div class="row mb-5">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="small-banner-2 position-relative">
                                    <a class="animate-scale" href="javascript:void(0)">
                                        <img class="img-fluid blur-up lazyload w-100" src="../../assets/images/slider/banner/maps.jpg" data-src="../../assets/images/slider/banner/maps.jpg" alt="image" title="image" style="width: 270px; height: 210px; object-fit: cover; filter: blur(3px);" />
                                        <div class="banner-details d-flex align-items-center h-100">
                                            <h3>Find A <strong>Garage</strong></h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="small-banner-3 position-relative">
                                    <a class="animate-scale" href="javascript:void(0)">
                                        <img class="img-fluid blur-up lazyload w-100" src="../../assets/images/slider/banner/phone-call.jpg" data-src="../../assets/images/slider/banner/phone-call.jpg" alt="image" title="image" style="width: 270px; height: 210px; object-fit: cover; filter: blur(3px);" />
                                        <div class="banner-details text-center d-flex align-items-center h-100">
                                            <h3 class="">Contact <strong>Mechanic</strong></h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="small-banner-2 position-relative">
                                    <a class="animate-scale" href="javascript:void(0)">
                                        <img class="img-fluid blur-up lazyload w-100" src="../../assets/images/slider/banner-2.jpg" data-src="../../assets/images/slider/banner-2.jpg" alt="image" title="image" style="width: 540px; height: 210px; object-fit: cover; filter: blur(3px);" />
                                        <div class="banner-details d-flex align-items-center h-100">
                                            <h3>Repair It <strong>Yourself</strong></h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Four Banner Section -->

        <!-- Start Browse By Car Make Section -->
        <div class="popular-product sections-spacing">
            <div class="container">
                <div class="title-btn clearfix">
                    <div class="section-header">
                        <h2>Browse By Car Make</h2>
                        <p>Browse the huge variety of cars</p>
                    </div>
                </div>
                <div class="row row-sp row-eq-height" id="cars-cards">
                    <!--                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
                    <!--                                <div class="product-item">-->
                    <!--                                    <div class="product-image-action">-->
                    <!--                                        <div class="product-image">-->
                    <!--                                            <a href="product-details.html">-->
                    <!--                                                <img class="img-fluid blur-up lazyload" src="../../assets/images/cars/logos/toyota.png" data-src="../../assets/images/cars/logos/toyota.png" alt="image" title="image" style="width: 300px; height: 300px; object-fit: contain;" />-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product-details">-->
                    <!--                                        <h3 class="product-title"><strong>Toyota</strong></h3>-->
                    <!--                                        <h4 class="product-vendor">Toyota dashboard warning lights</h4>-->
                    <!--                                        <a href="javascript:void(0)" class="btn btn-primary">Open</a>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
                    <!--                                <div class="product-item">-->
                    <!--                                    <div class="product-image-action">-->
                    <!--                                        <div class="product-image">-->
                    <!--                                            <a href="product-details.html">-->
                    <!--                                                <img class="img-fluid blur-up lazyload" src="../../assets/images/cars/logos/renault.png" data-src="../../assets/images/cars/logos/renault.png" alt="image" title="image" style="width: 300px; height: 300px; object-fit: contain;" />-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product-details">-->
                    <!--                                        <h3 class="product-title"><strong>Renault</strong></h3>-->
                    <!--                                        <h4 class="product-vendor">Renault dashboard warning lights</h4>-->
                    <!--                                        <a href="javascript:void(0)" class="btn btn-primary">Open</a>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
                    <!--                                <div class="product-item">-->
                    <!--                                    <div class="product-image-action">-->
                    <!--                                        <div class="product-image">-->
                    <!--                                            <a href="product-details.html">-->
                    <!--                                                <img class="img-fluid blur-up lazyload" src="../../assets/images/cars/logos/bmw.png" data-src="../../assets/images/cars/logos/bmw.png" alt="image" title="image" style="width: 300px; height: 300px; object-fit: contain;" />-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product-details">-->
                    <!--                                        <h3 class="product-title"><strong>BMW</strong></h3>-->
                    <!--                                        <h4 class="product-vendor">BMW dashboard warning lights</h4>-->
                    <!--                                        <a href="javascript:void(0)" class="btn btn-primary">Open</a>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
                    <!--                                <div class="product-item">-->
                    <!--                                    <div class="product-image-action">-->
                    <!--                                        <div class="product-image">-->
                    <!--                                            <a href="product-details.html">-->
                    <!--                                                <img class="img-fluid blur-up lazyload" src="../../assets/images/cars/logos/audi.png" data-src="../../assets/images/cars/logos/audi.png" alt="image" title="image" style="width: 300px; height: 300px; object-fit: contain;" />-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product-details">-->
                    <!--                                        <h3 class="product-title"><strong>Audi</strong></h3>-->
                    <!--                                        <h4 class="product-vendor">Audi dashboard warning lights</h4>-->
                    <!--                                        <a href="javascript:void(0)" class="btn btn-primary">Open</a>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
                    <!--                                <div class="product-item">-->
                    <!--                                    <div class="product-image-action">-->
                    <!--                                        <div class="product-image">-->
                    <!--                                            <a href="product-details.html">-->
                    <!--                                                <img class="img-fluid blur-up lazyload" src="../../assets/images/cars/logos/kia.png" data-src="../../assets/images/cars/logos/kia.png" alt="image" title="image" style="width: 300px; height: 300px; object-fit: contain;" />-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product-details">-->
                    <!--                                        <h3 class="product-title"><strong>Kia</strong></h3>-->
                    <!--                                        <h4 class="product-vendor">Kia dashboard warning lights</h4>-->
                    <!--                                        <a href="javascript:void(0)" class="btn btn-primary">Open</a>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
                    <!--                                <div class="product-item">-->
                    <!--                                    <div class="product-image-action">-->
                    <!--                                        <div class="product-image">-->
                    <!--                                            <a href="product-details.html">-->
                    <!--                                                <img class="img-fluid blur-up lazyload" src="../../assets/images/cars/logos/hyundai.png" data-src="../../assets/images/cars/logos/hyundai.png" alt="image" title="image" style="width: 300px; height: 300px; object-fit: contain;" />-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product-details">-->
                    <!--                                        <h3 class="product-title"><strong>Hyundai</strong></h3>-->
                    <!--                                        <h4 class="product-vendor">Hyundai dashboard warning lights</h4>-->
                    <!--                                        <a href="javascript:void(0)" class="btn btn-primary">Open</a>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
                    <!--                                <div class="product-item">-->
                    <!--                                    <div class="product-image-action">-->
                    <!--                                        <div class="product-image">-->
                    <!--                                            <a href="product-details.html">-->
                    <!--                                                <img class="img-fluid blur-up lazyload" src="../../assets/images/cars/logos/mercedes.png" data-src="../../assets/images/cars/logos/mercedes.png" alt="image" title="image" style="width: 300px; height: 300px; object-fit: contain;" />-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product-details">-->
                    <!--                                        <h3 class="product-title"><strong>Mercedes</strong></h3>-->
                    <!--                                        <h4 class="product-vendor">Mercedes dashboard warning lights</h4>-->
                    <!--                                        <a href="javascript:void(0)" class="btn btn-primary">Open</a>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">-->
                    <!--                                <div class="product-item">-->
                    <!--                                    <div class="product-image-action">-->
                    <!--                                        <div class="product-image">-->
                    <!--                                            <a href="product-details.html">-->
                    <!--                                                <img class="img-fluid blur-up lazyload" src="../../assets/images/cars/logos/skoda.png" data-src="../../assets/images/cars/logos/skoda.png" alt="image" title="image" style="width: 300px; height: 300px; object-fit: contain;" />-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="product-details">-->
                    <!--                                        <h3 class="product-title"><strong>Skoda</strong></h3>-->
                    <!--                                        <h4 class="product-vendor">Skoda dashboard warning lights</h4>-->
                    <!--                                        <a href="javascript:void(0)" class="btn btn-primary">Open</a>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                </div>
            </div>
        </div>
        <!-- End Browse By Car Make Section -->
    </main>
    <!-- End Main Content -->

    <!-- Start Footer Section -->
    <?php
    require_once '../../includes/page-scripts.php';
    ?>
    <!-- End Footer Section -->

    <!-- Start Scroll Top -->
    <div id="scrollTop"><i class="ti-arrow-up"></i></div>
    <!-- End Scroll Top -->

    <!-- Overlay -->
    <div class="overlay"></div>

</div>
<!--  End Main Wrapper -->

<script src="./js/init.js" type="module"></script>

</body>
</html>