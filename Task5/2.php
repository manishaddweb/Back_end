<?php
	if(isset($_POST["submit"])) 
	{
		setcookie ("username",$_POST["username"],time()+ 3600);
		setcookie ("password",$_POST["password"],time()+ 3600);
		echo "Cookies Set Successfuly";
	} 
	else 
	{
		setcookie("username","");
		setcookie("password","");
		echo "Cookies Not Set";
	}
?>