Program to calculate the area of a circle while the circumference is given.
<br>
<hr>
<?php
	$pi = 3.14;
	$r=10;
	$area = $pi * $r * $r;
	echo "Area of a Circle is: ".$area."<br>";
	$circumference = 2*$pi*$r;
	echo "Circumference of a circle is: " .$circumference;
?>