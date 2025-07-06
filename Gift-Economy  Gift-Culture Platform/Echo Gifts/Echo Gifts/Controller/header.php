<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
?>

<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                        aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                    </button>
                    <a href="index-2.php" class="navbar-brand"><img src="img/logo2.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                    <li class="nav-item dropdown<?php if ($active == 'index-2') { ?> active<?php } ?>">
                    <a class="nav-link" href="index-2.php">
                                Home
                            </a>
                        </li>

                        <li class="nav-item dropdown<?php if ($active == 'category' || $active ==  'ads-details') { ?> active<?php } ?>">
                        <a class="nav-link" href="category.php">
                                Products
                            </a>
                        </li>

                        <li class="nav-item dropdown<?php if ($active == 'about' || $active ==  'faq' || $active ==  'testimonial') { ?> active<?php } ?>">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="testimonial.php">Testimonial</a>
                                <a class="dropdown-item" href="about.php">About Us</a>
                                <a class="dropdown-item" href="faq.php">FAQ</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown<?php if ($active == 'account-favourite-ads' || $active ==  'account-profile-setting' || $active ==  'dashboard' || $active ==  'offermesseges' || $active ==  'privacy-setting') { ?> active<?php } ?>">
                            <a class="nav-link" 
                            href="<?php if (isset($_SESSION['customer'])) { ?>account-profile-setting.php<?php } else { ?>login.php<?php } ?>">
                                Profile
                            </a>
                        </li>
                    </ul>

                    <div class="post-btn">
                        <a class="btn btn-common" style="margin-right:10px;" 
                        href="<?php if (isset($_SESSION['customer'])) { ?>post-ads.php<?php } else { ?>login.php<?php } ?>">
                        <i class="lni-pencil-alt"></i> Add A Post</a>
                    </div>

                    <div class="post-btn">
                        <a class="btn btn-common" 
                        href="<?php if (isset($_SESSION['customer'])) { ?>add-group.php<?php } else { ?>login.php<?php } ?>">
                            <i class="lni-pencil-alt"></i> Add A Group</a>
                    </div>

                </div>
            </div>
        </nav>