<?php

namespace Contal\Diccionario;

class TenthRule {
	
	public function isRule($word) {
		if (substr($word) == 'é' || substr($word) == 'a' || substr($word) == 'e' || substr($word) == 'i' || substr($word) == 'o' || substr($word) == 'u') {
			return true;
		}
		return false;
	}
	
	public function convert($word) {
		return $word . "s";
	}
}