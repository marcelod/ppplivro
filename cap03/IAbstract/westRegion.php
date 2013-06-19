<?php
include_once('iAbstract.php');

class WestRegion extends IAbstract
{

	//Deve retornar um valor decimal
	protected function giveCost()
	{
		$solarSaving = 2;
		$this->valueNow = 210.54 / $solarSaving;
		return $this->valueNow;
	}

	//deve retornar uma string
	protected function giveCity()
	{
		return "Orland";
	}
}
