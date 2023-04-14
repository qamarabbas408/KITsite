<?php
require_once "../includes/phpmysqlconnect.php";
$targetDir = "D:\LocalServer\htdocs\KITsite\admin\uploads\ ";
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['addInstructor']) {
    // Assign form inputs to variables
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $employmentStatus = $_POST['employmentStatus'];
    $courseList = $_POST['courseList'];
    $aboutYourself = $_POST['aboutYourself'];
    $profilePicture = $_FILES['profilePicture'];

    $targetFile = $targetDir . basename($_FILES["profilePicture"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        exit;
    }

    // Check file size
    // 500kb or .5mb
    if ($_FILES["profilePicture"]["size"] > 41943040) {
        echo "Sorry, your file is too large.";
        exit;
    }

    // Move the uploaded file to the uploads directory
    if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["profilePicture"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    // // upload Images 
    // // Check if file was uploaded
    // if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] === UPLOAD_ERR_OK) {
    //     // process file upload
    //     $fileName = $_FILES['profilePicture']['name'];
    //     $fileTmpName = $_FILES['profilePicture']['tmp_name'];
    //     $fileSize = $_FILES['profilePicture']['size'];
    //     $fileError = $_FILES['profilePicture']['error'];
    //     $fileType = $_FILES['profilePicture']['type'];
    // } else {
    //     // handle file upload error
    //     echo " working";
    // }


    // process_uploaded_file($profilePicture, 'profile_pictures');

    // Do something with the form data, such as insert into a database
    // ...
}