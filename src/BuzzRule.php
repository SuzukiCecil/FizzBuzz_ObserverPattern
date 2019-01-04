<?php

namespace FizzBuzz;

class BuzzRule extends Observer {
	public function notify( $number ):string {
		return ($number%5===0)?"Buzz":"";
	}
}