<?phprequire_once '../../server/config/CONSTANTS.php';$pageTitle = "Car Model Data | " . $CONSTANTS['APP_NAME'];?><!doctype html><html>    <?php        require_once '../../includes/page-head.php';    ?>    <body class="template-index">        <!-- Start Page Loader -->        <div class="page-loading"></div>        <!-- End Page Loader -->        <!--  Start Main Wrapper -->        <div class="main-wrapper cart-drawer-push">            <!-- Start Promotional Bar Section -->            <div class="promotional-bar border-0 rounded-0 d-flex align-items-center alert alert-warning fade show" role="alert">                <div class="container-fluid full-promotional-bar"><!--                    <span>Shop with discount 50%. Hurry Up! <a href="#">Shop Now</a></span>--><!--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button>-->                </div>            </div>            <!-- End Promotional Bar Section -->            <!-- Start Header Section -->            <header class="header bg-white">                <div class="container-fluid full-header">                    <div class="d-flex justify-content-between align-items-center">                        <!-- Start Navigation -->                        <?php                            require_once '../../includes/top-navbar.php';                        ?>                        <!-- Start Navigation -->                        <!-- Start Logo -->                        <div class="navbar-brand logo mx-auto p-0 text-center">                            <a href="index.html" class="logo-img"><img class="img-fluid" src="../../assets/images/logo/logo.png" alt="logo" title="Posh Auto Parts" /></a>                        </div>                        <!-- End Logo -->                        <!-- Start Right Menu -->                        <div class="w-50 right-side">                            <!-- Start Setting Menu -->                            <div class="setting-menu float-right">                                <a href="#" class="setting-toggle" title="My Account">                                    <i class="icon ti-settings"></i>                                </a>                                <div class="settinglinks" style="display:none">                                    <!-- Menu Links -->                                    <div class="my-links">                                        <h4>My Account</h4>                                        <ul class="p-0 m-0">                                            <li><a href="login.html">Login</a></li>                                            <li><a href="register.html">Register</a></li>                                            <li><a href="wishlist.html">Wishlist</a></li>                                            <li><a href="compare.html">Compare</a></li>                                        </ul>                                    </div>                                    <!-- Emd Menu Links -->                                    <!-- Start Currency Picker -->                                    <div class="my-currency">                                        <h4>Currency</h4>                                        <ul class="currency-picker">                                            <li class="item"><a href="#"><i class="fa fa-usd"></i> USD</a></li>                                            <li class="item"><a href="#"><i class="fa fa-eur"></i> EUR</a></li>                                            <li class="item"><a href="#"><i class="fa fa-gbp"></i> GBP</a></li>                                            <li class="item"><a href="#"><i class="fa fa-inr"></i> INR</a></li>                                        </ul>                                    </div>                                    <!-- End Currency Picker -->                                    <!-- Start Languages -->                                    <div class="my-languages">                                        <h4>Languages</h4>                                        <ul class="languages-picker">                                            <li class="item english"><a href="#">English</a></li>                                            <li class="item french"><a href="#">French</a></li>                                            <li class="item spanish"><a href="#">Spanish</a></li>                                            <li class="item germany"><a href="#">German</a></li>                                        </ul>                                    </div>                                    <!-- End Languages -->                                </div>                            </div>                            <!-- End Setting Menu -->                        </div>                        <!-- End Right Menu -->                    </div>                </div>            </header>            <!-- End Header Section -->            <!-- Start Main Content -->            <main class="main-content">                <!-- Start Banner Slidershow Section -->                <div class="ymm-slideshow position-relative sections-spacing">                    <!-- Start Slidershow Banner -->                    <div class="slideshow slideshow-banner">                    </div>                    <!-- End Slidershow Banner -->                </div>                <!-- End Banner Slidershow Section -->                <!-- What We Offer Section -->                <div class="video-information sections-spacing">                    <div class="container">                        <div class="row d-sm-flex flex-sm-row align-items-sm-center">                            <div class="col-12 text-center video-info">                                <div class="section-header">                                    <h2><span id="car-model-manufacturer"></span> <span id="car-model-name"></span></h2>                                    <h4 id="car-model-years"></h4>                                </div>                                <div class="row d-flex justify-content-center">                                    <img class="img-fluid" width="50%" id="car-model-image" src="" alt="">                                </div>                                <div class="mt-5">                                    <nav>                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">                                            <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">                                                Description                                            </button>                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">                                                Warning Lights                                            </button>                                        </div>                                    </nav>                                    <div class="tab-content" id="nav-tabContent">                                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">                                            <div class="mt-5" id="car-model-description"></div>                                        </div>                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">                                            <div class="mt-5" id="warning-lights">                                            </div>                                        </div>                                    </div>                                    <div class="row storeFeatures" hidden>                                        <div class="col-12 col-sm-4 feature-item text-center">                                            <img class="img-fluid blur-up lazyload" src="../../assets/images/icons/car.png" data-src="../../assets/images/icons/car.png" alt="image" title="image" style="width: 48px;" />                                            <h5>Dashboard Lights</h5>                                            <span>Find dashboard warning lights description and how-tos</span>                                        </div>                                        <div class="col-12 col-sm-4 feature-item text-center">                                            <img class="img-fluid blur-up lazyload" src="../../assets/images/icons/car-service.png" data-src="../../assets/images/icons/car-service.png" alt="image" title="image" style="width: 48px;" />                                            <h5>Find A Garage</h5>                                            <span>Find a garages near your place</span>                                        </div>                                        <div class="col-12 col-sm-4 feature-item text-center">                                            <img class="img-fluid blur-up lazyload" src="../../assets/images/icons/phonebook.png" data-src="../../assets/images/icons/phonebook.png" alt="image" title="image" style="width: 48px;" />                                            <h5>Find A Mechanic</h5>                                            <span>Find a mechanic near your place</span>                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </div>                <!-- End What We Offer Section -->                <!-- Start Four Banner Section -->                <div class="home-four-banner sections-spacing">                    <div class="container">                        <div class="row">                            <div class="col-12 col-sm-12 col-md-6 banner-1">                                <div class="small-banner-1 position-relative">                                    <a class="animate-scale" href="javascript:void(0)"><img class="img-fluid blur-up lazyload" src="../../assets/images/slider/banner-0.jpg" data-src="../../assets/images/slider/banner-0.jpg" alt="image" title="image" style="width: 570px; height: 448px; object-fit: cover; filter: blur(3px);" /></a>                                    <div class="banner-details">                                        <h3>Dashboard <span>Lights</span></h3>                                        <p>Check dashboard warning lights</p>                                        <a href="javascript:void(0)" class="btn btn-primary">Check Now!</a>                                    </div>                                </div>                            </div>                            <div class="col-12 col-sm-12 col-md-6 banner-23">                                <div class="row mb-5">                                    <div class="col-12 col-sm-6 col-md-6">                                        <div class="small-banner-2 position-relative">                                            <a class="animate-scale" href="javascript:void(0)">                                                <img class="img-fluid blur-up lazyload w-100" src="../../assets/images/slider/banner/maps.jpg" data-src="../../assets/images/slider/banner/maps.jpg" alt="image" title="image" style="width: 270px; height: 210px; object-fit: cover; filter: blur(3px);" />                                                <div class="banner-details d-flex align-items-center h-100">                                                    <h3>Find A <strong>Garage</strong></h3>                                                </div>                                            </a>                                        </div>                                    </div>                                    <div class="col-12 col-sm-6 col-md-6">                                        <div class="small-banner-3 position-relative">                                            <a class="animate-scale" href="javascript:void(0)">                                                <img class="img-fluid blur-up lazyload w-100" src="../../assets/images/slider/banner/phone-call.jpg" data-src="../../assets/images/slider/banner/phone-call.jpg" alt="image" title="image" style="width: 270px; height: 210px; object-fit: cover; filter: blur(3px);" />                                                <div class="banner-details text-center d-flex align-items-center h-100">                                                    <h3 class="">Contact <strong>Mechanic</strong></h3>                                                </div>                                            </a>                                        </div>                                    </div>                                </div>                                <div class="row">                                    <div class="col-12">                                        <div class="small-banner-2 position-relative">                                            <a class="animate-scale" href="javascript:void(0)">                                                <img class="img-fluid blur-up lazyload w-100" src="../../assets/images/slider/banner-2.jpg" data-src="../../assets/images/slider/banner-2.jpg" alt="image" title="image" style="width: 540px; height: 210px; object-fit: cover; filter: blur(3px);" />                                                <div class="banner-details d-flex align-items-center h-100">                                                    <h3>Repair It <strong>Yourself</strong></h3>                                                </div>                                            </a>                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </div>                <!-- End Four Banner Section -->                <!-- Start Browse By Car Make Section -->                <div class="popular-product sections-spacing">                    <div class="container">                        <div class="title-btn clearfix">                            <div class="section-header">                                <h2>Browse By Car Make</h2>                                <p>Browse the huge variety of cars</p>                            </div>                        </div>                        <div class="row row-sp row-eq-height" id="cars-cards">                        </div>                    </div>                </div>                <!-- End Browse By Car Make Section -->            </main>            <!-- End Main Content -->            <!-- Start Footer Section -->            <?php                require_once '../../includes/page-footer.php';                require_once '../../includes/page-scripts.php';            ?>            <!-- End Footer Section -->            <!-- Start Scroll Top -->            <div id="scrollTop"><i class="ti-arrow-up"></i></div>            <!-- End Scroll Top -->            <!-- Overlay -->            <div class="overlay"></div>        </div>        <!--  End Main Wrapper -->        <script src="./js/init.js" type="module"></script>    </body></html>