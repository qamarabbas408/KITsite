<?php include "includes/header.php" ?>
    <!-- navbar -->
<?php include "includes/navigation.php"?>
    <!-- End of Header Section -->
    <div class="container my-2">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="index.html"">Home</a></li>
                    <li class=" breadcrumb-item active" aria-current="page">User Registration</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="user-showcase bg-danger   position-relative w-100">
        <div class="z-3 position-absolute p-5  bg-dark w-100 overlay"></div>
        <div class="card w-50 z-3 position-absolute">
            <div class="card-body">
                <h5 class="card-title fw-bold text-center fs-2">User Registration</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a> -->
                <form action="">
                    <div class="row my-2">
                        <div class="col-md-6">
                            <label for="" class="form-label">First Name:</label>
                            <input type="text" name="fname" class="form-control" id="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Last Name:</label>
                            <input type="text" name="fname" class="form-control" id="">
                        </div>
                        <hr class="text-warning my-2">
                    </div>
                    <div class="row mb-2">
                        <label for="colFormLabel" class="col-sm-2 col-md-12 col-form-label">Email:</label>
                        <div class="col-sm-10 col-md-12">
                            <input type="email" class="form-control" id="colFormLabel" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <label for="colFormLabel" class="col-sm-2 col-md-12 col-form-label">CNIC:</label>
                        <div class="col-sm-10 col-md-12">
                            <input type="number" class="form-control col-md-12" id="colFormLabel"
                                placeholder="Identity Number">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="colFormLabel" class="col-sm-2 col-md-12 col-form-label">Address:</label>
                        <div class="col-sm-10 col-md-12">
                            <input type="email" class="form-control" id="colFormLabel" placeholder="Address">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-6">
                            <label for="" class="form-label">Contact Number:</label>
                            <input type="number" name="fname" placeholder="Contact Number" class="form-control" id="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Highest Qualification:</label>
                            <input type="text" name="fname" class="form-control" id="">
                        </div>
                        <hr class="text-warning my-2">
                    </div>
                    <div class="row my-2">
                        <div class="col-md-6">
                            <label for="" class="form-label">Date of Training:</label>
                            <input type="date" name="fname" class="form-control" id="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Employed:</label>
                            <div class="col-md-12">
                                <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1" checked>

                                <label class="form-check-label me-2" for="gridRadios1">
                                    Yes
                                </label>
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    No
                                </label>
                            </div>
                        </div>
                        <hr class="text-warning my-2">
                    </div>
                    <div class="row">
                        <div class="col-md-6 w-50 width-100 col-sm-12">
                            <label for="" class="form-label">Select Any Five SkillSets:</label>
                            <select class="form-select" multiple aria-label="multiple select example">
                                <option selected>DataScience</option>
                                <option value="1">Python</option>
                                <option value="2">Java</option>
                                <option value="3">PHP</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Expectations from the Course</label>
                            <textarea name="" class="form-control
                            " id="" cols="30" placeholder="Expectations from the course in 50 words"></textarea>
                        </div>
                        <hr class="text-warning">
                    </div>
                    <div class="col-md-12 mt-3 text-center ">
                        <p class="inner-signIn">Alreay have an Account, <a href="login.html" class="text-primary">Sign In</span></p>
                        <input type="submit" class="btn btn-warning text-light " value="Create Your Account">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"?>