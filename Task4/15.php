<?php

echo "<center><br>";
function primeCount($arr, $n)
{
	$max = max($arr);

	$prime = array_fill(0, $max + 1, true);


	$prime[0] = false;
	$prime[1] = false;
	for ($p = 2; $p * $p <= $max; $p++)
	{
		if ($prime[$p] == true)
		{
			for ($i = $p * 2;
				$i <= $max; $i += $p)
				$prime[$i] = false;
		}
	}
	$count = 0;
	for ($i = 0; $i < $n; $i++)
		if ($prime[$arr[$i]])
			$count++;

	return $count;
}

$arr = array(1, 2, 3, 4, 5, 6, 7, 11);
$n = sizeof($arr);
echo "<center>Read an array and find out how many elements are prime.<hr>";
echo "<b>Total Number of Prime Numbers : ".primeCount($arr, $n);
?>
