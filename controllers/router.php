<?php
require_once("../includes/phpmysqlconnect.php");
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['cid'])) {
    $cid = intval($_GET['cid']);
    $sql = "SELECT * FROM courses WHERE id= $cid";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    session_start();
    $_SESSION['courseData'] = $row;
    header("location:../about-a-course.php");
} else {
    header("location:../index.php");
}