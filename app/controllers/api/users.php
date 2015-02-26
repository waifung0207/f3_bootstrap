<?php

namespace controllers\api;

class Users extends _Base {

	/**
	 * GET /users
	 * GET /users/@id
	 * GET /users/@id/@action
	 */
	public function get($f3, $params) {

		if ( empty($params['id']) ) {

			// get list of users
			$response = array(
				array('id' => 1, 'name' => 'Michael'),
				array('id' => 2, 'name' => 'Chan'),
			);

		} else if ( empty($params['action']) ) {

			// get single user
			$response = array(
				'id' => 1,
				'name' => 'Michael'
			);

		} else {

			// action to single user
		}

		// update response body
		$this->f3->set('response', $response);
	}
}