<?php

//linking the configuration file
require('config.php');


extract($_POST);


$sql = "INSERT INTO `contact_us` (name,email,message) VALUES('" . $name . "','" . $email . "','" . $message . "')";


$success = $conn->query($sql);


if (!$success) {

   alert("Error !!");

}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


$conn->close();
header("Location: ../contact.html");


?>