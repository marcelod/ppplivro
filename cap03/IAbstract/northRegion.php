<?php
include_once('iAbstract.php');

class NorthRegion extends IAbstract
{

	//Deve retornar um valor decimal
	protected function giveCost()
	{
		return 210.54;
	}

	//deve retornar uma string
	protected function giveCity()
	{
		return "Ford City";
	}
}