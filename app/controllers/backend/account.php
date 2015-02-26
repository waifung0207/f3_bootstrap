<?php

namespace controllers\backend;

class Account extends _Base {
	
	function index($f3) {
		$f3->set('view', 'account');
	}

	function logout($f3) {
		$f3->reroute('/backend/login');
	}
}