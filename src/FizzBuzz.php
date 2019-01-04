<?php

namespace FizzBuzz;

class FizzBuzz extends Subject
{
	private $number;

	public function __construct()
	{
		$this->number = 1;
	}

	public function notifyObservers():string
	{
		$output = "";
		foreach ( $this->observers as $observer ) {
			$output .= $observer->notify( $this->number );
		}
		return $output;
	}

	public function start()
	{
		for($this->number; $this->number <= 100; $this->number++) {
			$output = $this->notifyObservers();
			echo ($output==="")?$this->number:$output;
			echo "\n";
		}
	}
}