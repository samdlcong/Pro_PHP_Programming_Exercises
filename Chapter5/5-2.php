<?php

require_once('animals.php');
use \animal\wild\animal as beast;
$c = new beast();
printf("%s\n",$c->get_type());
beast::whereami();