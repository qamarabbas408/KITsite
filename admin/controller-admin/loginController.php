<?php
require_once("../includes/phpmysqlconnect.php");
if (isset($_POST['login'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM adminpanel WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['admin_user_id'] = $row['id'];
            $_SESSION['admin_username'] = $row['username'];
            header("Location:../index.php");
        }
    }
}