Program to calculate the Gross Salary when Basic Salary is given. The allowances HRA(%) ,DA (%), PF and Medical are also given. Add the HRA and DA in the Basic Salary but deduct PF and Medical from the Salary
<br>
<hr>

<?php
$basic=50000;
$hra=0.05;
$da=0.07;
$pf=0.09;
$medical=0.03;

echo "Basic salary : ".$basic;
echo "<hr>";
$hra=$hra*$basic;
$da=$da*$basic;
$gross=$basic+$hra+$da;

echo "HRA : ".$hra."<br>";
echo "DA : ".$da."<br>";
echo "Gross salary : ".$gross."<br>";
echo "<hr>";

$pf=$pf*$gross;
$medical=$medical*$gross;
$net_salary=$gross-$pf-$medical;

echo "PF : ".$pf."<br>";
echo "Medical : ".$medical."<br>";
echo "Net Salary : ".$net_salary;
echo "<hr>";
?>