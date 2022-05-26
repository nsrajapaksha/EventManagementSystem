function welcome(){
	alert("Welcome to the Sigup Page!");
}


/*check the user entered Password and Re-enter Password is matching or not using js*/
function checkPassword()
{
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value)
	{
		alert("Passwords are mismatched");
		return false;
	}
	
	else
	{
		alert("Passwords matched");
		return true;
		
	}
}


/*see the check box checked or not*/
function enableButton()
{
	if(document.getElementById("policy").checked)
	{
		document.getElementById("bttn1").disabled=false;
	}
	else
	{
		document.getElementById("bttn1").disabled=true;
	}
}