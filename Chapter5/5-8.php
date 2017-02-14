<?php
class ExtHeap extends SplMaxHeap{
	public function compare(array $var1,array $var2){
		$t1 = strtotime($var1['hiredate']);
		$t2 = strtotime($var2['hiredate']);
		return $t1-$t2;
	}
}

$var1 = array('ename'=>'Smith','hiredate'=>'2009-04-18','sal'=>1000);
$var2 = array('ename'=>'Jones','hiredate'=>'2008-09-20','sal'=>2000);
$var3 = array('ename'=>'Clark','hiredate'=>'2010-01-10','sal'=>2000);
$var4 = array('ename'=>'Clark','hiredate'=>'2007-12-15','sal'=>3000);

$hp = new ExtHeap();
$hp->insert($var1);
$hp->insert($var2);
$hp->insert($var3);
$hp->insert($var4);
foreach ($hp as $emp) {
	printf("Ename:%s Hiredate:%s\n",$emp['ename'],$emp['hiredate']);
}