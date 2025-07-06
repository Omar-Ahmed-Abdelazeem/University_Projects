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
        $active = 'account-favourite-ads';
        include '../Controller/header.php'; ?>


    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">My Favorites</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.php">Home /</a></li>
                            <li class="current">My Favorites</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
                    <aside>
                        <div class="sidebar-box">
                            <div class="user">
                                <figure>
                                    <a href="account-profile-setting.php"><img src="img/author/img1.jpg" alt=""></a>
                                </figure>
                                <div class="usercontent">
                                    <h3>Username here </h3>
                                </div>
                            </div>
                            <nav class="navdashboard">
                                <ul>

                                    <li>
                                        <a href="account-profile-setting.php">
                                            <i class="lni-cog"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="dashboard.php">
                                            <i class="lni-dashboard"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="offermessages.php">
                                            <i class="lni-envelope"></i>
                                            <span>Chats/Messages</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="active" href="account-favourite-ads.php">
                                            <i class="lni-heart"></i>
                                            <span>My Favourites</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="privacy-setting.php">
                                            <i class="lni-star"></i>
                                            <span>Privacy Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.php">
                                            <i class="lni-enter"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="page-content">
                        <div class="inner-box">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title">My Favourites</h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <nav class="nav-table">
                                    <ul>
                                        <li class="active"><a href="#">Featured (12)</a></li>
                                    </ul>
                                </nav>
                                <table class="table table-responsive dashboardtable tablemyads">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkedall">
                                                    <label class="custom-control-label" for="checkedall"></label>
                                                </div>
                                            </th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Ad Status</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-category="active">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adone">
                                                    <label class="custom-control-label" for="adone"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img1.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>HP Laptop 6560b core i3 3nd generation</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category"><span class="adcategories">Laptops & PCs</span>
                                            </td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusactive">active</span></td>
                                            <td data-title="Price">
                                                <h3>139$</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="active">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adtwo">
                                                    <label class="custom-control-label" for="adtwo"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img2.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Jvc Haebr80b In-ear Sports Headphones</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Electronics</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusactive">Active</span></td>
                                            <td data-title="Price">
                                                <h3>$189</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="inactive">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adthree">
                                                    <label class="custom-control-label" for="adthree"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img3.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Furniture Straps 4-Pack, TV Anti-Tip Metal Wall </h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Real Estate</td>
                                            <td>
                                                <span class="adstatus adstatusinactive">Inactive</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$69</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="sold">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adfour">
                                                    <label class="custom-control-label" for="adfour"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img4.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Apple iPhone X, Fully Unlocked 5.8", 64 GB - Black</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Mobile</td>
                                            <td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$89</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="active">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adfive">
                                                    <label class="custom-control-label" for="adfive"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img5.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Apple Macbook Pro 13 Inch with/without Touch Bar</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Apple</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusactive">Active</span></td>
                                            <td data-title="Price">
                                                <h3>$289</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="sold">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adsix">
                                                    <label class="custom-control-label" for="adsix"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img6.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Apple MQDT2CL/A 10.5-Inch 64GB Wi-Fi iPad Pro</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Apple iPad</td>
                                            <td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$159</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="expired">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adseven">
                                                    <label class="custom-control-label" for="adseven"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img7.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Essential Phone 8GB Unlocked with Dual Camera</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Mobile</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusexpired">Expired</span></td>
                                            <td data-title="Price">
                                                <h3>$89</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="inactive">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adeight">
                                                    <label class="custom-control-label" for="adeight"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img8.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>LG Nexus 5x LG-H791 32GB GSM Smartphone</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Mobile</td>
                                            <td>
                                                <span class="adstatus adstatusinactive">Inactive</span>
                                            </td>
                                            <td data-title="Price">
                                                <h3>$59</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="expired">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adnine">
                                                    <label class="custom-control-label" for="adnine"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img9.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Samsung Galaxy G550T On5 GSM Unlocked Smartphone</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Mobile</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusexpired">Expired</span></td>
                                            <td data-title="Price">
                                                <h3>$129</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-category="deleted">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="adten">
                                                    <label class="custom-control-label" for="adten"></label>
                                                </div>
                                            </td>
                                            <td class="photo"><img class="img-fluid" src="img/product/img10.jpg"
                                                    alt=""></td>
                                            <td data-title="Title">
                                                <h3>Apple iMac Pro 27" All-in-One Desktop, Space Gray</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Apple iMac</td>
                                            <td data-title="Ad Status"><span
                                                    class="adstatus adstatusdeleted">Deleted</span></td>
                                            <td data-title="Price">
                                                <h3>$389</h3>
                                            </td>
                                            <td data-title="Action">
                                                <div class="btns-actions">
                                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                                    <a class="btn-action btn-edit" href="#"><i
                                                            class="lni-pencil"></i></a>
                                                    <a class="btn-action btn-delete" href="#"><i
                                                            class="lni-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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