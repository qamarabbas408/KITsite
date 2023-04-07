<section class="dashboard">
    <div class="container mt-1">
        <div class="row">
            <div class="col-sm border shadow-sm p-3 mb-1 bg-primary text-light rounded   ">
                <div class="d-flex align-items-center ">
                    <div class="col-md-3 me-2">
                        <div class="icon  text-center">
                            <ion-icon name="people-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h2 class="fs-5">Total Students</h2>
                        <h2 class="fw-bold">200</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm border shadow-sm p-3 mb-1 bg-warning text-light rounded   ">
                <div class="d-flex align-items-center ">
                    <div class="col-md-3 me-2">
                        <div class="icon  text-center">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h2 class="fs-5">Total Courses</h2>
                        <h2 class="fw-bold">200</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm border shadow-sm p-3 mb-1 bg-success     text-light rounded   ">
                <div class="d-flex align-items-center ">
                    <div class="col-md-3 me-2">
                        <div class="icon  text-center">
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h2 class="fs-5">Total Instructors</h2>
                        <h2 class="fw-bold">200</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="list mt-2 border border-primary container">
    <div class="row">
        <div class="col-md-4">
            <?php require "../includes/instructor-list.php" ?>
        </div>
        <div class="col-md-8">
            <?php require "../includes/student-list.php" ?>
        </div>
    </div>
</section>