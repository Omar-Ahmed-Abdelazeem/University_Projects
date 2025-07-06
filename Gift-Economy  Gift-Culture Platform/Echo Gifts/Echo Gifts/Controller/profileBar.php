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
                                <h3>
                                    <<?php echo $user['username']; ?>
                                        </h3>
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
                                    <a href="privacy-setting.php">
                                        <i class="lni-star"></i>
                                        <span>Privacy Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" style="display: inline;">
                                        <button type="submit" name="logout" class="header-top-button"
                                            style="background: none; border: none; padding: 5; cursor: pointer;">
                                            <i class="lni-enter"></i> Log Out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>
            </div>