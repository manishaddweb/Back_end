<?php 
echo "<center><br>";
 echo "<p>Read an array and count no. of eliment which are divisible by 5.<br>";
 
 
$arr = array( 10,20,30,22,25,11,18 );
$n = count($arr);
$k = 5;
    $counter = 0;
 
    for ($i = 0; $i < $n; $i++)
    {
        if ($arr[$i] % $k == 0)
            $counter++;
    }
 
echo "<hr>Elements that is divisible by 5 : ".	$counter;

?>