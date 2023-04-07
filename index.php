<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php include "includes/header.php" ?>
<!-- navbar -->
<?php include "includes/navigation.php" ?>
<!-- End of Header Section -->

<!-- showcase Section -->
<section class="showcase  position-relative">
    <div class="z-2 position-absolute p-5 rounded-3"></div>
    <div class="z-3 position-absolute p-5 rounded-3 top-50 start-50 text-center translate-middle">
        <h3 class="mb-lg-4 mb-3 text-warning">You <span class="d-block fw-bold text-light"> Deserve The </span><span
                class="text-light d-block fw-bold">Best Training</span>
        </h3>
        <p class="banner-sub border border-warning">Active Learning, Expert Trainers &amp; Perfect Environment</p>
        <?php if (isset($_SESSION['user_id']) && isset($_SESSION['username'])): ?>
            <a href="explore-courses.php" class="btn btn-style rounded-5 mt-lg-2 mt-2">Explore Courses</a>
        <?php else: ?>
            <a href="login.php" class="btn btn-style rounded-5 mt-lg-2 mt-2">Register Now</a>
        <?php endif; ?>
    </div>
</section>
<!-- END showcase Section -->
<!-- Services SEction -->
<section class=" py-2 services  " id="features">
    <div class="container py-md-5 py-4">
        <p class="text-uppercase text-center page-title fs-5 fw-semibold border border-warning">Best Features</p>
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style ">Achieve Your Goals With Best Possible Training</h3>
        </div>
        <div class="row">
            <div class="col-md-6 text-center col-lg-3 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <div class="card-title mt-2  ">
                        <ion-icon class="people p-2 border border-warning" name="people-outline">
                        </ion-icon>
                        <h2 class="fw-bold m-0">Expert Trainers</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text lead">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center col-lg-3 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <div class="card-title mt-2  ">
                        <ion-icon class="people p-2 border border-warning" name="people-outline">
                        </ion-icon>
                        <h2 class="fw-bold m-0">Expert Trainers</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text lead">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center col-lg-3 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <div class="card-title mt-2  ">
                        <ion-icon class="people p-2 border border-warning" name="people-outline">
                        </ion-icon>
                        <h2 class="fw-bold m-0">Expert Trainers</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text lead">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center col-lg-3 d-flex align-items-stretch">
                <div class="card" style="width: 18rem;">
                    <div class="card-title mt-2  ">
                        <ion-icon class="people p-2 border border-warning" name="people-outline">
                        </ion-icon>
                        <h2 class="fw-bold m-0">Expert Trainers</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text lead">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End of Services Section -->

<!-- About Section -->
<section class="about py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="place-img position-relative">

                    <div class="z-3 p-4   position-absolute text-dark bg-white top-100 w-50 start-100 translate-middle">
                        <h4 class="p-0 m-0">Get Register Today</h4>
                    </div>
                </div>


            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about-content">
                    <h2 class="title-style mb-3
                        ">We are the Best Choice for your Career</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis minima quo
                        exercitationem excepturi, expedita est, nihil commodi voluptatem praesentium perferendis
                        consequuntur iure assumenda quam nobis.</p>
                    <p class="my-2 mb-5 checks">
                        <span><ion-icon class="me-2 p-0 text-light" name="checkmark-circle-outline"></ion-icon>Special
                            Content</span><br>
                        <span><ion-icon name="checkmark-circle-outline" class="me-2 p-0 text-light"></ion-icon>Acess
                            More then 1000 Courses</span><br>
                        <span><ion-icon name="checkmark-circle-outline" class="me-2 p-0 text-light"></ion-icon>Free
                            Courses</span>
                    </p>
                    <div class="text-center">
                        <a href="login.php" class="btn btn-warning text-light py-3 rounded-5 mt-3 ps-4 pe-4">Apply
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Courses SECTION -->
<section class="courses my-5">
    <div class="container">
        <div class="row text-center mb-5">
            <h4 class="fs-5 page-title border border-warning">Best Courses</h4>
            <h1 class="fw-bold">Explore the Right Course</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card">
                    <img src="images/banner3.jpg" class="img-fluid" alt="">
                    <div class="card-body py-3">
                        <div class="card-title mb-3">
                            <!-- LESSON AND STAR ICON HERE  -->
                            <p class="fw-bold mb-1 page-title">Python Development</p>
                        </div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure unde voluptates facilis.
                            Suscipit, repellat Lorem ipsum dolor sit amet.
                            <hr class="text-warning">
                            <span>
                                <a href="about-a-course.php" class="text-dark fs-6 p-2 shover">Apply Now </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 my-2">
                <div class="card">
                    <img src="images/banner3.jpg" class="img-fluid" alt="">
                    <div class="card-body py-3">
                        <div class="card-title mb-3">
                            <!-- LESSON AND STAR ICON HERE  -->
                            <p class="fw-bold mb-1 page-title">Python Development</p>
                        </div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure unde voluptates facilis.
                            Suscipit, repellat Lorem ipsum dolor sit amet.
                            <hr class="text-warning">
                            <span>
                                <a href="view-a-course.html" class="text-dark fs-6 p-2 shover">Apply Now </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 my-2">
                <div class="card">
                    <img src="images/banner3.jpg" class="img-fluid" alt="">
                    <div class="card-body py-3">
                        <div class="card-title mb-3">
                            <!-- LESSON AND STAR ICON HERE  -->
                            <p class="fw-bold mb-1 page-title">Python Development</p>
                        </div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure unde voluptates facilis.
                            Suscipit, repellat Lorem ipsum dolor sit amet.
                            <hr class="text-warning">
                            <span>
                                <a href="view-a-course.html" class="text-dark fs-6 p-2 shover">Apply Now </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card">
                    <img src="images/banner3.jpg" class="img-fluid" alt="">
                    <div class="card-body py-3">
                        <div class="card-title mb-3">
                            <!-- LESSON AND STAR ICON HERE  -->
                            <p class="fw-bold mb-1 page-title">Python Development</p>
                        </div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure unde voluptates facilis.
                            Suscipit, repellat Lorem ipsum dolor sit amet.
                            <hr class="text-warning">
                            <span>
                                <a href="" class="text-dark fs-6 p-2 shover">Apply Now </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "includes/footer.php" ?>