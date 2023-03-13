<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $userId = $_SESSION['user_id'];
}


?>
<header id="site-header" class="">
    <nav class="navbar navbar-expand-lg  navbar-light ">
        <div class="container">
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="index.php">
                <ion-icon style="transform: rotate(-20deg)" size="large" class="book-icon text-warning"
                    name="book-outline"></ion-icon>
                <span style="font-size:1.5rem">Training</span>
            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="explore-courses.php" aria-current="page" href="#">Courses</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="courses.html">Training Courses</a></li>
                                <li><a class="dropdown-item" href="#">Courses Offered</a></li>
                                <li><a class="dropdown-item" href="#">Partnership with Non-Profit</a></li>
                            </ul>
                        </li> -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Training Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="services.html">Vedios </a></li>
                            <li><a class="dropdown-item" href="#">Reference Websites</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="gallery.php">Gallery</a>
                    </li>
                    <?php if (isset($username) && (isset($userId))): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle imageHolder" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="images/testi1.jpg" class="img-fluid rounded-circle" alt="">
                                Jambolle KHan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Profile</a></li>
                                <li><a class="dropdown-item" href="controllers/logoutController.php">Logout </a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link text-light text-uppercase btn-primary btn" aria-current="page"
                                href="login.php">Login</a>
                        </li>
                    <?php endif; ?>


                </ul>
            </div>
        </div>
    </nav>
</header>