<?php
   function get_max_value($array){
      $n = count($array);
      $max = $array[0];
      for ($i = 1; $i < $n; $i++)
         if ($max < $array[$i])
            $max = $array[$i];
      return $max;
   }
   $my_array = array(56, 78, 91, 44, 0, 11);
   print_r("The highest value of the array is ");
   echo(get_max_value($my_array));
   echo("\n");



$num = array(20, 520, 52, 755, 75, 15, 561, 656, 765);
$max = $num[0];
$smax;
for($i=1; $i<count($num); $i++){
	if($num[$i]>$max){
		$smax = $max;
		$max = $num[$i];
	}else if($smax<$num[$i] && $smax < $max){
		$smax = $num[$i];
	}
}
echo "<br>Second Max : ".$smax;
?>