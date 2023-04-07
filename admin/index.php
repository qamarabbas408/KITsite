<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['admin_user_id']) && isset($_SESSION['admin_username'])) {
}else{
    header("location:login.php");
}?>
<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active main-color-bg">
                            <i class="fas fa-cog"></i> &nbsp; Dashboard
                        </a>
                        <a href="students.php" class="list-group-item"> <i class="fas fa-list-alt"></i> &nbsp;Students <span
                                class="badge">12</span></a>
                        <a href="courses.php" class="list-group-item"><i class="fas fa-pencil-alt"></i> &nbsp;Courses <span
                                class="badge">33</span></a>
                        <a href="pages.php" class="list-group-item"><i class="fas fa-user"></i> &nbsp;Instructors <span
                                class="badge">2</span></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Summary</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="well dash-box">
                                    <h2><i class="fas fa-user"></i>&nbsp;203</h2>
                                    <h4>Students</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="well dash-box">
                                    <h2><i class="fas fa-pencil-alt"></i>&nbsp;203</h2>
                                    <h4>Courses</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="well dash-box">
                                    <h2><i class="fas fa-chart-bar"></i>&nbsp;203</h2>
                                    <h4>Visitors</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- second panel -->
                    <div class="panel panel-default ">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Latest Students Enrolled</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                               <!-- show only top 5 students recent enrolled 1 day before -->
                                
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <p>Copyright Admin Pane, &copy; 2020</p>
    </footer>
    <!-- Models -->
    <!-- Addpage -->
    <div class="modal fade" id="addpage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Page Title</label>
                            <input type="text" placeholder="Page Body" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Page Body</label>
                            <textarea name="editor1" id="" cols="30" rows="10" placeholder="Page Body"
                                class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">
                                <input type="checkbox">Published
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="">Meta Tags</label>
                            <input type="text" class="form-control" placeholder="Add some Tags...">
                        </div>
                        <div class="form-group">
                            <label for="">Meta Description</label>
                            <input type="text" class="form-control" placeholder="Add Meta Description...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn main-color-bg" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include "includes/footer.php"?>