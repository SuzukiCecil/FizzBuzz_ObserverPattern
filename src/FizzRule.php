<?php

namespace FizzBuzz;

class FizzRule extends Observer {
	public function notify( $number ):string {
		return ($number%3===0)?"Fizz":"";
	}
}