<?php
require_once("../includes/phpmysqlconnect.php");
$sql = "SELECT * FROM instructor";
$res = mysqli_query($conn, $sql);
session_start();
if (isset($_SESSION['errors'])) {
    // Unserialize the validation errors array
    $errors = unserialize($_SESSION['errors']);
    unset($_SESSION['errors']);
}
require_once "../includes/header.php";
require_once "../includes/navigation.php"; ?>
<!--CKEditor  -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script> -->
<section class="add-course form-style">
    <div class="container">
        <div class="row justify-content-center">
            <h5 class="display-1  text-center fs-2">Create Course</h5>
            <?php if (mysqli_num_rows($res) >= 1): ?>
                <form action="../controllers/addCourse_handler.php" method="POST" enctype="multipart/form-data">
                    <div class="row  mb-2">
                        <div class="form-group">
                            <label>Course Title</label>
                            <input type="text" name="course-title"
                                class="form-control <?php echo isset($errors) ? 'is-invalid' : '' ?>" id="courseTitle"
                                placeholder="Enter Course Title">
                            <div class="error-feedback">
                                <?php echo isset($errors['courseTitle']) ? $errors['courseTitle'] : "" ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="start-date">Date-Start</label>
                            <input type="date" name="current-date" class="form-control" id="date-start" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="end-date">Expected End-Date</label>
                            <input type="date" name="end-date" class="form-control" id="end-date" required>
                        </div>
                        <div class="error-feedback text-center">
                            <?php echo isset($errors['date']) ? $errors['date'] : "" ?>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row mb-2">
                        <label class="col-md-3 col-form-label">Assigned Instructor</label>
                        <div class=" col-md-9">
                            <?php
                            $isDisabled = null;
                            require_once("../includes/phpmysqlconnect.php");
                            $sql = "SELECT username,id, isCourseAssigned FROM instructor";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) >= 1):
                                $isDisabled = false;

                                ?>
                                <select name="instructorId"
                                    class="form-select form-select-sm <?php echo isset($errors) ? 'is-invalid' : 'is-valid' ?>">
                                    <option value="" selected>Select an Instructor</option>
                                    <?php while ($row = mysqli_fetch_assoc($res)):

                                        ?>
                                        <option value="<?php echo $row['id']; ?>">
                                            <?php
                                            if ($row['isCourseAssigned'] == "0") {
                                                echo $row['username'];
                                            } else {
                                                echo $row['username'] . "(Already Assigned)";
                                            } ?>
                                        </option>
                                    <?php endwhile;
                                    ?>
                                </select>
                            <?php else:
                                $isDisabled = true;
                                ?>
                                <span>No instructor found in the system. <a href="add-instructor.php" class="text-info">Create
                                        Instructor</a></span>
                            <?php endif; ?>
                            <div class="error-feedback">
                                <?php echo isset($errors['instructorId']) ? $errors['instructorId'] : "" ?>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col-md-3 col-form-label">Select Course Thumnail Image</label>
                        <div class="col-md-9">
                            <input type="file" name="imageFile" class="form-control" id="" accept="image/*" required>
                        </div>
                    </div>
                    <div class="mx-auto col-md-6 mt-4 mb-2">
                        <input type="submit" name="createCourse"
                            class="btn btn-info form-control <?php echo $isDisabled ? "disabled" : "" ?>"
                            value="Create Course">
                        <!-- <input type="submit" name="createCourse" class="btn btn-info form-control" value="Create Course"> -->
                    </div>
                </form>
            <?php else: ?>
                <span class="lead text-center fs-3 text-danger">Sorry, System has No Instructors <br><a
                        class=" btn btn-info text-light" href="add-instructor.php">Create Instructor</a></span>

            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<?php require_once("../includes/footer.php"); ?>