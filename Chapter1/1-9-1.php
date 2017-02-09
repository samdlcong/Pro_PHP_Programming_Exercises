<?php

interface human {
	public function __construct();
	public function name();
	public function age(); 
}
interface people extends human{
	public function job();

}

class man implements people{
	protected $gander;
	public function __construct(){
		$this->gander = "female";
	}
	public function name(){
		echo 'what is my name?';
	}
	public function age(){

	}
	public function job(){
		
	}
}

class student extends man implements human {
	protected $job;
	public function __construct(){
		parent::__construct();
		$this->job = 'student';
	}
	public function name(){
		echo 'what is my name? who knows';
	}
}
$xiaoming = new man();
$xiaoming->name();
$xiaohong = new student();
$xiaohong->name();