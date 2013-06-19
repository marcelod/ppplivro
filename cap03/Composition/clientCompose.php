<?php
include_once('doMath.php');
include_once('doText.php');

class ClientCompose
{
	private $added;
	private $divided;
	private $textNum;
	private $output;

	public function __construct()
	{
		$useMath = new DoMath();
		$useText = new Dotext();

		$this->added   = $useMath->simpleAdd(40, 60);
		$this->divided = $useMath->simpleDivide($this->added, 25);
		$this->textNum = $useText->numToText($this->divided);		
		$this->output  = $useText->addFace("Your results ", $this->textNum);
		echo $this->output;
	}	
}

$worker = new ClientCompose();