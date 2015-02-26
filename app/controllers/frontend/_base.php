<?php

namespace controllers\frontend;

/**
 * Base controller for Frontend site
 */
abstract class _Base extends \controllers\_Base {

	public function beforeRoute() {
		$this->f3->set('site', 'frontend');
	}

	public function afterRoute() {
		$this->renderTemplate();
	}
}