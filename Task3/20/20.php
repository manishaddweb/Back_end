<?php 

$num=$_POST['number'];

echo "<center><b>";
    $count = 0;
    while ($num != 0)
    {
        $num = round($num / 10);
        ++$count;
    }
    echo "Total Number of digits : ".$count;
 
?>