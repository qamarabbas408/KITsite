<nav class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" ari   a-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">AdminPanel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Dashboard</a></li>
                <li><a href="students.php">Students</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="pages.php">Instructors</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Welcome, User</a></li>
                <li><a href="controller-admin/logoutController.php">Logout</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><i class="fas fa-cog"></i>
                    Dashboard <small>Manage your Site</small>
                </h1>
            </div>
            <div class="col-md-2">
                <!-- dropdown -->
                <div class="dropdown create">
                    <a href="create-course.php" class="btn btn-warning btn-default dropdown-toggle">
                        Create Courses
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- section breadcrumb -->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">Students</li>
        </ol>
    </div>
</section>