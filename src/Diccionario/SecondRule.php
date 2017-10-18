<?php

namespace Contal\Diccionario;

class SecondRule {
	
	public function isRule($word) {
		if (substr($word, '-1') == 'á' || substr($word, '-1') == 'ó') {
			return true;
		}
		return false;
	}
	
	public function convert($word) {
		return $word . "s";
	}
}