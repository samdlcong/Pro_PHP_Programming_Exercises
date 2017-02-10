<?php 
namespace animal\wild {
	class animal {
		public static function whereami() {
			print __NAMESPACE__."\n";
		}
		public function __construct(){
			$this->type = 'tiger';
		}
		public function get_type(){
			return $this->type;
		}

	}
}

namespace animal\domestic {
	class animal {
		public function __construct(){
			$this->type = 'dog';
		} 
		
	}
}