<?php

interface ISpeed
{
	function slow();
	function fast();
	function cruise();
}


class Jet implements ISpeed
{
	public function slow()
	{
		return 120;
	}

	public function cruise()
	{
		return 1200;
	}

	public function fast()
	{
		return 1500;
	}
}


class Car implements ISpeed
{
	public function slow()
	{
		$carSlow = 15;
		return $carSlow;
	}

	public function cruise()
	{
		$carCruise = 65;
		return $carCruise;
	}

	public function fast()
	{
		$carZoom = 120;
		return $carZoom;
	}
}


$f22 = new Jet();
$jetSlow   = $f22->slow();
$jetCruise = $f22->cruise();
$jetFast   = $f22->fast();

echo "<br />My jet can take off at " . $jetSlow . " mph and cruises at " . $jetCruise . " mph. However, I can crank it up to " . $jetFast . " mph if I'm in a hurry.<br />";


$ford = new Car();
$carSlow   = $ford->slow();
$carCruise = $ford->cruise();
$carFast   = $ford->fast();

echo "<br />My car pokes along at " . $carSlow . " mph in a school zone and cruises at " . $carCruise . " mph on the highway. However, I can crank it up to " . $carFast . " mph if I'm in a hurry.<br />";