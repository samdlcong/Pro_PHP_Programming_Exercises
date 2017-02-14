<?php
$hp = new SplMaxHeap();
for($i=0;$i<=10;$i++){
	$x = rand(1,1000);
	print "inserting: $x<br />";
	$hp->insert($x);
}
$cnt = 1;
print "Retrieving:<br />";
foreach ($hp as $i) {
	print $cnt++ . " :".$i .'<br />';
}