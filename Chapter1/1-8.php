<?php

class test3a {
	protected $memb;
	protected $copies;
	public function __construct($memb, $copies = 0){
		$this->memb = $memb;
		$this->copies = $copies;
	}
	public function __destruct(){
		printf("Destroying object %s...<br />",$this->memb);
	}
	public function __clone(){
		$this->memb .= ":CLONE";
		$this->copies++;
	}
	public function get_copies(){
		printf("Object %s has %d copies.<br />",$this->memb,$this->copies);
	}
}

$x = new test3a("object 1");
$x->get_copies();
$y = new test3a("object 2");
$x = clone $y;
if($x===$y){
	echo 'true';
}else{
	echo 'false';
}
$x->get_copies();
$y->get_copies();
print "End of the script, executing destructor(s).<br />";
