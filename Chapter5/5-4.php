<?php
$y = 0;
$arr = range(1,100);

$sum = function($x,$y){
	return $x+$y;
};

$sigma = array_reduce($arr, $sum);
print "$sigma\n";