<?php


require('config.php');


extract($_POST);


$sql = "INSERT INTO `careers` (fname,lname,email,mobile,address,date,gender1,gender2,Employment1,Employment2,Employment3,Employment4) VALUES('" . $fname . "','" . $lname . "','" . $email . "','" . $fmobile . "','" . $address . "','" . $gender1 . "','" . $gender2 . "','" . $Employment1 . "','" . $Employment2 . "','" . $Employment3 . "','" . $Employment4 . "','" . $date . "',)";


$success = $conn->query($sql);


if (!$success) {

   alert("Error !!");

}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


$conn->close();
header("Location: ../careers.html");


?>