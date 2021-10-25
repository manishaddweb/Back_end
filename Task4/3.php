<?php
echo "<center><b>";
echo "Read an array and count total no. of even and odd eliments."; 
//$num=array(10,20,30,40,50);
function CountingEvenOdd( $arr, $arr_size)
{
    $even_count = 0;        
    $odd_count = 0;            
         
    // loop to read all the values in
    // the array
    for( $i = 0 ; $i < $arr_size ; $i++)
    {
        // checking if a number is
        // completely divisible by 2
        if ($arr[$i] & 1 == 1)
            $odd_count ++ ;    
        else               
            $even_count ++ ;        
    }
 
    echo "<br>Number of even elements = " ,
        $even_count,"<br> Number of odd " ,
            "elements = " ,$odd_count ;    
}
 
// Driver Code
    $arr = array(2,4,5,7,8,9);
    $n = count($arr);
 
    // Function Call
    CountingEvenOdd($arr, $n);
 

?>