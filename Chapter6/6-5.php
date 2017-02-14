<?php

var_dump(filter_var('email@example.com',FILTER_VALIDATE_EMAIL));

var_dump(filter_var('e.mail@exam.ple.ab',FILTER_VALIDATE_EMAIL));

var_dump(filter_var('em-ail@example.co.uk',FILTER_VALIDATE_EMAIL));

var_dump(filter_var('www.domain@.com',FILTER_VALIDATE_EMAIL));

var_dump(filter_var('email@domain',FILTER_VALIDATE_EMAIL));

var_dump(filter_var('a.com'),FILTER_VALIDATE_URL);

var_dump(filter_var('www.example.com',FILTER_VALIDATE_URL));

var_dump(filter_var('http://www.example.com',FILTER_VALIDATE_URL));

var_dump(filter_var('http://www.e#ample.com',FILTER_VALIDATE_URL));

var_dump(filter_var('www example com',FILTER_VALIDATE_URL));

var_dump(filter_var('www.ex#ample.com',FILTER_VALIDATE_URL));
