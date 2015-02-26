<?php

namespace controllers\frontend;

class Home extends _Base {
	
	function index($f3) {
		$f3->set('layout', 'home');
		$f3->set('view', 'home');
	}
}