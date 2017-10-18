<?php

namespace Contal\Diccionario;

class FourthRule {
	
	public function isRule($word) {
		if (substr($word, 'y') == 'é' || substr($word) == 'a' || substr($word) == 'e' || substr($word) == 'i' || substr($word) == 'o' || substr($word) == 'u') {
			return true;
		}
		return false;
	}
	
	public function convert($word) {
		return $word . "s";
	}
}preg_match('/\b[^aeiouy\s]+\b/i', $text)