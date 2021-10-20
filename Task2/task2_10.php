Program to convert given number of days into Months & Days.
<br>
<hr>

<?php

$d = 2055;
$y = 0;
$w = 0;
echo "Total Days : ".$d."<br>";
$y = (int)($d / 365);
$w = (int)(($d % 365) / 7);
$d = (int)($d - (($y * 365) + ($w)));

echo $y . " Year, " . $w . " Weeks, and " . $d . " Days<br>";
echo "<hr>";
?>