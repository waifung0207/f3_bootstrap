<?php

namespace controllers\frontend;

class Language extends _Base {
	
	function set_lang($f3, $params) {
		$lang = $params['lang'];
		$available_lang = $f3->get('frontend.available_lang');

		if ( !empty($lang) && in_array($lang, $available_lang) ) {
			$f3->set('SESSION.frontend_language', $lang);
		}

		// back to referer page
		$referer = $f3->exists('SERVER.HTTP_REFERER') ? $f3->get('SERVER.HTTP_REFERER') : '/';
		$f3->reroute($referer);
	}
}