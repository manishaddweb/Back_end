<?php

$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
$d = $_POST['num4'];
echo "<center>";
//echo "The numbers are a = $a, b = $b, c = $c, d = $d <br>";
if(($a > $b) && ($a > $c) && ($a > $d))
{  
	echo "$a is Maximum";
}
else if(($b > $a) && ($b > $c) && ($b > $d)) 
{ 
	echo "$b is Maximum";
}
else if(($c > $a) && ($c > $b) && ($c > $d)) 
{ 
	echo "$c is Maximum";
}
else
{ 
	echo "$d is Maximum";
}
?>
