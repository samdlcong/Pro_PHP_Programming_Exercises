<?php

$str = 'A Ford car was seen at Super Clean car wash.';

preg_match_all('/[A-Z][a-z]+/',$str,$matches,PREG_PATTERN_ORDER,5);
var_export($matches);

preg_match_all('/[A-Z][a-z]+/',$str,$matches,PREG_SET_ORDER);
var_export($matches);

preg_match_all('/[A-Z][a-z]+/',$str,$matches,PREG_OFFSET_CAPTURE);
var_dump($matches);