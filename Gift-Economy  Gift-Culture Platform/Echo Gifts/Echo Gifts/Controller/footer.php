<footer>

<section class="footer-Content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                <div class="widget">
                    <div class="footer-logo"><img src="img/logo.png" alt=""></div>
                    <div class="textwidget">
                        <p>"The work that hurts you less than it hurts others is the work you were made to do.”
                        </p>
                    </div>
                    <ul class="mt-3 footer-social">
                        <li><a class="facebook" href="https://www.facebook.com"><i
                                    class="lni-facebook-filled"></i></a></li>
                        <li><a class="twitter" href="https://www.x.com"><i class="lni-twitter-filled"></i></a>
                        </li>
                        <li><a class="linkedin" href="https://www.linkedin.com"><i
                                    class="lni-linkedin-fill"></i></a></li>
                        <li><a class="google-plus" href="https://www.google.com"><i
                                    class="lni-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                <div class="widget">
                    <h3 class="block-title">Quick Link</h3>
                    <ul class="menu">
                        <li><a href="testimonial.php">- Testimonial</a></li>
                        <li><a href="<?php if (isset($_SESSION['customer'])) { ?>account-profile-setting.php<?php } else { ?>login.php<?php } ?>">- Profile</a></li>
                        <li><a href="about.php">- About Us</a></li>
                        <li><a href="faq.php">- FAQ's</a></li>
                        <li><a href="<?php if (isset($_SESSION['customer'])) { ?>post-ads.php<?php } else { ?>login.php<?php } ?>">- Add A Post</a></li>
                        <li><a href="<?php if (isset($_SESSION['customer'])) { ?>add-group.php<?php } else { ?>login.php<?php } ?>">- Add A Group</a></li>
                        <li><a href="category.php">- Shop</a></li>
                        <li><a href="404.php">- :)</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                <div class="widget">
                    <h3 class="block-title">Contact Info</h3>
                    <ul class="contact-footer">
                        <li>
                            <strong><i class="lni-phone"></i></strong><span>+201234567890 <br>
                                +201122334455</span>
                        </li>
                        <li>
                            <strong><i class="lni-envelope"></i></strong><span><a
                                    href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="9efdf1f0eafffdeadef3fff7f2b0fdf1f3">[email&#160;protected]</a>
                                <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="e4979194948b9690a489858d88ca878b89">[email&#160;protected]</a></span>
                        </li>
                        <li>
                            <strong><i class="lni-map-marker"></i></strong><span><a href="#">0 St 5afra3,
                                    Pyramids, Giza <br>[S.S] is ALWAYS TOP</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



</footer>
