<?php
//echo 'ok';
class animal {
	public function __construct(){
		$this->type = 'dog';
	}
	public function get_type() {
		return $this->type;
	}
}