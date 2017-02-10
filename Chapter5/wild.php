<?php
namespace wild;
class animal {
	public function __construct(){
		$this->type = 'tiger';
	}
	public function get_type(){
		return $this->type;
	}
}