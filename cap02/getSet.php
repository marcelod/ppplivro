<?php

class GetSet
{
	private $dateWarehouse;

	public function __construct()
	{
		$this->setter(200);
		$got = $this->getter();
		echo $got;
	}

	private function getter()
	{
		return $this->dateWarehouse;
	}

	private function setter($setValue)
	{
		$this->dateWarehouse = $setValue;
	}
}

$worker = new GetSet();