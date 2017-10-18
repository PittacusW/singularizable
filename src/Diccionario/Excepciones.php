<?php

namespace Contal\Diccionario;

class Excepciones {
	
	protected $arreglo = [
		'faralaes' => 'faralá',
		'albalaes' => 'albalá',
		'noes' => 'no',
		'yoes' => 'yo',
		'dux' => 'dux',
		'ciempiés' => 'ciempiés',
		'buscapiés' => 'buscapiés',
		'pasapurés' => 'pasapurés',
		'polisíndeton' => 'polisíndeton',
		'trávelin' => 'trávelin',
		'cáterin' => 'cáterin',
		'hipérbaton' => 'hipérbaton',
		'imames' => 'imán',
		'álbumes' => 'álbum',
		'lores' => 'lord',
		'milores' => 'milord'
	];
	
	public function exists($word) {
		if (array_key_exists($word, $this->arreglo)) {
			return true;
		}
		return false;
	}
	
	public function convert($word) {
		return $this->arreglo[$word];
	}
}