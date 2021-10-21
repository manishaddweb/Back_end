<?php

if(isset($_POST['submit']))
{
	$cost=$_POST['cost'];
	$selling=$_POST['selling'];
	echo "<center>";
	if($cost==$selling)
	{
		echo "There is no profit or loss";
	}
	else if($cost>$selling)
	{
		$res=$cost-$selling;
		echo "Loss : ".$res;
	}
	else
	{
		$res=$selling-$cost;
		echo "Profit : ".$res;
	}
}
?>