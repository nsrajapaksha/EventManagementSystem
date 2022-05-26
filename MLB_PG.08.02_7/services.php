<?php


require('config.php');


extract($_POST);


$sql = "INSERT INTO `services` (Excellent,Satisfactory,Need To Improve,mobile,Not Satisfied) VALUES('" . $Excellent . "','" . $Satisfactory . "','" . $Need To Improve . "','" . $Not Satisfied . "',)";


$success = $conn->query($sql);


if (!$success) {

   alert("Error !!");

}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


$conn->close();
header("Location: ../services.html");


?>