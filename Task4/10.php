<?php
echo "<center><br>";
 echo "<p>Read two array of same dimension and swap their elements..<br>";
 
$array1 = array(18,10,10,30,55);
$array2 = array(50,40,30,20,10);
$result = array_intersect($array1, $array2);
echo "<hr>";
print_r($result);
 
?>