<?php
session_start();
if (isset($_SESSION['error'])) {
    var_dump($_SESSION['error']);
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
include "includes/header.php"; ?>
<!-- navbar -->
<?php include "includes/navigation.php" ?>

<div class="container my-2">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="index.php">Home</a></li>
                <li class=" breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </nav>
    </div>
</div>

<section class=" login  w-100 bg-primary">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-6 text-center bluescreen">
                <img src="images/login_learning.png" class="img-fluid" alt="">
                <div class="head1">
                    <h1 class="fs-1 fw-bold">Welcome!</h1><span class="fs-1 fw-bold">To Our Website</span>
                </div>
            </div>
            <div class="col-lg-6 bg-white border border-warning p-4 otherColumn">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10 col-sm-12 text-primary">
                        Don't Have An Account!
                        <a href="signup.php" class=" ms-2 text-light btn btn-warning">Register</a>
                    </div>
                    <div class="mt-5 text-center">
                        <h2 class="fw-bold fs-1 ">Hello! Welcome Back</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="controllers/loginViewController.php" method="post">
                        <div class="col-md-8 mb-3">
                            <label for="" class="form-label"> Enter Your Email</label>
                            <input type="text" name="email" required value="" class="p-3 form-control">
                        </div>
                        <div class="col-md-8">
                            <label for="" class="form-label"> Enter Your Password</label>
                            <input type="password" name="password" required value="" class="p-3 form-control">
                            <p>Forget Password! <a href="signup.php
                                " class="text-primary">Click Here</a></p>
                            <hr class="text-warning m-0">
                        </div>

                        <div class="col-md-12  mt-3">
                            <input type="submit" value="Login" name="login" class="btn btn-primary ps-4 pe-4">
                        </div>
                        <?php if (isset($error)): ?>
                            <div class="col-md-12">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php" ?>