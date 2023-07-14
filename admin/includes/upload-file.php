<?php
require_once("console-log.php");
function uploadFile($file, $username)
{
    $uploadDir = "../uploads/";
    $targetFile = $uploadDir . $username . "_" . basename($file["imageFile"]["name"]);
    $fileURL = str_replace("../", "", $targetFile);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    // // Check if file already exists
    // if (file_exists($targetFile)) {
    //     console_log("Sorry, file already exists.");
    //     exit;
    // }

    // Check file size
    // 500kb or .5mb
    if ($file["imageFile"]["size"] > 10485760) {
        console_log("Sorry, your file is too large.");
        exit;
    }
    // Move the uploaded file to the uploads directory
    if (move_uploaded_file($file["imageFile"]["tmp_name"], $targetFile)) {
        console_log("The file " . htmlspecialchars(basename($file["imageFile"]["name"])) . " has been uploaded.");
    } else {
        console_log("Sorry, there was an error uploading your file");

    }
    return $fileURL;
}