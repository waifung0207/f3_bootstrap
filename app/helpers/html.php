<?php

namespace helpers;

/**
 * Helper class to build HTML elements
 */
class Html extends _Base {

	public function btn($label)
	{
		return "<button class='btn'>$label</button>";
	}
}