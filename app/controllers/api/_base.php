<?php

namespace controllers\api;

/**
 * Base controller for API site
 */
abstract class _Base extends \controllers\_Base {

	/**
	 * Render JSON response for all routes
	 */
	public function afterRoute()
	{
		$response = $this->f3->get('response');
		$this->renderJson($response);
	}
}