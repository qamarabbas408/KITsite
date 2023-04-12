<?php
require_once "../includes/header.php";
require_once "../includes/navigation.php"; ?>
<section class="add-instructor form-style">
    <div class="container">
        <div class="row justify-content-center">
            <h5 class="display-1  text-center fs-2">Create Instructor</h5>
            <form>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" required
                            pattern="^[a-zA-Z]+$">
                        <div class="col-auto">
                            <span id="firstName" class="form-text">
                                Contains only Alphabetic characters.
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
                        <span id="firstName" class="form-text">
                            Must be 8-10 characters.
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="profilePicture" class="col-md-3 col-form-label">Profile Picture</label>
                        <input type="file" class="form-control-file" id="profilePicture">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="courseList" class="col-md-3 col-form-label">Course Assigned</label>
                    <div class="col-md-9">
                        <select class="form-control" id="courseList">
                            <option value="webdev">Web Development</option>
                            <option value="ai">Artificial Intelligence</option>
                            <option value="data">Data Science</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-md-3 col-form-label" for="aboutYourself">About Instructor</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="aboutYourself" rows="3"
                            placeholder="About the Instructor"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="phoneNumber" class="col-md-3 col-form-label">Phone Number</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="phoneNumber" placeholder="Enter Phone Number"
                            required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="employmentStatus" class="col-md-3 col-form-label">Employment Status</label>
                    <div class="col-md-9">
                        <select class="form-control" id="employmentStatus">
                            <option value="employed">Employed</option>
                            <option value="unemployed">Unemployed</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-info" value="Create Instructor">
                </div>
            </form>
        </div>

    </div>
</section>



<?php require_once("../includes/footer.php"); ?>