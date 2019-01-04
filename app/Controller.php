<?php

namespace App;
use FizzBuzz\FizzRule;
use FizzBuzz\BuzzRule;
use FizzBuzz\FizzBuzz;

class Controller
{
	public function index()
	{
		$fizzBuzz = new FizzBuzz();
		$fizzRule = new FizzRule($fizzBuzz);
		$buzzRule = new BuzzRule($fizzBuzz);
		$fizzBuzz->start();
	}
}