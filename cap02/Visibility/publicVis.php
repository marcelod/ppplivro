<?php

class PublicVis
{

	private $password;

	private function openSesame($someData)
	{
		$this->password = $someData;

		if($this->password == "secret") {
			echo "You're in!<br />";
		} else {
			echo "Release the hound!<br />";
		}
	}

	public function unlock($safe)
	{
		$this->openSesame($safe);
	}
}

$worker = new PublicVis();
$worker->unlock('secret');
$worker->unlock('duh');