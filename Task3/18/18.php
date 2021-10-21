<?php 
    if(isset($_POST['submit']))  
    {  
        $num = $_POST['num'];  
        $reverse = strrev($num); 
		echo "<center><b>";
        if($num == $reverse)
        {  
            echo "$num is a Palindrome number";     
        }
        else
        {  
            echo "$num is not a Palindrome number";   
        }  
}     
      ?>