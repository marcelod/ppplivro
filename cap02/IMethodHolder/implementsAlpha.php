<?php
include_once('iMethodHolder.php');

class ImplementsAlpha implements iMethodHolder
{
	
	public function getInfo($info)
	{
		echo "This is NEWS! " . $info . "<br />";
	}

	public function sendInfo($info)
	{
		return $info;
	}

	public function calculate($first, $second)
	{
		$calculated = $first * $second;
		return $calculated;
	}

	public function useMethods()
	{
		$this->getInfo("The sky is falling...");
		echo $this->sendInfo("Vote for Senator Snort!") . "<br />";
		echo "You make $" . $this->calculate(20, 15) . " in your part-time job.<br />";
	}

}

$worker = new ImplementsAlpha();
$worker->useMethods();