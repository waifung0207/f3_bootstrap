<?php

namespace controllers;

class About extends _Base {
	
	function index($f3)
	{
		$this->render('about', 'default');
	}
}