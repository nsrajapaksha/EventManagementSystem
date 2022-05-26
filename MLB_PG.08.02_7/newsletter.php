<?php

//linking the configuration file
require('config.php');


extract($_POST);



$sql = "INSERT INTO `news_letter` (name,email,is_daily) VALUES('" . $name . "','" . $email . "','0')";


$success = $conn->query($sql);



function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


if (!$success) {

   alert("Erro");
}


$conn->close();
header("Location: ../newsletter.html"); 


?>