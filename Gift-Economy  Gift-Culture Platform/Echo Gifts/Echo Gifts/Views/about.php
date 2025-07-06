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
        $active = 'about';
        include '../Controller/header.php'; 
        ?>


    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">About Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="about-wrapper">
                        <h2 class="intro-title">Why We Are Unique</h2>
                        <p class="intro-desc">What sets us apart is our attention to detail and commitment to creating a
                            seamless digital experience. We don’t just build websites—we craft experiences that are
                            elegant, intuitive, and user-focused. Our blend of clean design, responsive layouts, and
                            UX-first thinking ensures that every visitor feels right at home. Add to that a highly
                            customizable framework and top-notch security support, and you get a platform that’s not
                            only beautiful but built to last. We believe in making tech simple, powerful, and tailored
                            exactly to your needs—that’s the difference.</p>
                        <a href="<?php if (isset($_SESSION['customer'])) { ?>post-ads.php<?php } else { ?>login.php<?php } ?>"
                            class="btn btn-common btn-lg">Add A Post</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="img/about/about.png" alt="">
                </div>
            </div>
        </div>
    </section>



    <section class="services section-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon">
                            <i class="lni-book"></i>
                        </div>
                        <div class="services-content">
                            <h3><a>Full Documented</a></h3>
                            <p>“Our project comes with complete documentation, making it easy for anyone to get started,
                                understand the structure, and make changes with confidence.”</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
                        <div class="icon">
                            <i class="lni-leaf"></i>
                        </div>
                        <div class="services-content">
                            <h3><a>Clean & Modern Design</a></h3>
                            <p>“We’ve embraced a clean and modern design approach—sleek visuals, balanced layouts, and a
                                contemporary feel that reflects today’s digital standards.”</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon">
                            <i class="lni-map"></i>
                        </div>
                        <div class="services-content">
                            <h3><a>Great Features</a></h3>
                            <p>“Packed with powerful and practical features, our site offers everything you need—without
                                the clutter—to elevate your online presence.”</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
                        <div class="icon">
                            <i class="lni-cog"></i>
                        </div>
                        <div class="services-content">
                            <h3><a>Completely Customizable</a></h3>
                            <p>“Whether you're a developer or not, everything is designed to be easily
                                customizable—giving you full control to make it your own.”</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="1s">
                        <div class="icon">
                            <i class="lni-git"></i>
                        </div>
                        <div class="services-content">
                            <h3><a>User Friendly</a></h3>
                            <p>“From navigation to interaction, every element is designed with the user in mind—smooth,
                                intuitive, and easy to use.”</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                        <div class="icon">
                            <i class="lni-layout"></i>
                        </div>
                        <div class="services-content">
                            <h3><a>Awesome Layout</a></h3>
                            <p>“Our layout isn’t just good-looking—it’s thoughtfully organized to enhance engagement,
                                improve readability, and guide users effortlessly through your content.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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


    <?php include_once '../Controller/DBController.php';?>

<section class="counter-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 work-counter-widget">
                <div class="counter">
                    <div class="icon"><i class="lni-layers"></i></div>
                    <h2 class="counterUp">
                    <?php
                    $db = new DBController();
                    if ($db->openConnection()) {
                        $result = $db->runQuery("SELECT COUNT(*) as count FROM products");
                        echo $result[0]['count'];
                        $db->closeConnection();
                    } else {
                        echo "0";
                    }
                    ?>
                    </h2>
                    <p>Gifts Posted</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 work-counter-widget">
                <div class="counter">
                    <div class="icon"><i class="lni-users"></i></div>
                    <h2 class="counterUp">
                        <?php
                        $db = new DBController();
                        if ($db->openConnection()) {
                            $result = $db->runQuery("SELECT COUNT(*) as count FROM customers");
                            echo $result[0]['count'];
                            $db->closeConnection();
                        } else {
                            echo "0";
                        }
                        ?>
                    </h2>
                    <p>Members</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 work-counter-widget">
                <div class="counter">
                    <div class="icon"><i class="lni-briefcase"></i></div>
                    <h2 class="counterUp">
                    <?php
                    $db = new DBController();
                    if ($db->openConnection()) {
                        $result = $db->runQuery("SELECT COUNT(*) as count FROM category");
                        echo $result[0]['count'];
                        $db->closeConnection();
                    } else {
                        echo "0";
                    }
                    ?>
                    </h2>
                    <p>Categories We Have</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 work-counter-widget">
                <div class="counter">
                    <div class="icon"><i class="lni-map"></i></div>
                    <h2 class="counterUp">
                    <?php
                    $db = new DBController();
                    if ($db->openConnection()) {
                        $result = $db->runQuery("SELECT COUNT(*) as count FROM area");
                        echo $result[0]['count'];
                        $db->closeConnection();
                    } else {
                        echo "0";
                    }
                    ?>
                    </h2>
                    <p>Locations</p>
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