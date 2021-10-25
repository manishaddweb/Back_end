<?php
echo "<center><br>";
 echo "<p>Read an array and perfume LINEEAR Search..<br>";
 
    function search($arr, $x) {
        for($i = 0; $i < sizeof($arr); $i++) {
            if($arr[$i] == $x) return $i;
        }
        return -1;
    }
    $arr = array(4, 2, 5, 6, 14, 7, 15, 3);
    echo "<hr>Element is found at ".search($arr, 14);
 
?>