<?php
require_once '../Controller/DBController.php';
require_once '../Controller/Auth.php';
require_once '../Models/customers.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['customer'])) {
    $db = new DBController();

    if ($db->openConnection()) {
        $user = $_SESSION['customer'];
    }
} else {
    header("Location: login.php");
    exit();
}

$errMsg = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['delete-confirm']) && $_POST['delete-confirm'] === 'CONFIRM') {
        $customerId = $user['customersid'];


        $deleteQuery = "DELETE FROM customers WHERE customersid = $customerId";

        $result = $db->getConnection()->query($deleteQuery);

        if ($result) {
            session_destroy();
            header("Location: login.php?deleted=true");
            exit();
        } else {
            $errMsg = "Error deleting account. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Echo Gifts</title>
    <link rel="icon" type="image/png" href="img/l.png">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-icons.css">
    <link rel="stylesheet" type="text/css" href="css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="css/color-switcher.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <header id="header-wrap">
        <?php
        include '../Controller/top-bar.php';
        $active = 'privacy-setting';
        include '../Controller/header.php';
        ?>
    </header>

    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Privacy Setting</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.php">Home /</a></li>
                            <li class="current">Privacy Setting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <?php include '../Controller/profileBar.php'; ?>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="page-content">
                        <div class="inner-box">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title">Privacy Settings</h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <form class="row form-dashboard" method="POST">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="privacy-box privacysetting">
                                            <div class="dashboardboxtitle">
                                                <h2>Settings</h2>
                                            </div>
                                            <div class="dashboardholder">
                                                <ul>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="privacysettingsone">
                                                            <label class="custom-control-label"
                                                                for="privacysettingsone">Make my profile photo
                                                                public</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="privacysettingstwo">
                                                            <label class="custom-control-label"
                                                                for="privacysettingstwo">I want to receive monthly
                                                                newsletter</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="privacysettingsthree">
                                                            <label class="custom-control-label"
                                                                for="privacysettingsthree">I want to receive e-mail
                                                                notifications of offers/messages</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="privacysettingsfour">
                                                            <label class="custom-control-label"
                                                                for="privacysettingsfour">I want to receive e-mail
                                                                alerts about new listings</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="privacysettingsfive">
                                                            <label class="custom-control-label"
                                                                for="privacysettingsfive">Enable offers/messages option
                                                                in all my ads Post</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button class="btn btn-common" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="privacy-box deleteaccount">
                                            <div class="dashboardboxtitle">
                                                <h2>Delete Account</h2>
                                            </div>
                                            <div class="dashboardholder">
                                                <span> Are you sure you want to delete the account? Type CONFIRM to proceed.</span>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="delete-confirm" placeholder="Type CONFIRM to delete account"></textarea>
                                                </div>
                                                <button class="btn btn-common" type="submit">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../Controller/footer.php'; ?>

    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.min.js"></script>
    <script src="js/summernote.js"></script>
</body>

</html>