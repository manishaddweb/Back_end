<?php

if(isset($_POST['submit']))
{
	$upr=$_POST['char'];

	if ($upr >= 'A' && $upr <= 'Z')
	{
		echo "<center>This Is UpperCase --- $upr"."<br>";
	}
	else if ($upr >= 'a' && $upr <= 'z')
	{
		echo "<center>This Is LowerCase --- $upr"."<br>";
	}
	else
	{
		echo "<center>This Is Symbol --- $upr"."<br>";
	}
}
?>
