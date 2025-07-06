<?php
require_once '../Controller/Auth.php';
require_once '../Models/customers.php';

$errMsg = null;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['customer']) && isset($_COOKIE['remember_me'])) {
    $db = new DBController();
    
    if ($db->openConnection()) {
        $id = $_COOKIE['remember_me'];
        $result = $db->runQuery("SELECT * FROM customers WHERE customersid = '$id'");

        if (!empty($result)) {
            $_SESSION['customer'] = $result[0];
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $customer = new customers(); 
    $customer->customers(null, $email, $password, null);

    $loginResult = Auth::logIn($customer);

    if ($loginResult === true) {
        header("Location: index-2.php");
        exit();
    } else {
        $errMsg = $loginResult; 
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

        <?php include '../Controller/top-bar.php'; ?>

        <?php include '../Controller/header.php'; ?>


        </header>


        <div class="page-header" style="background: url(img/banner1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper">
                            <h2 class="product-title">Login</h2>
                            <ol class="breadcrumb">
                                <li><a href="index-2.php">Home /</a></li>
                                <li class="current">Login</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="login section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-12 col-xs-12">
                        <div class="login-form login-area">
                            <h3>
                                Login Now
                            </h3>

                            <?php

                            if ($errMsg==1) {
                                ?>
                                <div class="error-box">
                                    Wrong Password. Please Try Again.
                                </div>
                                <?php
                            } elseif ($errMsg==2) {
                                ?>
                                <div class="error-box">
                                    Wrong Email Address. Please Try Again.
                                </div>
                                <?php
                            } elseif ($errMsg==3) {
                                ?>
                                <div class="error-box">
                                    Database Connection Error. Please Try Again.
                                </div>
                                <?php
                            }
                            ?>

                            <form role="form" class="login-form" method="post">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-user"></i>
                                        <input type="email" id="em" class="form-control" placeholder="Email" name="email"
                                            minlength="4"
                                            maxlength="20"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="lni-lock"></i>
                                        <input type="password" id="pass" class="form-control" placeholder="Password" name="password"
                                            minlength="4"
                                            maxlength="20"
                                            pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{4,20}"
                                            title="Password must be between 4 and 20 characters and include at least one uppercase letter, one lowercase letter, and one number."
                                            required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkedall" name="remember_me">
                                        <label class="custom-control-label" for="checkedall">Keep me logged in</label>
                                    </div>
                                    <a class="forgetpassword" href="forgot-password.php">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-common log-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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