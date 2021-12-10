<?php  
$num = $_POST['fact'];  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "<center><b>Factorial of $num  : $factorial";  
?>  