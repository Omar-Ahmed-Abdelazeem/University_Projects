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
        $active = 'testimonial';
        include '../Controller/header.php'; 
        ?>


    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Testimonial</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="testimonial section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel">
                        <div class="item">
                            <div class="img-thumb">
                                <img src="img/testimonial/img.png" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Saif's Law: the Law of the LEAST Effort is about choosing the
                                        easiest path. But it doesn't mean you should always opt for the simplest task.
                                        Instead, it's about understanding and managing your natural inclination to avoid
                                        difficult tasks.Start with the hardest task. Eat the frog..</p>
                                    <div class="info-text">
                                        <h2><a href="#">Saif Saber</a></h2>
                                        <h4><a href="#">CEO of Himself</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="img/testimonial/img1.png" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Azeema's Law: “Law of Diminishing Returns” suggests
                                        that optimal productivity is reached with an appropriate balance between working
                                        time and resting time as productivity decreases after a certain period of
                                        continuous work(90Minutes Max and take a Break)</p>
                                    <div class="info-text">
                                        <h2><a href="#">Omar Ahmed</a></h2>
                                        <h4><a href="#">CEO of Pastawesi</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="img/testimonial/img2.png" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">The OmarAmir principle states that for many outcomes, roughly
                                        80% of consequences come from 20% of causes.</p>
                                    <div class="info-text">
                                        <h2><a href="#">Omar Amir</a></h2>
                                        <h4><a href="#">CEO of Pixar</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="img/testimonial/img3.png" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">David's Law: Don’t wait for the perfect moment. Take the
                                        moment and make it perfect.</p>
                                    <div class="info-text">
                                        <h2><a href="#">David Dawood</a></h2>
                                        <h4><a href="#">CEO of Netflix</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="img/testimonial/img4.png" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">“Yossef's Law: The best investment you can make is in the
                                        engine that fueled your growth in the first place.”</p>
                                    <div class="info-text">
                                        <h2><a href="#">Yossef Mohamed</a></h2>
                                        <h4><a href="#">CEO of Oracle</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-thumb">
                                <img src="img/testimonial/img5.png" alt="">
                            </div>
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Karim's Law: “The key to happiness is the ability to do what
                                        toy want, when you want, with who you want, for as long as you want” Morgan
                                        Housel.</p>
                                    <div class="info-text">
                                        <h2><a href="#">Karim Amir</a></h2>
                                        <h4><a href="#">CEO of FIFA</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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