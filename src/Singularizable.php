<?php

namespace Contal;

use Contal\Diccionario\Excepciones;
use Contal\Diccionario\FirstRule;

class Singularizable {
	
	public static function run($plural) {
		
		$arreglo = "";
		$words = Singularizable::check($plural);
		$excepciones = new Excepciones;
		$first = new FirstRule;
		$second = new SecondRule;
		$third = new ThirdRule;
		$fourth = new FourthRule;
		$fifth = new FifthRule;
		$sixth = new SixthRule;
		$seventh = new SeventhRule;
		$eight = new EightRule;
		$nineth = new NinethRule;
		$tenth = new TenthRule;
		$eleventh = new EleventhRule;
		foreach($words as $word) {
			if ($excepciones->exists($word)) {
				$arreglo .= $excepciones->convert($word);
			}
			elseif ($first->isRule($word)) {
				$arreglo .= $first->convert($word);
			}
			elseif ($second->isRule($word)) {
				$arreglo .= $second->convert($word);
			}
			elseif ($third->isRule($word)) {
				$arreglo .= $third->convert($word);
			}
			elseif ($fourth->isRule($word)) {
				$arreglo .= $fourth->convert($word);
			}
			elseif ($fifth->isRule($word)) {
				$arreglo .= $fifth->convert($word);
			}
			elseif ($sixth->isRule($word)) {
				$arreglo .= $sixth->convert($word);
			}
			elseif ($seventh->isRule($word)) {
				$arreglo .= $seventh->convert($word);
			}
			elseif ($eight->isRule($word)) {
				$arreglo .= $eight->convert($word);
			}
			elseif ($nineth->isRule($word)) {
				$arreglo .= $nineth->convert($word);
			}
			elseif ($tenth->isRule($word)) {
				$arreglo .= $tenth->convert($word);
			}
			elseif ($eleventh->isRule($word)) {
				$arreglo .= $eleventh->convert($word);
			}
		}
		return $arreglo;
	}
	
	protected static function check($words) {
		
		$arr = explode('-', $words);
		if(count($arr) > 1) {
			return $arr;
		}
		$arr = explode('_', $words);
		if(count($arr) > 1) {
			return $arr;
		}
		$arr = explode(' ', $words);
		if(count($arr) > 1) {
			return $arr;
		}
		$arr = preg_split('/(?=[A-Z])/', $words);
		if(count($arr) > 1) {
			return $arr;
		}
	}
}