<?php
	
	//linking the configuration file
	include_once 'config.php';

	if(isset($_POST['sbmt']))
	{
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$usertName = $_POST['userName'];
		$email = $_POST['email'];
		$mnumber = $_POST['mnumber'];
		$password = $_POST['password'];
		$DOB=$_POST['DOB'];
		$gender = $_POST['gender'];
		
	
		$sql = "insert into signup_table(first_name,last_name,user_name,email,mobile_number,password,DOB,gender) values('$firstName','$lastName','$usertName','$email',$mnumber,'$password','$DOB','$gender')";
	
		if($conn->query($sql))
		{
			echo"Inserted successfully";
		}
		else
		{
			echo"error: ".$conn->error;
		}
	
	}
	
	$conn->close();
	
?>