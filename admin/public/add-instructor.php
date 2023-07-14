<?php
session_start();
if (isset($_SESSION['errors'])) {
    // Unserialize the validation errors array
    $errors = unserialize($_SESSION['errors']);
    unset($_SESSION['errors']);
}
require_once "../includes/header.php";
require_once "../includes/navigation.php"; ?>
<section class="add-instructor form-style">
    <div class="container">
        <div class="row justify-content-center">
            <h5 class="display-1  text-center fs-2">Create Instructor</h5>
            <form action="../controllers/addInstructor_handler.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" class="form-control" id="firstName"
                            placeholder="Enter First Name" required>
                        <div class="col-auto">
                            <?php if (isset($errors['firstname'])): ?>
                                <span id="username" class="form-text text-danger">
                                    <?= $errors['firstname'] ?>
                                </span>
                            <?php else: ?>
                                <span id="username" class="form-text text-success">
                                    Must Start with an alphabet and Special characters not allowed
                                </span>
                            <?php endif; ?>

                        </div>
                    </div>


                    <div class="form-group col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" class="form-control" id="lastName"
                            placeholder="Enter Last Name">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-6">
                        <label for="email">Username</label>
                        <input type="text" name="username" pattern="^[a-zA-Z][a-zA-Z0-9]*$" class="form-control"
                            id="email" placeholder="Enter username" required>
                        <div class="col-auto">
                            <?php if (isset($errors['username'])): ?>
                                <span id="username" class="form-text text-danger">
                                    <?= $errors['username']; ?>
                                </span>
                            <?php else: ?>
                                <span id="username" class="form-text text-success">
                                    Must Start with an alphabet and Special characters not allowed
                                </span>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="Password" class="col-md-3 col-form-label">Password</label>
                    <div class="col-md-5">
                        <input type="password" class="form-control" name="password" required>
                        <?php if (isset($errors['password'])): ?>
                            <span id="password" class="form-text text-danger">
                                <?php echo $errors['password']; ?>
                            </span>
                        <?php else: ?>
                            <span id="password" class="form-text text-success">
                                Must be 8-10 characters.
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="profilePicture" class="col-md-3 col-form-label">Profile Picture</label>
                        <input type="file" class="form-control-file col-md-5" name="imageFile" id="imageFile" required
                            accept="image/*">
                        <span id="" class="form-text text-success">
                            JPEG, PNG, and GIF
                        </span>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label class="col-md-3 col-form-label" for="aboutYourself">About Instructor</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="aboutYourself" id="aboutYourself"
                            placeholder="About the Instructor"></textarea>
                        <div id="wordCount"></div>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="phoneNumber" class="col-md-3 col-form-label">Phone Number</label>
                    <div class="col-md-9">
                        <input type="tel" name="phoneNumber" placeholder="+923111588908" class="form-control"
                            pattern="^\+[1-9]\d{0,2}\d{3}\d{3}\d{4}$" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="employmentStatus" class="col-md-3 col-form-label">Employment Status</label>
                    <div class="col-md-9">
                        <select class="form-control" name="employmentStatus" id="employmentStatus">
                            <option value="">Select Status</option>
                            <option value="employed">Employed</option>
                            <option value="unemployed">Unemployed</option>
                            <option value="student">Student</option>
                        </select>
                        <?php if (isset($errors['employmentStatus'])): ?>
                            <span class="form-text text-danger">
                                <?php echo $errors['employmentStatus']; ?>
                            </span>
                        <?php else: ?>
                            <span class="form-text text-success">
                                Select your Employment Status
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="employmentStatus" class="col-md-3 col-form-label">Highest Degree</label>
                    <div class="col-md-9">
                        <select class="form-control" name="degree" id="employmentStatus">
                            <option value="">Select highest Degree</option>
                            <option value="employed">Graduate</option>
                            <option value="unemployed">Post Graduate</option>
                        </select>
                        <?php if (isset($errors['degree'])): ?>
                            <span class="form-text text-danger">
                                <?php echo $errors['degree']; ?>
                            </span>
                        <?php else: ?>
                            <span class="form-text text-success">
                                Select your Degree
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="employmentStatus" class="col-md-3 col-form-label">Skills</label>
                    <div class="col-md-9">
                        <select class="form-control" name="skill">
                            <option value="">Select a Skill</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Backend/Databases">Backend/Databases</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="Graphics">Graphics</option>
                            <option value="MS Office">MS Office</option>
                        </select>
                        <?php if (isset($errors['skill'])): ?>
                            <span class="form-text text-danger">
                                <?php echo $errors['skill']; ?>
                            </span>
                        <?php else: ?>
                            <span class="form-text text-success">
                                Select your Skill
                            </span>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="mx-auto col-md-6 mt-4 mb-2">
                    <input type="submit" name="addInstructor" class="btn btn-info form-control"
                        value="Create Instructor">
                </div>
            </form>
        </div>
    </div>
</section>



<?php require_once("../includes/footer.php"); ?>