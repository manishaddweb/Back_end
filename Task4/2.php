<?php
echo "<center><b>";
echo "Read an array and print its reverse.<hr>";

$num=array(10,20,30,40,50);
$rev=array_reverse($num);
echo "Before";
foreach($num as $value)
{
    echo "<br>".$value;
}
echo "<hr>After";
foreach($rev as $value)
{
    echo "<br>".$value;
}
?>