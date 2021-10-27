Destroying the Cookies
<?php
   setcookie( "name", "", time()- 60, "/","", 0);
   setcookie( "age", "", time()- 60, "/","", 0);
	header('Location:1.php');
?>
