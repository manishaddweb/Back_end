<?php
$total = 30;
echo "Total Rupees : ". $total."<br>";
$c100 = floor($total/100);
$r = $total%100;

$c50 = floor($r/50);
$r = $r%50;

$c20 = floor($r/20);
$r = $r%20;

$c10 = floor($r/10);
$r = $r%10;

$c5 = floor($r/5);
$r = $r%5;

$c2 = floor($r/2);
$r = $r%2;

$coinsof1 = $r;

echo "<br>100 : ".$c100."<br>";
echo "50 : ".$c50."<br>";
echo "20 : ".$c20."<br>";
echo "10 : ".$c10."<br>";
echo "5 : ".$c5."<br>";
echo "2 : ".$c2."<br>";
echo "1 : ".$coinsof1."<br>";

?>
