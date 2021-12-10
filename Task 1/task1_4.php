<?php
$p=7265;
	while($p >= 2000)
    {
        $a = $p / 2000 ;
		$p=$p%2000;
        echo "2000 : ".(int)$a."<br>";
        break ;
    }
	while($p >= 500)
    {
        $b = $p / 500 ;
		$p=$p%500;
        echo "500 : ".(int)$b."<br>";
        break ;
    }
	while($p >= 200)
    {
        $c = $p / 200 ;
		$p=$p%200;
        echo "200 : ".(int)$c."<br>";;
        break ;
    }
    while($p >= 100)
    {
        $d = $p / 100 ;
		$p=$p%100;
        echo "100 : ".(int)$d."<br>";;
        break ;
    }
    while($p >= 50)
    {
        $e = $p / 50 ;
		$p=$p%50;
        echo "50 : ".(int)$e."<br>";;
        break ;
    }
    while($p >= 20)
    {
        $f = $p / 20 ;
		$p=$p%20;
        echo "20 : ".(int)$f."<br>";;
        break ;
    }
    while($p >= 10)
    {
        $g = $p / 10 ;
		$p=$p%10;
        echo "10 : ".(int)$g."<br>";;
        break;
    }
    while($p >= 5)
    {
        $h = $p / 5 ;
		$p=$p%5;
        echo "5 : ".(int)$h."<br>";;
        break ;
    }
    while($p >= 2)
    {
        $i = $p / 2 ;
		$p=$p%2;
        echo "2 : ".(int)$i."<br>";;
        break ;
    }
    while($p >= 1)
    {
        $j = $p / 1 ;
		$p=$p%1;
        echo "1 : ".(int)$j."<br>";;
        break ;
    }
?>