<?php
include "../includes/phpmysqlconnect.php";

if (isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM student WHERE s_email='$email' AND s_password='$password'";
        // $result=mysqli_query($conn,$sql);

        $result = mysqli_query($conn,$sql);
        // Check if result is not empty
        if (mysqli_num_rows($result) == 1) {
            // A matching user is found
            $row = mysqli_fetch_assoc($result);

            session_start();
            $_SESSION['user_id'] = $row['s_ID'];
            $_SESSION['username'] = $row['s_username'];
            header("location:../user-logged-in.php");
        }
        else{
            session_start();
            $error="No Such Email Exists";
            $_SESSION['error']=$error;
            header("Location:../login.php");
            exit;
        }
    }
   
}