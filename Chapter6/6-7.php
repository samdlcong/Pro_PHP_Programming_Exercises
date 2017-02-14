<?php

$str = 'A Ford car was seen at Super Clean car wash.';
preg_match_all('/[A-Z][a-z]+/', $str,$matches);
var_export($matches);
