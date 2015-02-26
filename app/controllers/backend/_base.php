<?php

namespace controllers\backend;

/**
 * Base controller for Backend site
 */
abstract class _Base extends \controllers\_Base {

	public function beforeRoute() {
		$this->f3->set('site', 'backend');
	}

	public function afterRoute() {
		$this->renderTemplate();
	}
}