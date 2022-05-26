<?php

//linking the configuration file
require('config.php');


extract($_POST);


$sql = "INSERT INTO `academy` (fullname,age,address,phone,email,date,gender1,gender2,Digital Photography,Videography,Nature Photography,Art Photography) VALUES('" . $fullname . "','" . $age . "','" . $address . "','" . $phone . "','" . $email . "','" . $date . "','" . $gender1 . "','" . $gender2 . "','" . $Digital Photography . "','" . $Videography . "','" . $Nature Photography . "','" . $Art Photography . "')";


$success = $conn->query($sql);


if (!$success) {

   alert("Error !!");

}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


$conn->close();
header("Location: ../academy.html");

?>