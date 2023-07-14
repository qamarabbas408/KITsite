<?php
require_once "../includes/phpmysqlconnect.php";
require "../includes/upload-file.php";
require "../includes/validate-input.php";
$errros = array();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addInstructor'])) {
    // Assign form inputs to variables
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $employmentStatus = $_POST['employmentStatus'];
    $skill = $_POST['skill'];
    $degree = $_POST['degree'];
    $aboutYourself = $_POST['aboutYourself'];
    echo $skill, $degree, $employmentStatus;
    $fileURL = null;
    if (isset($_FILES['imageFile'])) {
        $fileURL = uploadFile($_FILES, $username);
    }

    // Validate the input data
    validateInput($firstName, 'firstName', $errors);
    validateInput($lastName, 'lastName', $errors);
    validateInput($username, 'username', $errors);
    validateInput($email, 'email', $errors);
    validateInput($password, 'password', $errors);
    validateInput($phoneNumber, 'phoneNumber', $errors);
    validateInput($skill, 'skill', $errors);
    validateInput($employmentStatus, 'employmentStatus', $errors);
    validateInput($degree,'degree', $errors);



    // If validation errors exist, redirect back to index.html with errors parameter
    if (!empty($errors)) {
        $errors = serialize($errors);
        session_start();
        $_SESSION['errors'] = $errors;
        header("Location: ../public/add-instructor.php");
        exit;
    } else {
        //$prepare query 
        $sql = "INSERT INTO instructor (id, firstname, lastname, username, email,phone, password,degree,skill, profilePictureURL, empStatus, created_at, biography) 
VALUES (NULL, '$firstName', '$lastName', '$username', '$email','$phoneNumber', '$password','$degree','$skill', '$fileURL', '$employmentStatus', NOW(), '$aboutYourself')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('New Instructor Created successfully!');</script>";
            echo "<script>setTimeout(function(){alert('');}, 2000);</script>";
            header("location:../public/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            exit;
        }
        mysqli_close($conn);
    }

}