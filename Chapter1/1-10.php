<?php
class iter implements iterator {
	private $items;
	private $index = 0;
	public function __construct(array $items){
		$this->items = $items;
	}
	public function rewind(){
		$this->index = 0;
	}
	public function current(){
		return ($this->items[$this->index]);
	}
	public function key(){
		return $this->index;
	}
	public function next(){
		$this->index +=2;
		if(isset($this->items[$this->index])){
			return $this->items[$this->index];
		}else{
			return NULL;
		}
	}
	public function valid(){
		return isset($this->items[$this->index]);
	} 
}

$x = new iter(range('A', 'Z'));
foreach($x as $key => $val){
	print "key=$key\tvalue=$val\n";
}