<nav class="navbar navbar-expand-lg  ">
    <div class="container-fluid">
        <!-- Navbar Brand -->
        <a class="navbar-brand" href="index.php">
            <ion-icon size="large" class="book-icon text-warning" name="settings-outline"></ion-icon>
            <span style="font-size:1.5rem">Admin Panel</span>
        </a>
        <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="add-course.php">Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="students_view_ad.php">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="add-instructor.php">Instructor</a>
                </li>
                <li class="nav-item dropdown">
                    <a href=""
                        class="d-none d-lg-none d-md-block text-decoration-none border border-warning rounded-pill text-center">Logout</a>
                    <button class="user d-lg-block d-md-none  " type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false ">
                        <div class="d-flex align-items-center  ">
                            <?php if(isset($_SESSION['username']) && isset($_SESSION['userId'])): ?>
                            <span class="nav-link d-inline p-0 "><?= $_SESSION['username'] ?></span>
                            <img src="../../images/testi2.jpg" class="img-fluid rounded-circle" alt="">
                            <?php endif ?>
                        </div>

                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>

                </li>
            </ul>

        </div>

    </div>
</nav>
<div class="bread-crumps container mt-2">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav>
</div>