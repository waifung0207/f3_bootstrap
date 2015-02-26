<?php

namespace controllers\api;

/**
 * Base controller for API site
 */
abstract class _Base extends \controllers\_Base {

	/**
	 * Methods to be overrided by child controllers
	 */
	public function get($f3, $params) {
		$this->f3->set('response', $params);
	}

	function post($f3, $params) {
		$this->f3->set('response', $params);
	}

	function put($f3, $params) {
		$this->f3->set('response', $params);
	}

	function delete($f3, $params) {
		$this->f3->set('response', $params);
	}

	/**
	 * Render JSON response for all routes
	 */
	public function afterRoute()
	{
		$response = $this->f3->get('response');
		$this->renderJson($response);
	}
}