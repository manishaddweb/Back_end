Program to calculate the percentage of a student while marks of 5 subjects are given
<br>
<hr>
<?php
$a = 95;
$b = 65;
$c = 78;
$d = 64;
$e = 53;
$total = 0;
$average = 0;
$percentage = 0;

$total = $a + $b + $c + $d + $e;
$percentage = ($total / 500.0) * 100;

echo "The Total marks   = " . $total . "/500<br>";
echo "The Percentage    = " . $percentage . "%";

?>