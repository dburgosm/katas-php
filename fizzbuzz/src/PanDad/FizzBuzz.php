<?php

namespace PanDad;

class FizzBuzz
{
	public function translate($number){
		
		$out = '';

		if(($number % 3) == 0) $out .= 'fizz';
		
		if(($number % 5) == 0) $out .= 'buzz';

		return ($out == '') ? $number:$out;
	}


	public function calculate($range){
		$out = array();
		foreach(range(1,$range) as $number){
			$out[] = $this->translate($number);
		}
		return $out;
	}
}
