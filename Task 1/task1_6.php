WAP to read basic salary from user and calculate gross salary where DA 40% of basic
salary and HRA is 20% of basic salary.
<br>
<hr>

<?php
$basic=10000;
$hra=0.02;
$da=0.04;

echo "Basic salary : ".$basic;
echo "<hr>";
$hra=$hra*$basic;
$da=$da*$basic;
$gross=$basic+$hra+$da;

echo "HRA : ".$hra."<br>";
echo "DA : ".$da."<br>";
echo "Gross salary : ".$gross."<br>";
echo "<hr>";
?>