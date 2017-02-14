<?php

var_dump(filter_var('email@example.com',FILTER_SANITIZE_EMAIL));

var_dump(filter_var('e.mail@exam.pl啥.ab',FILTER_SANITIZE_EMAIL));

var_dump(filter_var('em-ail@examp"le.co.uk',FILTER_SANITIZE_EMAIL));

var_dump(filter_var('www.dom!ain@.com',FILTER_SANITIZE_EMAIL));

var_dump(filter_var('email@do^main',FILTER_SANITIZE_EMAIL));

var_dump(filter_var('example.com',FILTER_SANITIZE_URL));

var_dump(filter_var("\twww.example.com",FILTER_SANITIZE_URL));

var_dump(filter_var('http://www.example.com',FILTER_SANITIZE_URL));

var_dump(filter_var('http://www.e#xample.com',FILTER_SANITIZE_URL));

var_dump(filter_var('www example com',FILTER_SANITIZE_URL));


