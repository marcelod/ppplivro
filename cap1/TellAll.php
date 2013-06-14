<?php

/**
* classe com uma unica responsabilidade
* prover informações sobre o agente de usuario que esta visualizando a pagina
*/
class TellAll
{
	private $userAgent;

	public function __construct()
	{
		$this->userAgent = $_SERVER['HTTP_USER_AGENT'];
		echo $this->userAgent;
	}

}


$tellAll = new TellAll();