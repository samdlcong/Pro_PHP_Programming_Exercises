<?php
$x = new SplFileObject("qbf.txt","r");
foreach ($x as $lineno => $val) {
	if(!empty($val)){echo "$lineno:\t$val";}
}