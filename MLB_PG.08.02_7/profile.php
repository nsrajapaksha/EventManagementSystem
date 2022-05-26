
<?php
//linking the configuration file
	include_once 'config.php';
?>

<?php
	
	$email = $_POST['email'];
	$pNo= $_POST['pNO'];
	$uname = $_POST['uname'];
	$c_password = $_POST['c_password'];
	$new_password = $_POST['new_password'];
	$age = $_POST['age'];
	$date = $_POST["date"];
	$gender = $_POST["gender"];
	
	
	$sql = "UPDATE user SET  Email='$email', Phone='$pNo', Gender='$gender',User_name='$uname',Password='$new_password' WHERE Password='$c_password',Age='$age', DOB='$date',Gender='$gender';
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert ('Record updated successfully')</script>";
	}
	else{
		echo "<script>alert ('Error in updating records')</script>";
	}
	
	mysqli_close($conn);


?>
 