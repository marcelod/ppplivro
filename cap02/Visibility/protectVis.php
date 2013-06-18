<?php

abstract class ProtectVis
{
	
	protected $wage;

	abstract protected function countMoney();

	protected function setHourly($hourly)
	{
		$money = $hourly;
		return $money;
	}

}