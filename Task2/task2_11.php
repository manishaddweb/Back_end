Program to calculate the Simple Interest and Compound Interest.
<br>
<hr>

<?php
$p = 1000;//p=principle
$t = 1;//t=time period
$r = 2;//Rate and interest
$CI = 0;

$si = $p * $t * $r/100;
echo "Simple interest = ".$si."<br>";

$amount = $p * pow((1 + $r/100),$t); 
$ci = $amount - $p;
echo "Compound interest = ".$ci;

?>