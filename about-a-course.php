<?php
require_once("includes/phpmysqlconnect.php");
session_start();
if (isset($_SESSION['courseData'])) {

    $row = $_SESSION['courseData'];
    unset($_SESSION['courseData']);
} else {
    header("location:index.php");
}

?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<section class="viewCourse">
    <div class="container mt-3">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                    <li class=" breadcrumb-item "><a href=" courses.html">Courses</a></li>
                    <li class=" breadcrumb-item active" aria-current="page">
                        <?php if (isset($row))
                            echo $row['title'] ?>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row courseSpecs align-items-center">
                <div class="col-md-12 col-sm-12">
                    <h1 class="fw-bolder">
                    <?= (isset($row)) ? $row['title'] : "" ?>
                </h1>
                <p>
                    <span class="">
                        <ion-icon name="star" class="text-warning"></ion-icon>
                        <ion-icon name="star" class="text-warning"></ion-icon>
                        <ion-icon name="star" class="text-warning"></ion-icon>
                        <ion-icon name="star" class="text-warning"></ion-icon>
                        <ion-icon name="star" class="text-warning"></ion-icon>
                        &nbsp;&nbsp; <span class=" fw-bold fs-5"> | &nbsp;&nbsp; &nbsp;&nbsp; 5.0
                        </span>
                    </span>
                </p>
                <div class="row align-items-center">
                    <?php
                    $sql = "SELECT * FROM instructor WHERE id = " . intval($row['instructor_id']);
                    $instructorRow = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                    ?>
                    <div class="col-md-2 ">
                        <img src="admin/<?=$instructorRow['profilePictureURL']?>" class="img-fluid rounded-5 rounded-circle  bg-warning inst-img" alt="">
                    </div>
                    <div class="col-md-6 ">
                        <span class="">
                            <?=
                                ucfirst($instructorRow['firstname']) . " " . ucfirst($instructorRow['lastname']);
                            ?>
                        </span>
                        <span class="border w-50 border-light bg-primary text-light p-1 outline-white text-capital ">Top
                            Instructor</span>
                    </div>
                </div>
                <div class="row my-4 col-md-10">
                    <a href="" class="btn btn-warning fw-bold text-dark w-50 rounded py-4">Enroll Free Now!<br><span
                            class="">Starts At! <?= $row['start_date'] ?></span></a>
                    <p class=" ms-0 mt-2"><span class="fw-bold">10,000</span> &nbsp;&nbsp;Already Enrolled</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tabs -->
<div class="container-fluid mt-5 navtabs">
    <nav class="ps-5 ">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active text-warning" id="nav-home-tab" data-bs-toggle="tab"
                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                aria-selected="true">About</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Instructor</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Syllabus</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
            tabindex="0">
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="mt-2 mb-0 fs-5">About the Course</h3>
                        <p class="mt-0 mb-3 p-0 text-light-emphasis">8,000 Revies</p>
                        <p class="text-small lh-5 ">
                            <?php echo !empty($row['description']) ? $row['description'] : '
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laboriosam soluta
                            sunt,voluptasiusto repellendus ipsum harum impedit voluptate maiores, fuga odit accusamus tempora rem
                            eosdoloribus, recusandae error id nulla eum! Voluptatem molestiae nam rem quae provident
                            doloremiustominima expedita nulla libero! Ducimus doloremque unde aspernatur quos, reprehenderit
                            magni!Hicdolore placeat iusto aspernatur est accusantium inventore provident nesciunt magni
                            atque,dictadebitis voluptatum nulla reiciendis, reprehenderit eaque quae facilis recusandae labore
                            quameligendi consectetur nostrum? Illo, tempore nemo, aperiam itaque numquam maiores quaerat
                            iustoquidem obcaecati reiciendis cupiditate ex, a autem vero. Quaerat ipsum magnam soluta?
                            Unde!'; ?>
                            <a href="" class="text-primary text-uppercase fw-se">Read More</a>
                        </p>
                        <div class="card">
                            <div class="card-body p-5">
                                <h4 class="card-title">
                                    What will You Learn
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ion-icon class="me-1" name="checkmark"></ion-icon>Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Tempore, magni?
                                    </div>
                                    <div class="col-md-6">
                                        <ion-icon class="m-1" name="checkmark"></ion-icon>Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Tempore, magni?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="container my-5">
                <div class="row">
                    <h1 class="fs-4">Instructor</h1>
                    <div class="row text-black-50">
                        <div class="col-md-2 author-img">
                            <img src="admin/<?php echo $instructorRow['profilePictureURL'] ?>"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="col-md-10">
                            <div class="author mb-2">
                                <a class="text-black-50 fs-5" href="author.php">
                                    <?= ucfirst($instructorRow['firstname']) . " " . ucfirst($instructorRow['lastname']) ?>
                                </a>
                                <span class="border  bg-primary text-light outline-white p-1 ms-4">Top
                                    Instructor</span>
                            </div>
                            <p class=" mb-0">
                                <?= ucfirst($instructorRow['skill']) ?>
                            </p>
                            <p>
                                <?= ucfirst($instructorRow['degree']) ?>
                            </p>
                            <div class="followers text-black-50">
                                <ion-icon class="text-dark" name="people-outline" size=""></ion-icon><span
                                    class="ms-2 fw-bold text-dark">500 Followers</span><br>
                                <ion-icon class="text-dark" name="book-outline"></ion-icon><span class="ms-2">
                                    <?php
                                    $sql = "SELECT count(instructor_id) FROM courses WHERE instructor_id=" . intval($row['instructor_id']);
                                    $count = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                    echo $count['count(instructor_id)']
                                        ?>
                                    Courses
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <h1 class="fs-4">Offered By</h1>
                        <div class="col-md-2 p-3">
                            <img src="images/icon-1.png" class="img-fluid rounded-circle img-thumbnail" alt="">
                        </div>
                        <div class="col-md-10">
                            <a href="author.html" class="fs-4 mb-3 text-primary institute">Name of Institute</a>
                            <p class="tex-small lh-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Facere blanditiis earum
                                inventore repellendus quod at atque voluptatum nesciunt deleniti. Perferendis in
                                aliquam
                                beatae. Doloribus quae dolorem aspernatur? Mollitia veritatis sunt voluptas repellat
                                nulla error est accusantium. Voluptatum quia facere accusantium magnam nesciunt nemo
                                delectus eum quisquam tenetur voluptatibus illum error a similique repudiandae,
                                fugit
                                natus cum consequuntur beatae at architecto quae reiciendis qui provident sequi.
                                Quo,
                                fuga. Nam maxime neque exercitationem nostrum obcaecati dicta sunt quibusdam
                                corrupti,
                                magni repellendus at sit fugiat hic corporis quos illum porro aspernatur facere,
                                dolore
                                alias amet architecto vero? Eos hic sequi excepturi reiciendis deleniti.</p>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div class="container my-5">
                <div class="row mb-4">
                    <p class="fs-5 text-center">Syllabus - What you will learn from this course
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h3 class="text-uppercase  text-center">Week</h3>
                        <p class="fs-1 text-center">1</p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="row align-items-center mb-3">
                            <div class="col-sm-1">
                                <ion-icon name="time" class=" text-primary" size="large"></ion-icon>
                            </div>
                            <div class="col-sm-10">
                                <span class="text-black-50 fw-bold"> 2 hours to Complete</span>
                            </div>
                        </div>
                        <h3 class="fs-5">Add Chapter Title Here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Iure, voluptate? Placeat enim officia dolores
                            amet cum libero?</p>
                        <div class="row align-items-center mb-3">
                            <div class="col-sm-1">
                                <ion-icon name="book" class=" text-primary" size="large"></ion-icon>
                            </div>
                            <div class="col-sm-10">
                                <span class="text-black-50">9 Videos (Total 55min), 3 Reading </span>
                            </div>
                        </div>
                        <hr class="text-warning">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h3 class="text-uppercase  text-center">Week</h3>
                        <p class="fs-1 text-center">2</p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="row align-items-center mb-3">
                            <div class="col-sm-4">
                                <ion-icon name="time" class=" text-primary" size="large"></ion-icon>
                            </div>
                            <div class="col-sm-8">
                                <span class="text-black-50 fw-bold"> 2 hours to Complete</span>
                            </div>
                        </div>
                        <h3 class="fs-5">Add Chapter Title Here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Iure, voluptate? Placeat enim officia dolores
                            amet cum libero?</p>
                        <div class="row align-items-center mb-3">
                            <div class="col-sm-1">
                                <ion-icon name="book" class=" text-primary" size="large"></ion-icon>
                            </div>
                            <div class="col-sm-10">
                                <span class="text-black-50">9 Videos (Total 55min), 3 Reading </span>
                            </div>
                        </div>
                        <hr class="text-warning">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include "includes/footer.php" ?>