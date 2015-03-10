<?php

chdir('..');

$f3=require('lib/base.php');

// load config
$f3->config('app/config.ini');
$f3->config('app/routes.ini');

/*
// custom error page
$f3->set('ONERROR', function($f3) {
	// TODO: decide whether the error page comes from frontend or backend
	echo \Template::instance()->render('error.htm');
});*/

$f3->run();