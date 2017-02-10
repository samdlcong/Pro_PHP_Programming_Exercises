<?php

function __autoload($class){
	print "$class\n";
	exit(0);
}

use animal\wild\animal as beast;
$c = new beast();

printf("%s\n",$c->get_type());

beast::whereami();