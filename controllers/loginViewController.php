<?php
include "../includes/phpmysqlconnect.php";

if (isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM student WHERE s_email='$email' AND s_password='$password'";
        // $result=mysqli_query($conn,$sql);
        $result = $conn->query($sql);

        // Check if result is not empty
        if ($result->rowCount() > 0) {
            // A matching user is found
            // Fetch data from result object as associative array
            $student = $result->fetch(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['user_id'] = $student['s_ID'];
            $_SESSION['username'] = $student['s_username'];
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