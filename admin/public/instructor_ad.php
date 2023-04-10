<?php
require_once "../includes/header.php";
require_once "../includes/navigation.php"; ?>

<section class="instructor-view">
    <div class="container">
        <div class="d-flex p-5 align-items-center">
            <div class="col-lg-3 col-md-4 text-center me-5 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <img src="../../images/testi3.jpg" alt="" class="img-fluid  rounded-circle">
                <div class="fs-4 fw-bold">Qamar Abbas</div>
                <div class="fs-6 display-1 " style="background:lightblue">+92-311-1588908</div>
                <a class="btn btn-danger d-block mt-1 " href="deleteInstructor.php">Delete</a>
            </div>
            <div class=" col-lg-6 col-md-8  me-auto shadow-sm p-3 mb-5 bg-body-tertiary rounded ">
                <ul class="list-group">
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center text-secondary fw-bold">
                        Profession
                        <span class="badge bg-primary rounded-pill">Software Engineer</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center text-secondary fw-bold">
                        Course Assigned
                        <span class="badge bg-primary rounded-pill">Web Development</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center text-secondary fw-bold">
                        Course Start:
                        <span class="badge bg-primary rounded-pill">Dec 23</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center text-secondary fw-bold">
                        Course End:
                        <span class="badge bg-primary rounded-pill">Jan 24</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center text-secondary fw-bold">
                        Days Left:
                        <span class="badge bg-primary rounded-pill">25 days</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center text-secondary fw-bold">
                        Instructor CV:
                        <a href=""class="link-primary text-decoration-none">View</a>
                    </li>
                    <li class="list-group-item d-flex  flex-column text-secondary fw-bold">
                        <p class="m-0"> About:</p>
                        <p class="fw-normal display-1 fs-6 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. A
                            incidunt architecto autem
                            voluptatum itaque? Quis tenetur eos ullam error reprehenderit ab repudiandae, sapiente
                            perferendis.</p>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center text-secondary fw-bold">
                        Sent Mail:
                        <a href="mailto:qmarabbas715@gmail.com"
                            class=" btn text-light border rounded  btn-warning text-decoration-none">Send Mail</a>
                    </li>   

                </ul>
            </div>
        </div>

    </div>

</section>

<?php require_once("../includes/footer.php"); ?>