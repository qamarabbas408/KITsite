<?php
// Function to validate input fields
function validateInput($input, $type, &$errors)
{
    switch ($type) {
        case 'firstName':
            if (empty($input)) {
                $errors[$type] = "First name is required.";
            } else if (!preg_match('/^[a-zA-Z]+$/', $input)) {
                $errors[$type] = "Can't contain numbers";
            }
            break;
        case 'username':
            if (empty($input)) {
                $errors[$type] = "Username is required";
            } else if (strlen($input) >= 20) {
                $errors[$type] = "Username can't be more than 20 letters";
            } else if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $input)) {
                $errors[$type] = "Username starts with special symbol/number";
            }
            break;
        case 'lastName':
            if (empty($input)) {
                $errors[$type] = "Last name is required.";
            } else if (!preg_match('/^[a-zA-Z]+$/', $input)) {
                $errors[$type] = "Can't contain numbers";
            }
            break;
        case 'password':
            if (empty($input)) {
                $errors[$type] = "Password is required.";
            } else if (strlen($input) >= 15) {
                $errors[$type] = "Password doesn't contain more than 10 characters";
            } else if (strlen($input) <= 6) {
                $errors[$type] = "Password must contain more than 6 characters";
            }
            break;
        case 'email':
            if (empty($input)) {
                $errors[$type] = "Email is required.";
            } else if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
                $errors[$type] = "Invalid email format.";
            }
            break;
        case 'phoneNumber':
            if (empty($input)) {
                $errors[$type] = "Phone number is required.";
            } else if (!preg_match("/^\+[1-9]\d{0,2}\d{3}\d{3}\d{4}$/", $input)) {
                $errors[$type] = "Invalid phone number format.";
            }
            break;
        case 'courseTitle':
            if (empty($input)) {
                $errors[$type] = "Course Title is required.";
            } else if (strlen($input) >= 60) {
                $errors[$type] = "Title must not be larger then 40 characters";

            }
            break;
        case 'instructorId':
            if (empty($input)) {
                $errors[$type] = "Select at least one Instructor for this Course";
            }
            break;
        case 'degree':
            if (empty($input)) {
                $errors[$type] = "Please Select your highest Degree";
            }
            break;
        case 'skill':
            if (empty($input)) {
                $errors[$type] = "Select at least one skill";
            }
            break;
        case 'employmentStatus':
            if (empty($input)) {
                $errors[$type] = "Select at least one option";
            }
            break;
    }
}