<?php

//linking the configuration file
require('config.php');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

extract($_POST);

$sql = "INSERT INTO `contact_us` (photographerName,photographerID,fileUpload) VALUES('" . $photographerName . "','" . $photographerID . "','" . $fileUpload . "')";

$success = $conn->query($sql);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

?>