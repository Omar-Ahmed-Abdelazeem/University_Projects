<?php

require_once '../Controller/DBController.php';
require_once '../Models/products.php';
require_once '../Models/customers.php';
require_once '../Models/city.php';
require_once '../Models/area.php';
require_once '../Models/country.php';
require_once '../Models/category.php';

$db = new DBController;

$db->openConnection();


if (isset($_GET['productsid']) && is_numeric($_GET['productsid'])) {
    $productId = intval($_GET['productsid']);

    $q = "SELECT * FROM products
        INNER JOIN customers ON customers.customersid = products.customerid
        INNER JOIN area ON area.areaid = products.areaid
        INNER JOIN city ON area.cityid = city.cityid
        INNER JOIN country ON city.countryid = country.countryid
        INNER JOIN category ON category.categoryid = products.categoryid
        WHERE products.productsid = $productId";

    $re = $db->runQuery($q);
}

?>

<!DOCTYPE html>
<html lang="en">


<head>

    <title><?php echo htmlspecialchars($product['title'] ?? ''); ?></title>

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

        <?php include '../Controller/top-bar.php';
        $active = 'ads-details';
        include '../Controller/header.php'; ?>

    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.php">Home /</a></li>
                            <li class="current">Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (count($re) != 0): ?>


        <div class="col-lg-8 col-md-12 col-xs-12" style="transform: translateX(290px);"
            style="transform: translateY(190px);">
            <div class="ads-details-wrapper" style="transform: translateY(20px);">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-img">
                            <img class="img-fluid" src="<?php echo $re[0]['img1']; ?>" alt="">
                        </div>
                        <span class="price">FREE</span>
                    </div>
                    <div class="item">
                        <div class="product-img">
                            <img class="img-fluid" src="<?php echo $re[0]['img2']; ?>" alt="">
                        </div>
                        <span class="price">FREE</span>
                    </div>
                    <div class="item">
                        <div class="product-img">
                            <img class="img-fluid" src="<?php echo $re[0]['img3']; ?>" alt="">
                        </div>
                        <span class="price">FREE</span>
                    </div>
                </div>
            </div>
            <div class="details-box" style="transform: translateX(-70px);">
                <div class="ads-details-info">
                    <h2><?php echo $re[0]['title']; ?></h2>
                    <div class="details-meta">
                        <span><a href="#"><i class="lni-alarm-clock"></i>Owner Information :
                                <?php echo $re[0]['username']; ?> </a></span>
                        <span><a href="#"><i
                                    class="lni-map-marker"></i><?php echo $re[0]['areaname'] . ' , ' . $re[0]['cityname'] . ' , ' . $re[0]['countryname'] ?></a></span>
                    </div>
                    <p class="mb-4">Details: <?php echo $re[0]['details']; ?></p>

                </div>
                <div class="tag-bottom">
                    <div class="float-left">
                        <ul class="advertisement">
                            <li>
                                <p><strong><i class="lni-folder"></i> Categories:</strong> <a
                                        href="#"><?php echo $re[0]['categoryname']; ?></a></p>
                            </li>
                            <li>
                                <p><strong><i class="lni-archive"></i> Condition:</strong> Used</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?php else: ?>
        <p style="text-align:center; color:red;">Product not found.</p>
    <?php endif; ?>

    <aside class="details-sidebar" style="width:990px";>
        <div class="widget"style="transform: translateX(230px);" >
            <h4 class="widget-title">Contact Owner</h4>
            <div class="agent-inner" >
                <div class="agent-title">
                    <div class="agent-photo">
                        <a href="#"><img src="img/productinfo/agent.jpg" alt=""></a>
                    </div>
                    <div class="agent-details">
                        <h3><a href="#"><?php echo $re[0]['username']; ?></a></h3>
                    </div>
                </div>
                <p>I'm interested in this <?php echo $re[0]['title']; ?> and I'd like to know more details.</p>
                <a href="offermessages.php?
                    productsid=<?= urlencode($re[0]['productsid']) ?>
                    &senderid=<?= urlencode($re[0]['customerid']) ?>" class="btn btn-common fullwidth mt-4">
                    Start a chat
                </a>

            </div>
        </div>

    </aside>




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