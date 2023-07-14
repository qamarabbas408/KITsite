<?php
require("../includes/phpmysqlconnect.php");
require("../includes/upload-file.php");
require("../includes/validate-input.php");
$errors = array();
$fileURL = null;
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['createCourse'])) {

    // Retrieve form data
    $courseTitle = $_POST['course-title'];
    $dateStart = $_POST['current-date'];
    $endDate = $_POST['end-date'];
    $assignedInstructorId = $_POST['instructorId'];
    if (isset($_FILES['imageFile']) && intval($_FILES['imageFile']['size']) != 0) {
        $fileURL = uploadFile($_FILES, $courseTitle);
    }

    // Validate the input data
    validateInput($courseTitle, 'courseTitle', $errors);
    validateInput($assignedInstructorId, 'instructorId', $errors);
    if (strtotime($dateStart) > strtotime($endDate)) {
        // Start date is after end date, so set error message
        $errors['date'] = "Start Date must be less then End Date";
    }
    // If validation errors exist, redirect back to index.html with errors parameter
    if (!empty($errors)) {
        $errors = serialize($errors);
        session_start();
        $_SESSION['errors'] = $errors;
        header("Location: ../public/add-course.php");
        exit;
    } else if (empty($errors)) {
        $instructorId = intval($assignedInstructorId);
        $sql = "INSERT INTO courses (`title`, `description`, `start_date`, `end_date`, `course_thumbnail_url`, `instructor_id`)
        VALUES ('$courseTitle',NULL,'$dateStart','$endDate','$fileURL',$instructorId)";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            header("Location:../public/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            exit;
        }
    }




}