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
        $active = 'offermesseges';
        include '../Controller/header.php'; 
        ?>


    </header>

    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Offers/Messages</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.php">Home /</a></li>
                            <li class="current">Messages</li>
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
                                <h2 class="dashbord-title">Chats/Messages</h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <div class="dashboard-wrapper">
                                    <form class="row offers-messages">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                            <div class="offers-box">
                                                <div class="dashboardboxtitle">
                                                    <h2>User</h2>
                                                </div>
                                                <ul class="offers-user-online">
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <span class="bolticon"></span>
                                                        <div class="user-name">
                                                            <h3>John Douglas</h3>
                                                            <h4><a href="#">Online</a></h4>
                                                        </div>
                                                    </li>
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <div class="user-name">
                                                            <h3>Martin Descker</h3>
                                                            <h4><a href="#">Offline</a></h4>
                                                        </div>
                                                    </li>
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <span class="bolticon"></span>
                                                        <div class="user-name">
                                                            <h3>Kim Bauer</h3>
                                                            <h4><a href="#">Online</a></h4>
                                                        </div>
                                                    </li>
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <div class="user-name">
                                                            <h3>James Miller</h3>
                                                            <h4><a href="#">Offline</a></h4>
                                                        </div>
                                                    </li>
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <span class="bolticon"></span>
                                                        <div class="user-name">
                                                            <h3>John Douglas</h3>
                                                            <h4><a href="#">Online</a></h4>
                                                        </div>
                                                    </li>
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <div class="user-name">
                                                            <h3>Sarah Higgle</h3>
                                                            <h4><a href="#">Offline</a></h4>
                                                        </div>
                                                    </li>
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <span class="bolticon"></span>
                                                        <div class="user-name">
                                                            <h3>Fred Aster</h3>
                                                            <h4><a href="#">Online</a></h4>
                                                        </div>
                                                    </li>
                                                    <li class="offerer">
                                                        <figure>
                                                            <img src="img/author/img1.jpg" alt="">
                                                        </figure>
                                                        <span class="bolticon"></span>
                                                        <div class="user-name">
                                                            <h3>Fred Aster</h3>
                                                            <h4><a href="#">Online</a></h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                                            <div class="chat-message-box">
                                                <div class="dashboardboxtitle">
                                                    <h2>Chat Messages</h2>
                                                </div>
                                                <div class="offerermessage">
                                                    <figure>
                                                        <img src="img/author/img1.jpg" alt="">
                                                    </figure>
                                                    <div class="description">
                                                        <div class="info">
                                                            <h3>Meagan Miller</h3>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry</p>
                                                        </div>
                                                        <div class="date">June 21, 2018</div>
                                                    </div>
                                                </div>
                                                <div class="memessage readmessage">
                                                    <figure>
                                                        <img src="img/author/img1.jpg" alt="">
                                                    </figure>
                                                    <div class="description">
                                                        <div class="info">
                                                            <h3>Meagan Miller</h3>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry</p>
                                                        </div>
                                                        <div class="text-right">
                                                            <p><a href="#">https://themeforest.net</a></p>
                                                            <p>It that ok?</p>
                                                            <div class="date">Jun 28, 2017 09:30</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="offerermessage">
                                                    <figure>
                                                        <img src="img/author/img1.jpg" alt="">
                                                    </figure>
                                                    <div class="description">
                                                        <div class="info">
                                                            <h3>Meagan Miller</h3>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry</p>
                                                        </div>
                                                        <div class="date">June 21, 2018</div>
                                                    </div>
                                                </div>
                                                <div class="memessage readmessage">
                                                    <figure>
                                                        <img src="img/author/img1.jpg" alt="">
                                                    </figure>
                                                    <div class="description">
                                                        <div class="info">
                                                            <h3>Meagan Miller</h3>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry</p>
                                                        </div>
                                                        <div class="text-right">
                                                            <p><a href="#">https://themeforest.net</a></p>
                                                            <p>It that ok?</p>
                                                            <div class="date">Jun 28, 2017 09:30</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="replay-box">
                                                <textarea class="form-control" name="reply"
                                                    placeholder="Type Here & Press Enter"></textarea>
                                                <div class="icon-box">
                                                    <i class="lni-thumbs-up"></i>
                                                    <i class="lni-thumbs-down"></i>
                                                    <i class="lni-emoji-smile"></i>
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