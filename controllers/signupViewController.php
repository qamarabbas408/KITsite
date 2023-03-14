<?php
$errors = array();
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeatPassword"];
    $email = $_POST["email"];
    $phoneNumber = trim($_POST["phoneNumber"]);
    $education = $_POST["education"];

    // Initialize an array to store error messages

    // Validate the input data
    if (empty($firstName)) {
        $errors["firstName"] = "First name is required.";
    } else if (!preg_match('/^[a-zA-Z]+$/', $firstName)) {
        $errors["firstName"] = "Can't contain Numbers";
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
    else{
        
    }


}