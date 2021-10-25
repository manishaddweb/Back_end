<?php 
echo "<center><br>";
 echo "<p>Read an array and count total no. of +ve, -ve and zero eliments.<br>";
$myarr = array(12,-14,-59,90,100,0,0);
 
foreach($myarr as $num)
{
   if($num > 0)
   {
      $positive[] = $num;
   }
   else if($num < 0)
   {
      $negative[] = $num;
   }
   else
   {
	   $zero[] = $num;
   }
}

echo "Positive : ";
print_r(count($positive));

echo "<br>Negative : ";
print_r(count($negative));

echo "<br>Zero : ";
print_r(count($zero));
 
?>