<?php

namespace controllers\backend;

class Home extends _Base {
	
	function index($f3) {
		$f3->set('view', 'home');
	}
}