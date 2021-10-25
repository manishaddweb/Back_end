
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
echo "<center>Read an array and print it in ascending order.(SORTING)<hr>";
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x]."<br>";

}
?>