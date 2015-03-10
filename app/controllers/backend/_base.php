<?php

namespace controllers\backend;

/**
 * Base controller for Backend site
 */
abstract class _Base extends \controllers\_Base {

	public function beforeRoute() {
		$f3 = $this->f3;

		$f3->set('site', 'backend');
		
		// config language
		$lang = $f3->exists('SESSION.backend_language') ? $f3->get('SESSION.backend_language') : $f3->get('backend.default_lang');
		$f3->set('LANGUAGE', $lang);
		
		// config menu
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
				'name'		=> $this->f3->get('lang.home'),
				'url'		=> '',
				'icon'		=> 'fa fa-home',
			),
			array(
				'name'		=> $this->f3->get('lang.example'),
				'url'		=> 'example',
				'icon'		=> 'fa fa-cogs',
				'children'	=> array(
					array(
						'name'	=> $this->f3->get('lang.example').' 1',
						'url'	=> 'example/1',
					),
					array(
						'name'	=> $this->f3->get('lang.example').' 2',
						'url'	=> 'example/2',
					),
					array(
						'name'	=> $this->f3->get('lang.example').' 3',
						'url'	=> 'example/3',
					),
				),
			),
			array(
				'name'		=> $this->f3->get('lang.logout'),
				'url'		=> 'logout',
				'icon'		=> 'fa fa-sign-out',
			),
		));
	}
}