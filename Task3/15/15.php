<?php

$x=$_POST['number'];
$sum = 0;
$m = NULL;

echo "<center><b>The sum of ", $x, " digits :  ";

while ($x > 0) {
    $m = $x % 10;
    $m = intval ($m);
    $sum = $sum + $m;
    $x = $x / 10;
    $x = intval ($x);
}

echo $sum;

?>