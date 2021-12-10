<?php
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
//echo "The numbers are a = $a, b = $b, c = $c <br>";
if(($a > $b) && ($a > $c))
{  
	echo "<center><b>$a is Maximum";
}
else if(($a < $b) && ($b > $c)) 
{ 
	echo "<center><b>$b is Maximum";
}
else
{ 
	echo "<center><b>$c is Maximum";
}
?>
