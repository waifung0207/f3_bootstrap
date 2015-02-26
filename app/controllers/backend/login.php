<?php

namespace controllers\backend;

class Login extends _Base {
	
	/**
	 * Login page
	 */
	function index($f3) {
		$f3->set('skin', 'login-page');
		$f3->set('layout', 'empty');
		$f3->set('view', 'login');
	}

	/**
	 * Submission of Login form
	 */
	function submit($f3, $params) {
		$username = $f3->get('POST.username');
		$password = $f3->get('POST.password');

		// TODO: auth user

		// redirect to Home
		$f3->reroute('/backend');
	}
}