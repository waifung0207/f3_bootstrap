<?php

namespace controllers\frontend;

class Example extends _Base {
	
	function index($f3) {
		$f3->set('view', 'example');
	}
	
	function info($f3) {
		$f3->set('view', 'example');
	}
}