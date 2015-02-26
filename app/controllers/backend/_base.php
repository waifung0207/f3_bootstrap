<?php

namespace controllers\backend;

/**
 * Base controller for Backend site
 */
abstract class _Base extends \controllers\_Base {

	public function beforeRoute() {
		$this->f3->set('site', 'backend');
		$this->setupMenu();
	}

	public function afterRoute() {
		$this->renderTemplate();
	}

	/**
	 * Sidebar menu
	 */
	private function setupMenu() {		
		$this->f3->set('menu', array(
			array(
				'name'		=> 'Home',
				'url'		=> '',
				'icon'		=> 'fa fa-home',
			),
			array(
				'name'		=> 'Example',
				'url'		=> 'example',
				'icon'		=> 'fa fa-cogs',
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
				'name'		=> 'Logout',
				'url'		=> 'logout',
				'icon'		=> 'fa fa-sign-out',
			),
		));
	}
}