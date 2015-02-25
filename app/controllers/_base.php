<?php

namespace controllers;

abstract class _Base extends \Prefab {

	protected $f3;

	public function __construct() {
		$this->f3 = \Base::instance();
	}

	/**
	 * Render HTML response (with or without template)
	 */
	protected function render($view, $layout = '')
	{
		$this->f3->set('title', $view);
		
		if ( !empty($layout) )
		{
			// load specific view (with layout)
			$this->f3->set('layout', "layouts/$layout.htm");
			$this->f3->set('content', $view.'.htm');
			echo \Template::instance()->render("layouts/_base.htm");
		}
		else
		{
			// load view only (no template and layout)
			echo \View::instance()->render($view.'.htm');
		}
	}

	/**
	 * Render JSON response
	 */
	protected function render_json($data)
	{
		// TODO
	}
}