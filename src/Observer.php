<?php

namespace FizzBuzz;

abstract class Observer {
	public $id, $subject;

	abstract public function notify( $number ):string;

	public function __construct( Subject $subject ) {
		$this->id      = uniqid();
		$this->subject = $subject;
		$this->subject->registerObserver( $this );
	}
}