<?php

chdir('..');

$f3=require('lib/base.php');

// load config
$f3->config('app/config.ini');
$f3->config('app/routes.ini');

// enable multi-lingual site
//$f3->set('ml',Multilang::instance());

$f3->run();