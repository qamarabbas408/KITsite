<div class="col-sm border shadow-sm p-3 mb-1 bg-primary text-light rounded   ">
    <div class="d-flex align-items-center ">
        <div class="col-md-3 me-2">
            <div class="icon  text-center">
                <ion-icon name="people-outline"></ion-icon>
            </div>
        </div>
        <div class="col-md-9">
            <h2 class="fs-5">Total Students</h2>
            <?php if (mysqli_num_rows($studentResults) >= 1): ?>
                <h2 class="fw-bold">
                    <?php echo mysqli_num_rows($studentResults);
                    ?>
                </h2>
            <?php else: ?>
                <h2 class="fw-bold">
                    <?php echo "0" ?>
                </h2>
            <?php endif; ?>
        </div>
    </div>
</div>


<!-- Display total instructors -->
<div class="col-sm border shadow-sm p-3 mb-1 bg-primary text-light rounded">
    <div class="d-flex align-items-center">
        <div class="col-md-3 me-2">
            <div class="icon text-center">
                <ion-icon name="people-outline"></ion-icon>
            </div>
        </div>
        <div class="col-md-9">
            <h2 class="fs-5">Total Instructors</h2>
            <?php if (mysqli_num_rows($instructorResults) >= 1): ?>
                <h2 class="fw-bold">
                    <?php echo mysqli_num_rows($instructorResults);?>
                </h2>
            <?php else: ?>
                <h2 class="fw-bold">
                    <?php echo "0" ?>
                </h2>

            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Display total courses -->
<div class="col-sm border shadow-sm p-3 mb-1 bg-primary text-light rounded">
    <div class="d-flex align-items-center">
        <div class="col-md-3 me-2">
            <div class="icon text-center">
                <ion-icon name="book-outline"></ion-icon>
            </div>
        </div>
        <div class="col-md-9">
            <h2 class="fs-5">Total Courses</h2>
            <?php if (mysqli_num_rows($courseResults) >= 1): ?>
                <h2 class="fw-bold">
                    <?php echo mysqli_num_rows($courseResults);?>
                </h2>
            <?php else: ?>
                <h2 class="fw-bold">
                    <?php echo "0" ?>
                </h2>
            <?php endif; ?>
        </div>
    </div>
</div>