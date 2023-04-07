<?php
include "includes/header.php";
include "includes/navigation.php"; ?>
<div class="container m-3 user-courses">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">In Progress</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Completed</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <div class="row p-4 mb-2">
                    <div class="col-md-2">
                        <img src="images/c3.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-md-6">
                        <a href="view-a-course.php"class="fs-2">Web Design and Development</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem totam fuga explicabo provident. Enim?</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="view-a-course.php" class="btn btn-primary goto-btn">Go To Course</a>
                    </div>
                    
                </div>
                <div class="row p-4">
                    <div class="col-md-2">
                        <img src="images/c3.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-md-6">
                        <a href="view-a-course.php"class="fs-2">Python Development</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem totam fuga explicabo provident. Enim?</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="view-a-course.php" class="btn btn-primary goto-btn">Go To Course</a>
                    </div>
                    
                </div>
            </div>


        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>
</div>
<?php include "includes/footer.php"; ?>