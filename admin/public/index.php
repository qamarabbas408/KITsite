<?php
require_once ("../includes/phpmysqlconnect.php");
session_start();
// count students
$instructorResults = "";
$studentResults = "";
$courseResults = "";
$sql = "SELECT * FROM student LIMIT 5";
$studentResults = mysqli_query($conn, $sql);
// Count total instructors
$sql = "SELECT * FROM instructor LIMIT 5";
$instructorResults = mysqli_query($conn, $sql);
// Count total courses
$sql = "SELECT * FROM courses LIMIT 5";
$courseResults = mysqli_query($conn, $sql);

require_once "../includes/header.php";
require_once "../includes/navigation.php";
require_once "../includes/dashboard.php";?>

<?php require_once("../includes/footer.php"); ?>