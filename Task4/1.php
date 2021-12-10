<?php
echo "<center><b>";
echo "Read an array and print sum of its elements.<hr>";
    $b=0;
    $num=array(10,20,30,40,50);
    for($i=0;$i<5;$i++)
    {
        $b+=$num[$i];
    }
    echo "Array Elements ";
    foreach($num as $value)
    {
        echo "<br>".$value;
    }
    echo "<br>Sum of Array Elements : ".$b;
?>