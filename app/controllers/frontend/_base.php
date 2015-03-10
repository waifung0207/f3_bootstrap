<?php

namespace controllers\frontend;

/**
 * Base controller for Frontend site
 */
abstract class _Base extends \controllers\_Base {

	public function beforeRoute() {
		$f3 = $this->f3;
		
		$f3->set('site', 'frontend');

		// config language
		$lang = $f3->exists('SESSION.frontend_language') ? $f3->get('SESSION.frontend_language') : $f3->get('frontend.default_lang');
		$f3->set('LANGUAGE', $lang);

		// config menu
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
				'name'		=> $this->f3->get('lang.home'),
				'url'		=> '',
			),
			array(
				'name'		=> $this->f3->get('lang.example'),
				'url'		=> 'example',
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
				'name'		=> $this->f3->get('lang.about'),
				'url'		=> 'about',
			),
		));
	}
}