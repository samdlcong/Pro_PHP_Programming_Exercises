<?php
class employee {
	protected $ename;
	protected $sal;

	function __construct($ename, $sal = 100){
		$this->ename = $ename;
		$this->sal = $sal;
	}

	function give_raise($amount){
		$this->sal += $amount;
		printf("Employee %s got raise of %d dollars<br />", $this->ename, $amount);
		printf("New salary is %d dollars<br />", $this->sal);
	}

	function __destruct(){
		printf("Good bye,cruel world: EMPLOYEE:%s<br />",$this->ename);
	}
}

class manager extends employee {
	protected $dept;

	function __construct($ename, $sal, $dept){
		parent::__construct($ename, $sal);
		$this->dept = $dept;
	}

	function give_raise($amount){
		parent::give_raise($amount);
		echo "This employee is a manager<br />";
	}

	function __destruct(){
		printf("Good bye,cruel world: MANAGER:%s<br />", $this->ename);
		parent::__destruct();
	}
}

$mgr = new manager("Smith", 300, 20);
$mgr->give_raise(50);
$mgr = null;//销毁变量 否则整个
//unset($mgr);
$emp = new employee('Johnson',100);
$emp->give_raise(50);



?>