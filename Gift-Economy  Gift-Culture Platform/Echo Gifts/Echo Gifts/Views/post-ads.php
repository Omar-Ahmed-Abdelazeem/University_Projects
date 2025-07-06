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
                        <h2 class="product-title">Add you Product</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.php">Home /</a></li>
                            <li class="current">Add you Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container" style="margin-left:35%;">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="row page-content">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                            <div class="inner-box">
                                <div class="dashboard-box">
                                    <h2 class="dashbord-title">Product Detail</h2>
                                </div>
                                <form id="productForm">
                                    <div class="dashboard-wrapper">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Project Title</label>
                                            <input class="form-control input-md" name="Title" placeholder="Title"
                                                type="text" required>
                                        </div>
                                        <div class="form-group mb-3 tg-inputwithicon">
                                            <label class="control-label">Categories <span style="font-size: 12px;"> (required)</span></label>
                                            <div class="tg-select form-control">
                                                <select required>
                                                    <option value="none">Select Categories</option>
                                                    <option value="none">Mobiles</option>
                                                    <option value="none">Electronics</option>
                                                    <option value="none">Training</option>
                                                    <option value="none">Real Estate</option>
                                                    <option value="none">Services</option>
                                                    <option value="none">Training</option>
                                                    <option value="none">Vehicles</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="control-label">Description</label>
                                            <input class="form-control input-md" name="price"
                                                placeholder="write you description" type="text" required>
                                        </div>
                                        <label class="tg-fileuploadlabel" for="tg-photogallery">
                                            <span>Drop files anywhere to upload <span style="font-size: 12px;">(required)</span></span>
                                            <span>Or</span>
                                            <span class="btn btn-common">Select Files</span>
                                            <span>Maximum upload file size: 5 MB</span>
                                            <input id="tg-photogallery" class="tg-fileinput" type="file" name="file"
                                                required>
                                        </label>
                                    </div>
                                    <div class="tg-checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules"
                                                required>
                                            <label class="custom-control-label" for="tg-agreetermsandrules">I agree to <a
                                                    href="javascript:void(0);">(volunteer to monitor the group's activity
                                                    for 15-60 minutes daily.)</a></label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-common">Add Product</button>
                                </form>
                            </div>
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

</html>