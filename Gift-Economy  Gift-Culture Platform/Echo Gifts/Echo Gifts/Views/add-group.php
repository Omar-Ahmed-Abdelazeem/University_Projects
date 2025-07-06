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
                        <h2 class="product-title">Add you Group</h2>
                        <ol class="breadcrumb">
                            <li><a href="index-2.php">Home /</a></li>
                            <li class="current">Add you Group</li>
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
                                    <h2 class="dashbord-title">Group Detail</h2>
                                </div>
                                <form id="groupForm">
                                    <div class="dashboard-wrapper">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Country<span style="font-size: 12px;"> (required)</span></label>
                                            <select class="form-control input-md" name="country">
                                                <option value="">Select Country</option>
                                                <option value="saudi-arabia">Saudi Arabia</option>
                                                <option value="uae">UAE</option>
                                                <option value="kuwait">Kuwait</option>
                                                <option value="bahrain">Bahrain</option>
                                                <option value="qatar">Qatar</option>
                                                <option value="oman">Oman</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="control-label">City<span style="font-size: 12px;"> (required)</span></label>
                                            <select class="form-control input-md" name="city">
                                                <option value="">Select City</option>
                                                <option value="mecca">Mecca</option>
                                                <option value="riyadh">Riyadh</option>
                                                <option value="jeddah">Jeddah</option>
                                                <option value="medina">Medina</option>
                                                <option value="dammam">Dammam</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="control-label">New region</label>
                                            <input class="form-control input-md" name="region" placeholder="New region"
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="tg-checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules" required>
                                            <label class="custom-control-label" for="tg-agreetermsandrules">I agree to all
                                                <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
                                        </div>
                                    </div>
                                    <button class="btn btn-common" type="submit">Add Group</button>
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
    <script>
        $('#summernote').summernote({
            height: 250, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });
    </script>
</body>

</html>