<?php include "controllers/userProfileViewController.php"?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<!-- Profile Section -->
<div class="container profile-section">
    <div class="row">
        <div class="col-lg-4 p-5">
            <div cla ss="text-center">
                <img src="images/testi3.jpg" class="rounded-circle img-fluid" alt="">
                <h2 class="fw-bold my-3"><?php echo isset($username) ? ucfirst($username) : "No Value Found" ?></h2>
            </div>
            <ul class="nav nav-tabs flex-column p-2 " id="myTab" role="tablist">
                <li class="nav-item  mb-1" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><ion-icon
                            name="home"></ion-icon>Accounts</button>
                </li>
                <li class="nav-item  mb-1 " role="presentation ">
                    <button class="nav-link  text-dark " id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false"><ion-icon name="key-outline"></ion-icon>Password </button>
                </li>
                <li class="nav-item  mb-1" role="presentation">
                    <button class="nav-link  text-danger" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                        aria-selected="false"> <ion-icon name="trash-outline"></ion-icon>Delete Account </button>
                </li>

            </ul>

        </div>
        <div class="col-lg-8">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="container">
                        <div class="row p-5">
                            <form action="" id="user-profile">
                                <div class="row my-2">
                                    <h3 class="fw-bold mb-3">Account Settings </h3>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">First Name:</label>
                                        <input type="text" name="fname" value="<?php echo isset($firstName) ? $firstName:'' ?>"class="form-control" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Last Name:</label>
                                        <input type="text" name="fname" value="<?php echo isset($lastName) ? $lastName:'' ?>" class="form-control" id="">
                                    </div>
                                    <div class="mb-3"></div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Email:</label>
                                        <input type="email" disabled name="fname" value="<?php echo isset($email) ? $email:'' ?>" class="form-control" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Phone Number:</label>
                                        <input type="text" name="fname" value="<?php echo isset($firstname) ? $firstname:'' ?>"  class="form-control" id="">
                                    </div>
                                    <div class="mb-3"></div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Bio</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Enter about Yourself"></textarea>
                                    </div>
                                    <hr class="text-warning my-2">
                                </div>
                                <input type="submit" value="" class="d-none" class="btn btn-danger">
                                <button  id="update-btn" class="btn btn-warning text-light ps-5 pe-5"> Updated </button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div class="container">
                        <div class="row p-5">
                            <form action="">
                                <div class="row my-2">
                                    <h3 class="fw-bold mb-3">Password Settings </h3>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Current Password</label>
                                        <input type="text" name="fname" class="form-control" id="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">New Password</label>
                                        <input type="text" name="fname" class="form-control" id="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Confirm Password</label>
                                        <input type="text" name="fname" class="form-control" id="">
                                    </div>

                                    <hr class="text-warning my-2">
                                </div>
                                <input type="submit" class="btn btn-warning text-light ps-5 pe-5"
                                    value="Change Password ">
                            </form>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">Delete Your Account</div>

            </div>
        </div>
    </div>
</div>
<!-- End of Profile Section -->
<!-- Footer Section -->

<?php include "includes/footer.php" ?>