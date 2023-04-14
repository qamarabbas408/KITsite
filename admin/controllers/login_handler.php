<?php 
require_once("../includes/phpmysqlconnect.php");
if (isset($_POST['login'])){
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM adminpanel WHERE username = '$username' AND password = '$password'";
        $res  = mysqli_query($conn,$sql);
        if  (mysqli_num_rows($res) == 1 ){
            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['userId'] = $row['id'];
            header("Location:../public/index.php");
        }
        else {
            session_start();
            $_SESSION['errors'] = "No Such User Exists";
            header("Location:../public/login_handler.php");
            exit;

        }
}

}