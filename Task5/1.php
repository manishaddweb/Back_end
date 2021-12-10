<?php
   setcookie("name", "John Watkin", time()+36000, "/","", 0);
   setcookie("age", "36", time()+36000, "/", "",  0);

?>


<?php  
if(!isset($_COOKIE["name"])) 
{  
    echo "Sorry, cookie is not found!";  
}
else 
{  
    echo "<br/>Cookie Value: " . $_COOKIE["name"];  
}  
?> 
