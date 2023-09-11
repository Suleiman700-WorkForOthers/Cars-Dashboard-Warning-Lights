<?php
require_once '../../server/config/CONSTANTS.php';
require_once '../../server/classes/Session.php';
$pageTitle = "Login | " . $CONSTANTS['APP_NAME'];

// Redirect to dashboard if already logged-in
$Session = new Session();
if ($Session->isLogged()) {
    header('Location: ../dashboard/index.php');
    die;
}
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
    <!-- Start Header Section -->
    <header class="header bg-white">
        <div class="container-fluid full-header">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Start Navigation -->
                <?php
                require_once '../includes/top-navbar.php';
                ?>
                <!-- Start Navigation -->
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Start Promotional Bar Section -->
    <div class="promotional-bar border-0 rounded-0 d-flex align-items-center alert alert-warning fade show" role="alert">
        <div class="container-fluid full-promotional-bar">
        </div>
    </div>
    <!-- End Promotional Bar Section -->

    <!-- Start Main Content -->
    <main class="main-content">
        <div class="video-information sections-spacing">
            <div class="container">
                <div class="row d-sm-flex flex-sm-row align-items-sm-center pt-5">
                    <div class="col-12 text-center" id="login-form">
                        <div class="section-header">
                            <h2>Admin Login</h2>
                            <p>Log into your admin dashboard</p>
                        </div>
                        <div class="row storeFeatures d-flex justify-content-center">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="input-email" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="input-password" placeholder="Password">
                                </div>
                                <button class="btn btn-primary" id="btn-login">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
