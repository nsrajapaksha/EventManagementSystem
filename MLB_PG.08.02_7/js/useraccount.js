function welcome(){
	alert("Welcome to the User Account Page!");
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