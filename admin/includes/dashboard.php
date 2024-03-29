<section class="dashboard">
    <div class="container mt-1">
        <div class="row">
            <?php require "analytics-dashboard.php" ?>
        </div>
    </div>
</section>
<section class="list mt-2 container">
    <div class="row p-2">
        <div class=" col-lg-4 col-md-12 border border-warning shadow-sm p-3 mb-5 bg-body-tertiary rounded mb-md-1">
            <div class="d-flex justify-content-between mb-2">
                <span class="fs-5 display-1">Recent Instructors</span>
                <a class="btn btn-info text-light fs-6 p-0 ps-1 pe-1" href="add-instructor.php">Add Instructor</a>
            </div>
            <?php if (mysqli_num_rows($instructorResults) >= 1): ?>
                <?php require "../includes/instructor-list.php" ?>
                <a class="hvr-warning" href="view_instructors.php">View List</a>
            <?php else: ?>
                <span class="fs-6 text-info display-1">No Instructors Found in the System</span>
            <?php endif; ?>
        </div>

        <div class=" col-lg-8 col-md-12 border border-warning shadow-sm p-3 bg-body-tertiary rounded ">
            <span class="fs-5 display-1">Recently Enrolled Students </span>
            <div class="table-responsive">
                <table class=" table table-light table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Enrollment Date</th>
                            <th scope="col">Course Enrolled</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php require "../includes/student-list.php" ?>
                        <?php require "../includes/student-list.php" ?>
                        <?php require "../includes/student-list.php" ?>
                        <?php require "../includes/student-list.php" ?>
                    </tbody>
                </table>
            </div>
            <p class="text-end">
                <a href="students_view_ad.php" class="hvr-warning">View All Students</a>
            </p>
        </div>
    </div>
    <div class="row ">
        <div class="course-list shadow-sm p-3 bg-body-tertiary rounded">
            <div class="d-flex justify-content-between mb-2">
                <span class="fs-5 display-1">Recent Courses</span>
                <a class="btn btn-info text-light fs-6 p-0 ps-1 pe-1" href="add-course.php">Add Course</a>
            </div>
            <div class="table-responsive">
                <?php if (mysqli_num_rows($courseResults) >= 1): ?>
                    <table class="table table-light table-striped  text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Title</th>
                                <th scope="col">Course Start</th>
                                <th scope="col">Course End</th>
                                <th scope="col">Instructor</th>
                                <th scope="col">Students Enrolled</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php require "../includes/course-list.php" ?>
                            </tbody>
                    </table>
                <?php else: ?>
                    <span class="fs-6 text-info display-1">No Courses Found in the System</span>
                <?php endif; ?>
                <p class="text-end">
                    <a href="view_courses.php" class="hvr-warning">View All Courses</a>
                </p>
            </div>

        </div>
    </div>
</section>