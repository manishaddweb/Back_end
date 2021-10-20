Program to calculate the volume and surface area of a sphere
<br>
<hr>
<?php    
    $r=5;  
    $pie=3.14;  
	$vol = (4 / 3) * $pie * $r * $r * $r;
    $surface_area=4*$pie*($r*$r); 
	echo "Volume of sphere : ".$vol."<br>";
    echo "Surface area of sphere : ".$surface_area;  
?>    