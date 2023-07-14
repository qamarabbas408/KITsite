<?php
require_once("includes/phpmysqlconnect.php");
// Count total courses
$sql = "SELECT * FROM courses LIMIT 4";
$courseResults = mysqli_query($conn, $sql);

if (session_status() == PHP_SESSION_NONE) {
session_start();
}
?>
<?php include "includes/header.php" ?>
<!-- navbar -->
<?php include "includes/navigation.php" ?>
<!-- End of Header Section -->

<!-- showcase Section -->
<?php require_once("includes/showcase-section.php"); ?>
<!-- END showcase Section -->
<!-- Services SEction -->
<section class=" py-2 services  " id="features">
    <div class="container py-md-5 py-4">
        <p class="text-uppercase text-center page-title fs-5 fw-semibold border border-warning">Best Features</p>
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style ">Achieve Your Goals With Best Possible Training</h3>
        </div>
        <div class="row">
            <!-- 4 columns -->
            <?php require("includes/features-column.php"); ?>
        </div>
    </div>
</section>
<!-- End of Services Section -->

<!-- About Section -->
<section class="about py-3">
    <div class="container">
        <div class="row">
            <?php require_once("includes/about-section.php"); ?>
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
        <div class="row d-flex align-items-center">
            <!-- 4 cols -->
            <?php require("includes/exploreCourses-section.php"); ?>
        </div>
    </div>
</section>


<?php include "includes/footer.php" ?>