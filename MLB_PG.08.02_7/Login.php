<?php

//linking the configuration file
include"config.php";


if(isset($_POST['submit1'])){

    $user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);


    if ($user_name != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where Username='".$user_name."' and Password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $user_name;
            header('Location: index.php');
        }else{
            echo "<script> alert('Invalid Username or Password ')</script>";
        }

    }

}
?>

<!DOCTYPE html>
<html>
 <head>
   <title>Flash Me Event Photography</title>
   <link rel="stylesheet" type="text/css" href="styles/login.css">
   <script src="js/login.js"></script>

<body onload="welcome()"> 
<div class="wrapper">
		<div class="top-bar clearfix">
			<div class="top-bar-links">
				<ul>
                    <li style="font-size: 24px"><a href="#"><i class="fa fa-cart-plus fa-fw"></i></a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="login.html">Log In</a></li>
					<li><a href="#">User Account</a></li> 
				</ul> 
			</div> <!-- top-bar-links -->
        
            <div class="top-bar-links-left">
               <h3>Welcome to Flash Me Event Photography</h3>
			   </div>
            
			<div class="site-search">
				<form method="get" action="index.html">
					<input type="search" name="search-box">
					<button type="submit"></button>
				</form>
			</div> <!-- site-search -->
		</div> <!-- top-bar -->

<div class="header">
  <div class="logo">
  <img src="images/lg.png" alt="Flash Me Event Photography" style="width:400px" "height:120px">
  <div class="header-right">
    <a href="#home">Home</a>
    <a href="#contact">About</a>
    <a href="#about">Services</a>
	<a href="#about">Gallery</a>
	<a href="academy.html">Academy</a>
	<a href="#about">Careers</a>
	<a href="#about">Contact</a>
  </div>
</div>
</div>
<hr>
</head>

<body>
  <center>
    <div class="container">
    <form id="login" method="get" action="Login.php">
	<h1 style="font-size:280%">Log In</h1><br><br>  
     
	<div style="text-align:left;">
	<div style="font-size:130%">
	
    <label for="name" style="color:white"><b>Username</b></label>
	<input type="text" placeholder="Enter Username" required />
    <br>    
	
    <label for="name" style="color:white"><b>Password</b></label>
	<input type="password" id="pwd" name="pwd" placeholder="Enter Password" pattern="[a-z0-9]{5,10}" required />       
    <br></div>
        </div>
	
    
          <center>
       By log in you accept the <a class="link" href="#" >Terms of service </a> and <a class="link" href="#">Privacy Policy</a>
				<input type="checkbox" id="policy" name="policy" required onclick="enableButton()" /> 
				<br><br>
				<input type="submit" id="bttn1" value="Log In"onclick="test();">
				<br><br>
				<input type="reset" name="reset">
				
				<b><p class="massage">Already have an account? <a class="link" href="#">Sign up</a></p></b><br>
     </center>
</center>
</body>

<hr>

<footer>
		<div class="footer">
			
		<div class="footer-containt">
		
		        <div class="section">
		        <ul class="contact">
		                    <h2 style="color:black">CONTACT</h2><br>
							<h5 style="color:black">Flash Me Event Photography,<br>   
							    Nawam Mawatha,<br>
								Colombo 10<br><br>
								infoflashme@gmail.com<br><br>
								Tel : +94 11 87738989<br>
						   </h5>
				</ul>	
				</div>
				
				<div class="section">
				<ul class="logo2">
					        <h2 style="color:white"></h2><br>
							<center>
				           <img src="images/lg.png" alt="Flash Me Event Photography" style="width:200px" "height:100px"> 
						   </center>
			<p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
            <a href="https://www.google.lk/" style="color:white">Flash Me </a>
            </p>
				</ul>   
				</div>
				
				<div class="section">
		        <ul class="follow">
                           <h2 style="color:black">FOLLOW US</h2><br></ul>
						   <h5 style="color:black">
						      <ul class="socialMedia">
							    <a class="icon" href="https://www.facebook.com/"><img src="images/fb.png" style="width: 25px;height:25px;"></a>
							    <a class="icon" href="https://twitter.com/"><img src="images/twitter.png" alt="" style="width: 25px;height:25px;"></a>
							    <a class="icon" href="https://www.whatsapp.com/"><img src="images/whatsapp.png" alt="" style="width: 25px;height:25px;"></a>
								<a class="icon" href="https://www.instagram.com/"><img src="images/inster.png" alt="" style="width: 25px;height:25px;"></a>
						   </h5></ul>
				</ul>
				</div>
					
		</div>
</footer>


</html> 
		
