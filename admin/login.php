
<?php include "includes/header.php"?>
    <nav class="navbar navbar-default ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">AdminPanel</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">
                        Admin Area <small class=""> Account Login</small>
                    </h1>
                </div>

            </div>
        </div>
    </header>


    <section id="main">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-md-offset-4">
                    <form action="controller-admin/loginController.php" method="post" id="login" class="well" action="index.html">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password"class="form-control" placeholder="Enter Password">
                        </div>
                        <input type="submit" name="login" value="Login" class="btn main-color-bg btn-block">
                    </form>


                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <p>Copyright Admin Pane, &copy; 2020</p>
    </footer>

    <script>
        CKEDITOR.replace('editor1');
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>