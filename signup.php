<?php include "includes/header.php" ?>
<!-- navbar -->
<?php include "includes/navigation.php" ?>
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

<section class="user-showcase bg-danger  position-relative w-100">
    <div class="z-3 position-absolute  bg-dark w-100 "></div>
    <div class="p-5">
        <div class="card w-50 z-3">
            <div class="card-body">
                <h5 class="card-title fw-bold text-center fs-2">User Registration</h5>
                <div class="user-reg border border-black p-4">
                    <form action="user-logged-in.php">
                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="input-title">Name</h5>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" required pattern="[aA-zZ]+">
                                        <label for="" class="form-label">First Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" pattern="[aA-zZ]+">
                                        <label for="" class="form-label">Last Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="input-title">Email</h5>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" placeholder="example@domain.com"
                                            required>
                                        <label for="" class="form-label">Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="input-title">Password</h5>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" required
                                            placeholder="Enter Password">
                                        <label for="" class="form-label">Password</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" required
                                            placeholder="Repeat Password">
                                        <label for="" class="form-label">Repeat Password</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="input-title">Phone</h5>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="number" class="form-control" placeholder="Enter your number"
                                            required>
                                        <label for="" class="form-label">Phone Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="input-title">Education</h5>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="" id="" class="form-control">
                                            <option value="">Matriculation</option>
                                            <option value="">Intermediate</option>
                                            <option value="">Graduation</option>
                                            <option value="">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label class="input-title" for="">Are you Employeed?</label><br>
                                <label for="" class="text-black">Yes</label> <input type="radio" name="Yes" id=""
                                    class="me-4">
                                <label for="" class="text-black">No</label> <input type="radio" name="Yes" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 clearfix">
                                <input type="checkbox" class="me-2" required name="" id=""><label
                                    class="input-title form-label" for="">I agree to all <a href="#">Terms and
                                        Conditions</a></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <input type="submit" class="btn  btn-custom bg-warning  text-uppercase "
                                    value="Register">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix "></div>
<?php include "includes/footer.php" ?>