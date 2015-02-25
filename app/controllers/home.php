<?php

namespace controllers;

class Home extends _Base {
	
    function index($f3)
    {
    	echo \helpers\html::instance()->btn('hi');
        echo 'Hello World';
    }
}