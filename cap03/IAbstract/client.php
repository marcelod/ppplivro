<?php
include_once('northRegion.php');
include_once('westRegion.php');

class Client
{

	public function __construct()
	{
		$north = new NorthRegion();
		$west  = new WestRegion();

		$this->showInterface($north);
		$this->showInterface($west);
	}

	private function showInterface(IAbstract $region)
	{
		echo $region->displayShow() . "<br />";
	}

}

$worker = new Client();