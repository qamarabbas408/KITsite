<?php
session_start();
if (isset($_SESSION['errors'])) {
    $error = $_SESSION['errors'];
    unset($_SESSION['errors']);
}
else if (isset($_SESSION['username']) && isset($_SESSION['userId'])){
    header("location:index.php");
}


require_once "../includes/header.php"; ?>
<section class="login position-relative">
    <div class="position-absolute top-50 start-50 translate-middle form-style p-2">
        <form action="../controllers/login.php" method="post">
            <div class="form-group row mb-2">
                <label class="col-md-4 col-form-label" for="aboutYourself">Username</label>
                <div class="col-md-8">
                    <input type="text" name="username" id="" class="form-control form-control-sm" required>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-md-4 col-form-label" for="aboutYourself">Password</label>
                <div class="col-md-8">
                    <input type="password" name="password" id="" class="form-control form-control-sm" required>
                </div>
            </div>
            <div class="mx-auto">
                <input type="submit" name="login" value="Login" class="btn btn-info form-control">
            </div>
        </form>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
                <?=  $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
    </div>

</section>

<?php require_once("../includes/footer.php"); ?>