<?php

require_once '../Controller/DBController.php';
require_once '../Controller/Auth.php';
require_once '../Models/customers.php';

$errMsg = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirm-password'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];

        $customer = new customers();
        $customer->customers(null, $email, $password, $username);

        $result = Auth::register($customer, $confirmPassword);

        if ($result === true) {
            header("Location: login.php");
            exit();
        } else {
            $errMsg = $result;
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

        <?php include '../Controller/top-bar.php'; ?>

        <?php include '../Controller/header.php'; ?>


    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Join Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.php">Home /</a></li>
                            <li class="current">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="register section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="register-form login-area">
                        <h3>Register</h3>
                        <?php

                            if ($errMsg==1) {
                                ?>
                                <div class="error-box">
                                    Passwords Doesn't Match. Please Try Again.
                                </div>
                                <?php
                            } elseif ($errMsg==2) {
                                ?>
                                <div class="error-box">
                                    Email Already Exists. Please Try Again.
                                </div>
                                <?php
                            }elseif ($errMsg==3) {
                                ?>
                                <div class="error-box">
                                    Error Inserting. Please Try Again.
                                </div>
                                <?php
                            } elseif ($errMsg==4) {
                                ?>
                                <div class="error-box">
                                    Database connection error. Please Try Again.
                                </div>
                                <?php
                            }
                            ?>
                        <form class="login-form" action="#" method="post">
                            <!-- Username -->
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" id="Name" class="form-control" name="username"
                                        placeholder="Username" minlength="4" maxlength="20" required>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-envelope"></i>
                                    <input type="email" id="sender-email" class="form-control" name="email"
                                        placeholder="Email Address" required>
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password"
                                        minlength="4" maxlength="20" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{4,20}"
                                        title="Password must be between 4 and 20 characters and include at least one uppercase letter, one lowercase letter, and one number."
                                        required>
                                </div>
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" id="confirm-password" class="form-control" name="confirm-password"
                                        placeholder="Retype Password" minlength="4" maxlength="20" required>
                                </div>
                            </div>
                            <!-- Terms and Conditions -->
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkedall" required>
                                    <label class="custom-control-label" for="checkedall">By registering, you accept our
                                        Terms & Conditions</label>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-common log-btn">Register</button>
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