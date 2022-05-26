<?php
//linking the configuration file
	include_once 'config.php';
	
	$f_name = $_POST["f_name"];

	$sql = "DELETE FROM photographer WHERE uplaoded file = '$f_name'";

	if ($conn->query($sql) === TRUE) {
		echo "file deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: ../upload.html");

?>