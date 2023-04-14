<?php
require_once "../includes/header.php";
require_once "../includes/navigation.php"; ?>
<!--CKEditor  -->
<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
<section class="add-course form-style">
    <div class="container">
        <div class="row justify-content-center">
            <h5 class="display-1  text-center fs-2">Create Course</h5>
            <form>
                <div class="row  mb-2">
                    <div class="form-group">
                        <label>Course Title</label>
                        <input type="text" name="course-title" class="form-control" id="courseTitle"
                            placeholder="Enter Course Title" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-6">
                        <label for="start-date">Date-Start</label>
                        <input type="date" class="form-control" id="date-start">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="end-date">Expected End-Date</label>
                        <input type="date" class="form-control" id="end-date">
                    </div>
                </div>
                <hr>
                <div class="row form-group mb-2">
                    <div class="col-md-12 mb-1">
                        <span class="display-6 fs-4">Course Modules </span>
                        <span class="fs-6 lead text-danger">**Add Course Modules Here </span>
                    </div>
                    <div id="accordion-container">
                        <?php include "../includes/accordion.php" ?>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-6 text-start">
                        <button href="" id="add-accordion" class="btn btn-outline-info btn-sm">Add More
                            Sections</button>
                    </div>
                    <div class="col-sm-6 text-end">
                        <button href="" id="delete-accordion" class="btn btn-outline-danger btn-sm ">Delete
                            Section</button>
                    </div>
                </div>
                <hr>
                <div class="form-group row mb-2">
                    <label class="col-md-3 col-form-label">Assigned Instructor</label>
                    <div class=" col-md-9">
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected>Select An Option</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label class="col-md-3 col-form-label">Select Course Thumnail Image</label>
                    <div class="col-md-9">
                        <input type="file" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="mx-auto col-md-6 mt-4 mb-2">
                    <input type="submit" class="btn btn-info form-control" value="Create Course">
                </div>
            </form>
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