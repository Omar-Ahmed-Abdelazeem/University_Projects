<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['logout'])) {
    session_unset();
    setcookie('remember_me', '', time() - 3600, "/");
    session_destroy();
    header("Location: login.php");
    exit();
}
?>


<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-xs-12">

                <ul class="list-inline">
                    <li><i class="lni-phone"></i> +0123 456 7890</li>
                    <li><i class="lni-envelope"></i> <a
                            href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="fb888e8b8b94898fbb9c969a9297d5989496">[email&#160;protected]</a></li>
                </ul>

            </div>
            <div class="col-lg-5 col-md-7 col-xs-12">
                <div class="roof-social float-right">
                    <a class="facebook" href="https://www.facebook.com"><i class="lni-facebook-filled"></i></a>
                    <a class="twitter" href="https://www.x.com"><i class="lni-twitter-filled"></i></a>
                    <a class="instagram" href="https://www.instagram.com"><i
                            class="lni-instagram-filled"></i></a>
                    <a class="linkedin" href="https://www.linkedin.com"><i class="lni-linkedin-fill"></i></a>
                    <a class="google" href="https://www.google.com"><i class="lni-google-plus"></i></a>
                </div>
                <div class="header-top-right float-right">
                    <?php if (isset($_SESSION['customer'])) { ?>
                        <form method="POST" style="display: inline;">
                            <button type="submit" name="logout" class="header-top-button"
                                style="background: none; border: none; padding: 5; cursor: pointer;">
                                <i class="lni-exit"></i> Log Out
                            </button>
                        </form>
                    <?php } else { ?>
                        <a href="login.php" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                        <a href="register.php" class="header-top-button"><i class="lni-pencil"></i> Register</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>