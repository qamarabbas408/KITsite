<div class="row form-group mb-2">
    <div class="col-md-12 mb-1">
        <span class="display-6 fs-4">Course Modules </span>
        <span class="fs-6 lead text-danger">**Add Course Modules Here </span>
    </div>
    <div id="accordion-container">
        <div class="accordion col-md-12 mb-1" id="section-accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Module 1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#section-accordion">
                    <div class="accordion-body">
                        <input class="form-control" id="moduleName" value="module1" name="moduleName[]" type="text">

                        <div class="row mb-1">
                            <div class="form-group">
                                <label for="start-date">Enter Title</label>
                                <input type="text" class="form-control" name="videoTitle[]" id="date-start">
                            </div>
                            <div class="form-group  d-flex row ">
                                <div class="col-md-5">
                                    <label for="start-date">Upload Video</label>
                                    <input type="file" name="moduleVideo[]" class="form-control" id="date-start">
                                </div>
                                <div class="col-md-2 text-center">
                                    <p></p>
                                    <p class="display-6 fs-2  text-decoration-underline">OR</p>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Paste URL here</label>
                                    <input type="text" name="videoURL[]" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start-date">Discription</label>
                            <textarea id="editor" name="moduleDescription[]" class="col-md-12">
                                        <p class="" style="width:100%;">This is some sample content.</p>
                                    </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>




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