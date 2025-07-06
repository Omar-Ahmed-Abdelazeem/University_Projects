<?php
require_once '../Controller/DBController.php';
require_once '../Models/products.php';
require_once '../Models/customers.php';
require_once '../Models/city.php';
require_once '../Models/area.php';
require_once '../Models/country.php';
require_once '../Models/category.php';

$db = new DBController;
$po = new products;
$cu = new customers;
$ci = new city;
$ar = new area;
$co = new country;
$ca = new category;

$db->openConnection();

$q = "SELECT * FROM products
        INNER JOIN customers ON customers.customersid = products.customerid
        INNER JOIN area ON area.areaid = products.areaid
        INNER JOIN city ON area.cityid = city.cityid
        INNER JOIN country ON city.countryid = country.countryid
        INNER JOIN category ON category.categoryid = products.categoryid;";

$re = $db->runQuery($q);






?>

<!DOCTYPE html>

<html>

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
        $active = 'category';
        include '../Controller/header.php'; ?>

        <div id="hero-area">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="contents-ctg">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <h1 class="display-4 text-white">Products</h1>
                            <p class="lead text-white">Discover amazing gifts for every occasion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-container section-padding" style="transform: translateX(140px);">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-md-12 col-xs-12 page-content">


                        <div class="adds-wrapper">
                            <div class="tab-content">
                                <div id="list-view" class="tab-pane fade active show">
                                    <div class="row">
                                        <?php
                                        if (count($re) != 0) {
                                            for ($i = 0; $i < count($re); $i++) {
                                                $po->setTitle($re[$i]['title']);
                                                $po->setDetails($re[$i]['details']);
                                                $po->setImg1($re[$i]['img1']);
                                                $ar->setareaname($re[$i]['areaname']);
                                                $co->setcountryname($re[$i]['countryname']);
                                                $ci->setcityname($re[$i]['cityname']);
                                                $ca->setcategoryname($re[$i]['categoryname']);
                                                $cu->setusername($re[$i]['username']);
                                        ?>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="featured-box product-item" data-category="<?php echo $ca->getcategoryname(); ?>">
                                                        <figure>
                                                            <a href="#">
                                                                <img class="img-fluid" src="<?php echo $po->getImg1() ?>"
                                                                    alt="<?php echo $po->getTitle(); ?>" style="height: 245px;">
                                                            </a>
                                                        </figure>
                                                        <div class="feature-content" style="height: 245px;">
                                                            <div class="product">
                                                                <a href="#"><?php echo $ca->getcategoryname() . ' > ' . $po->getTitle() ?> </a>
                                                            </div>
                                                            <div class="meta-tag">
                                                                <span>
                                                                    <a href="#"><i class="lni-user"></i> <?php echo $cu->getUsername() ?></a>
                                                                </span>
                                                                <span>
                                                                    <a href="#"><i class="lni-map-marker"></i><?php echo $ar->getareaname() . ', ' . $ci->getcityname() . ', ' . $co->getcountryname() ?></a>
                                                                </span>
                                                            </div>
                                                            <p class="dsc"><?php echo $po->getDetails() ?></p>
                                                            <div class="listing-bottom">
                                                                <h3 class="price float-left">Free</h3>
                                                                <a href="ads-details.php?productsid=<?= $re[$i]['productsid'] ?>" class="btn btn-common float-right">
                                                                    View Details
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
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
    </header>
</body>

</html>