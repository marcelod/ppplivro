<?php

abstract class IAbstract
{

	//propriedade disponivel a todas aplicações
	protected $valueNow;

	/*Todas aplicações devem incluir os 2 metodos a seguir:*/
	//Deve retornar um valor decimal
	abstract protected function giveCost();

	//deve retornar uma string
	abstract protected function giveCity();

	//Essa função concreta esta disponivel a todas as implementações da classe sem sobrescrita de conteudo
	public function displayShow()
	{
		$stringCost  = $this->giveCost();
		$string 	 = (string)$stringCost;
		$allTogether = ("Cost: $" . $stringCost . " for " . $this->giveCity());
		return $allTogether;
	}

}