<?php

namespace controllers\api;

class User extends _Base {

	/**
	 * List of users
	 */
	public function get_list($f3) {
		$users = array(
			array('id' => 1, 'name' => 'Michael'),
			array('id' => 2, 'name' => 'Chan'),
		);
		//$this->renderJson($users);
		$this->f3->set('response', $users);
	}
	
	/**
	 * Single user
	 */
	public function get_one($f3, $param) {
		$user = array(
			'id' => 1,
			'name' => 'Michael'
		);
		//$this->renderJson($user);
		$f3->set('response', $user);
	}
}