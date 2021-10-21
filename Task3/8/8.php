<?php 

$hindi=$_POST['num1'];
$eng=$_POST['num2'];
$acc=$_POST['num3'];

$total=$hindi+$eng+$acc;
$per=$total/3;
$div=$total/3;

echo "<center>";
echo "Total Marks : "."$total"."<br><br>";
echo "Percentage : "."$per"."<br><br>";
echo "Division : "."$div"."<br><br>";



?>