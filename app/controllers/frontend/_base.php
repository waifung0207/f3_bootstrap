<?php

namespace controllers\frontend;

/**
 * Base controller for Frontend site
 */
abstract class _Base extends \controllers\_Base {

	public function beforeRoute() {
		$this->f3->set('site', 'frontend');
		$this->setupMenu();
	}

	public function afterRoute() {
		$this->renderTemplate();
	}

	/**
	 * Top menu
	 */
	private function setupMenu() {
		$this->f3->set('menu', array(
			array(
				'name'		=> 'Home',
				'url'		=> '',
			),
			array(
				'name'		=> 'Example',
				'url'		=> 'example',
				'children'	=> array(
					array(
						'name'	=> 'Example 1',
						'url'	=> 'example/1',
					),
					array(
						'name'	=> 'Example 2',
						'url'	=> 'example/2',
					),
					array(
						'name'	=> 'Example 3',
						'url'	=> 'example/3',
					),
				),
			),
			array(
				'name'		=> 'About',
				'url'		=> 'about',
			),
		));
	}
}