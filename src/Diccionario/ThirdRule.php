<?php

namespace Contal\Diccionario;

class ThirdRule {
	
	public function isRule($word) {
		if (substr($word, '-1') == 'í' || substr($word, '-1') == 'ú') {
			return true;
		}
		return false;
	}
	
	public function convert($word) {
		return $word . "es";
	}
}