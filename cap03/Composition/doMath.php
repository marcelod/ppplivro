<?php

class DoMath
{
	private $sum;
	private $quotient;

	public function simpleAdd($fist, $second)
	{
		$this->sum = ($fist + $second);
		return $this->sum;
	}

	public function simpleDivide($dividend, $divisor)
	{
		$this->quotient = ($dividend / $divisor);
		return $this->quotient;
	}

}