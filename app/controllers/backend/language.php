<?php

namespace controllers\backend;

class Language extends _Base {
	
	function set_lang($f3, $params) {
		$lang = $params['lang'];
		$available_lang = $f3->get('backend.available_lang');

		if ( !empty($lang) && in_array($lang, $available_lang) ) {
			$f3->set('SESSION.backend_language', $lang);
		}
		
		// back to referer page
		$referer = $f3->exists('SERVER.HTTP_REFERER') ? $f3->get('SERVER.HTTP_REFERER') : '/backend';
		$f3->reroute($referer);
	}
}