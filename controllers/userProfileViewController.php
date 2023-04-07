<?php
include "includes/phpmysqlconnect.php";
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['user_id'])){
    $username= $_SESSION['username'];
    $userId = $_SESSION['user_id'];
    // echo '<script>alert("Data herer");</script>'; // diseplay the result in an alert window using JavaScript
    $query = "SELECT * FROM student WHERE s_username = '$username' AND s_ID = $userId";
    $result = mysqli_query($conn, $query);
    if ($result) {
        // Fetch user data
        $row = mysqli_fetch_assoc($result);
        $firstName = $row['s_firstname'];
        $lastName = $row['s_lastname'];
        $email = $row['s_email'];
        $_password = $row['s_password'];
        $_education = $row["s_education"];
      } else {
        // Query failed
        echo "Error: " . mysqli_error($conn);
      }
}
else {
    header("location:index.php");
    exit();
}
?>