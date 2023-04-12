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
                            placeholder="Enter Course Title">
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
                <div class="row form-group mb-2">
                    <div class="col-md-2">
                        <span class="display-6 fs-4">Course Sections</span>
                    </div>
                    <div class="col-md-8">
                        <hr>
                    </div>
                    <div id="accordion-container">
                        <div class="accordion col-md-12 mb-1" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Section 1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row mb-1">
                                            <div class="form-group col-md-6">
                                                <label for="start-date">Enter Title</label>
                                                <input type="text" class="form-control" id="date-start">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="start-date">Upload Video</label>
                                                <input type="file" class="form-control" id="date-start">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="start-date">Discription</label>
                                            <textarea id="editor" name="content" class="col-md-12">
                                        <p>This is some sample content.</p>
                                    </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="delete-section">
                                    <button class="btn btn-danger delete-btn" type="button">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-1 text-center">
                        <button href="" id="add-accordion" class="btn btn-info">Add More Sections</button>
                    </div>
                </div>
                <input type="submit" value="Create Course">
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