<?php

namespace controllers\frontend;

class About extends _Base {
	
	function index($f3) {
		$f3->set('view', 'about');
	}
}