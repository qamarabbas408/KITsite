<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['admin_user_id']) && isset($_SESSION['admin_username'])) {
} else {
    header("location:login.php");
} ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>



<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Courses</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Filter Pages...">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Course Name</th>
                                <th>Instructor</th>
                                <th>Course Start</th>
                                <th>Course End</th>
                                <th>Students Enrolled</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Web Development</td>
                                <!-- <td><i class="fas fa-check"></i></td> -->
                                <td><a href="instructor.php">Qamar Abbas</a></td>
                                <td>mm/dd//yy</td>
                                <!-- <input type="date" name="" id=""> -->
                                <td><a href="changetime.php">mm/dd//yy</a></td>
                                <td>Web Development</td>
                                <td>
                                    <a href="edit.html" class="btn btn-default btn-danger">Delete</a>
                                    <a href="edit.html" class="btn btn-default btn-primary">Archive</a>

                                </td>
                            </tr>

                        </table>

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

</div>
<?php include "includes/footer.php" ?>