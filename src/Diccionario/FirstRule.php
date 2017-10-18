<?php

namespace Contal\Diccionario;

class FirstRule {
	
	public function isRule($word) {
		if (substr($word, '-1') == 'é' || substr($word, '-1') == 'a' || substr($word, '-1') == 'e' || substr($word, '-1') == 'i' || substr($word, '-1') == 'o' || substr($word, '-1') == 'u') {
			return true;
		}
		return false;
	}
	
	public function convert($word) {
		return $word . "s";
	}
}