<?php
include "../includes/phpmysqlconnect.php";
$errors = array();
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $username = $_POST['username'];
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeatPassword"];
    $email = $_POST["email"];
    $phoneNumber = trim($_POST["phoneNumber"]);
    $education = $_POST["education"];
    $isemployed = $_POST['isemployed'];

    // Initialize an array to store error messages

    // Validate the input data
    if (empty($firstName)) {
        $errors["firstName"] = "First name is required.";
    } else if (!preg_match('/^[a-zA-Z]+$/', $firstName)) {
        $errors["firstName"] = "Can't contain Numbers";
    }

    if (empty($username)) {
        $error['username'] = "Username is required";
    } else if (strlen($username) >= 20) {
        $error['username'] = "Username can't be more than 20 letters";
    }

    if (empty($password)) {
        $errors["password"] = "Password is required.";
    }

    if (empty($repeatPassword)) {
        $errors["repeatPassword"] = "Repeat password is required.";
    } else if ($password !== $repeatPassword) {
        $errors["repeatPassword"] = "Passwords do not match.";
    }

    if (empty($email)) {
        $errors["email"] = "Email is required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format.";
    }

    if (empty($phoneNumber)) {
        $errors["phoneNumber"] = "Phone number is required.";
    } else if (!preg_match("/^\+92-\d{3}-\d{7}$/", $phoneNumber)) {
        $errors["phoneNumber"] = "Invalid phone number format.";
    }

    // If validation errors exist, redirect back to index.html with errors parameter
    if (!empty($errors)) {
        $errors = serialize($errors);
        header("Location: ../signup.php?errors=$errors");
        exit;
    }

    // if no validation error is found 
    else {
        $query = "INSERT INTO student (s_firstname, s_lastname, s_education, s_password, s_email, s_username) 
        VALUES ('$firstName', '$lastName', '$education', '$password', '$email', '$username')";
        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if (mysqli_affected_rows($conn) > 0) {
            echo "Data inserted successfully.";
        } else {
            echo "Data could not be inserted.";
        }
        // Close the database connection
        mysqli_close($conn);
    }


}