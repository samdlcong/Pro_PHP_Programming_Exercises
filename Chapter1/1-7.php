<?php

class  test3 {
	protected $memb;
	function __construct($memb){
		$this->memb = $memb;
	}
	function __destruct(){
		printf("Destroying  object %s...<br />", $this->memb);
	}
}

$x = new test3('object 1');
$y = new test3('object 2');
print "Assignment taking place:<br />";
$x = $y;
print "End of the script<br />";