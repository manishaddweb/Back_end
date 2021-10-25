

<?php

echo "<br><center>Read an array and print sum of elements stored at even indexes.";
function EvenOddSum($arr, $n)
{
	$even = 0;
	$odd = 0;
	for ($i = 0; $i < $n; $i++)
	{
		
		if ($i % 2 == 0)
			$even += $arr[$i];
		
	}
	echo "<br>";
	
	echo("Even index positions sum " . $even);
}

$arr = array( 1, 2, 3, 4, 5, 6 );
$n = sizeof($arr);

EvenOddSum($arr, $n);

?>
