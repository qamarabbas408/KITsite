<?php include "includes/header.php" ?>
<?php include "includes/navigation.php"?>
    <!-- Profile Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-5">
                <div cla ss="text-center">
                    <img src="images/testi3.jpg" class="rounded-circle img-fluid" alt="">
                    <h2 class="fw-bold my-3">Jambolee Khan</h2>
                </div>
                <ul class="nav nav-tabs flex-column p-2 " id="myTab" role="tablist">
                    <li class="nav-item  mb-1" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true"><ion-icon name="home"></ion-icon>Accounts</button>
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
                                <form action="">
                                    <div class="row my-2">
                                        <h3 class="fw-bold mb-3">Account Settings </h3>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">First Name:</label>
                                            <input type="text" name="fname" class="form-control" id="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Last Name:</label>
                                            <input type="text" name="fname" class="form-control" id="">
                                        </div>
                                        <div class="mb-3"></div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Email:</label>
                                            <input type="email" name="fname" class="form-control" id="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Phone Number:</label>
                                            <input type="number" name="fname" class="form-control" id="">
                                        </div>
                                        <div class="mb-3"></div>
                                        <div class="col-md-12">
                                            <label for="" class="form-label">Bio</label>
                                            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <hr class="text-warning my-2">
                                    </div>
                                    <input type="submit" class="btn btn-warning text-light ps-5 pe-5" value="Update ">
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
                                            <label for="" class="form-label">Conform Password</label>
                                            <input type="text" name="fname" class="form-control" id="">
                                        </div>
                                     
                                        <hr class="text-warning my-2">
                                    </div>
                                    <input type="submit" class="btn btn-warning text-light ps-5 pe-5" value="Change Password ">
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
    <footer>
        <div class="container-fluid bg-primary ">
            <div class="container">
                <div class="row text-light p-4">
                    <div class="col-md-6">
                        <h1 class="fw-bold fs-1 m-0">Begin Change Today</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="courses.html" class="btn d-block btn-warning m-0 rounded-5  text-light">Explore Courses
                            Now</a>
                    </div>
                </div>

            </div>
            <div class="row bg-dark p-5 text-white">
                <div class="col-md-3">
                    <h3 class=" fs-4 fw-bold">Contact info</h3>
                    <p>Address: Pakistan Kararchi, Abul Isphane Road 123 Street </p>
                    <p>Phone Number: +92-3111588908</p>
                    <p>All Rights Reserved @dingDong.com</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white fs-4 fw-bold">Quick Links</h3>
                    <a class="d-block text-white my-2" href="">Home</a>
                    <a class="d-block text-white my-2" href="">Services</a>
                    <a class="d-block text-white my-2" href="">Contact</a>
                    <a class="d-block text-white my-2" href="">Courses</a>


                </div>
                <div class="col-md-3">
                    <h3 class="text-white fs-4  fw-bold">Other Learning Sites</h3>
                    <a class="d-block text-white my-2" href="">Blogging</a>
                    <a class="d-block text-white my-2" href="">News</a>
                    <a class="d-block text-white my-2" href="">Technology</a>
                    <a class="d-block text-white my-2" href="">Articles</a>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white fs-4 fw-bold">Subscribe</h3>
                    <form action="">
                        <input type="text" name="" class="form-control p-3" id="">
                    </form>
                    <p class="mt-2">Subscribe to our Mailing Service to keep Updated</p>
                </div>
            </div>
        </div>
    </footer>

    <?php include "includes/footer.php"?>