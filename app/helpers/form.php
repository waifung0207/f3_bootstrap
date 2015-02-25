<?php

namespace helpers;

/**
 * Helper class to build form fields and elements
 */
class Form extends _Base {

	public function text($name)
	{
		return "<input name='$name' type='text' placeholder='$name' />";
	}
	
	public function password($name)
	{
		return "<input name='$name' type='password' placeholder='$name' />";	
	}
}