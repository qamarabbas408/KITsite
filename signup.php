<?php
// Check if validation errors exist
if (isset($_GET['errors'])) {
    // Unserialize the validation errors array
    $errors = unserialize($_GET['errors']);
    // Display the validation errors to the user

}
?>

<?php include "includes/header.php" ?>
<!-- navbar -->
<?php include "includes/navigation.php" ?>
<!-- End of Header Section -->
<div class="container my-2">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="index.html">Home</a></li>
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
                    <form action="controllers/signupViewController.php" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="input-title">Name</h5>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="firstName" class="form-control"
                                             value="" required
                                            placeholder="Enter your FirstName">
                                        <label for="" class="form-label m-0 text-wrap">First Name</label>
                                        <?php if (isset($errors['firstName'])): ?>
                                            <div class="col-md-12 mb-1 text-danger text-wrap" style="font-size: 12px">
                                                <?php echo $errors['firstName']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="lastName" value="" class="form-control"
                                            pattern="[aA-zZ]+">
                                        <label for="" class="form-label">Last Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="input-title">Username</h5>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="username" class="form-control"
                                        placeholder="Enter your username" required>
                                        <label for="" class=" m-0 form-label">Username</label>
                                        <?php if (isset($errors['username'])): ?>
                                            <div class="col-md-12 mb-1 text-danger" style="font-size: 12px">
                                                <?php echo $errors['username']; ?>
                                            </div>
                                        <?php endif; ?>
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
                                        <input type="email" name="email" class="form-control"
                                            placeholder="example@domain.com" required>
                                        <label for="" class=" m-0 form-label">Email</label>
                                        <?php if (isset($errors['email'])): ?>
                                            <div class="col-md-12 mb-1 text-danger" style="font-size: 12px">
                                                <?php echo $errors['email']; ?>
                                            </div>
                                        <?php endif; ?>
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
                                        <input type="password" name="password" class="form-control" required
                                            placeholder="Enter Password">
                                        <label for="" class=" m-0 form-label">Password</label>
                                        <?php if (isset($errors['password'])): ?>
                                            <div class="col-md-12 mb-1 text-danger" style="font-size: 12px">
                                                <?php echo $errors['password']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="repeatPassword" class="form-control" required
                                            placeholder="Repeat Password">
                                        <label for="" class=" m-0 form-label">Repeat Password</label>
                                        <?php if (isset($errors['repeatPassword'])): ?>
                                            <div class="col-md-12 mb-1 text-danger" style="font-size: 12px">
                                                <?php echo $errors['repeatPassword']; ?>
                                            </div>
                                        <?php endif; ?>
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
                                        <input type="tel" id="phone" class="form-control" name="phoneNumber" required
                                            placeholder="+92-000-0000000">
                                        <label for="" class=" m-0 form-label">Phone Number</label>
                                        <?php if (isset($errors['phoneNumber'])): ?>
                                            <div class="col-md-12 mb-1 text-danger" style="font-size: 12px">
                                                <?php echo $errors['phoneNumber']; ?>
                                            </div>
                                        <?php endif; ?>
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
                                        <select id="education" name="education" class="form-control" required>
                                            <option value="">--Select Education--</option>
                                            <option value="high-school">High School</option>
                                            <option value="college">College</option>
                                            <option value="university">University</option>
                                        </select>
                                    </div>
                                    <?php if (isset($errors['education'])): ?>
                                        <div class="col-md-12 mb-1 text-danger" style="font-size: 12px">
                                            <?php echo $errors['education']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label class="input-title" for="">Are you Employeed?</label><br>
                                <label for="" class="text-black">Yes</label> <input type="radio" name="isemployed" required value="true" id=""
                                    class="me-4">
                                <label for="" class="text-black">No</label> <input type="radio" name="isemployed" required id="" value="false">
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
                                    value="Register" name="Register">
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