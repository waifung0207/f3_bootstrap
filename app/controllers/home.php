<?php

namespace controllers;

class Home extends _Base {
	
	function index($f3)
	{
		$this->render('home', 'home');
	}
}