<?php

namespace controllers;

abstract class _Base extends \Prefab {

	protected $f3;

	public function __construct() {
		$this->f3 = \Base::instance();
	}

	/**
	 * Render HTML view (without layout and template)
	 */
	protected function renderView()
	{
		$site = $this->f3->get('site');
		$view = $this->f3->get('view');

		echo \View::instance()->render($site."/$view.htm");
	}

	/**
	 * Render HTML template
	 */
	protected function renderTemplate()
	{
		$site = $this->f3->get('site');
		$layout = $this->f3->exists('layout') ? $this->f3->get('layout') : 'default';
		$view = $this->f3->get('view');

		$this->f3->set('title', $site.' - '.$view);
		$this->f3->set('layout', $site."/layouts/$layout.htm");
		$this->f3->set('content', $site."/$view.htm");
		
		echo \Template::instance()->render($site."/layouts/_base.htm");
	}

	/**
	 * Render JSON response
	 */
	protected function renderJson($data)
	{
		echo json_encode($data);
	}
}