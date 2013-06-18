<?php
include_once('iConnectInfo.php');

class ConSQL implements IConnectInfo
{
	//passando valores usando o operador de resolução de escopo
	private $server    = IConnectInfo::HOST;
	private $currentDB = IConnectInfo::DBNAME;
	private $user 	   = IConnectInfo::UNAME;
	private $pass 	   = IConnectInfo::PW;

	public function testConnection()
	{
		$hookup = new mysqli($this->server, $this->user, $this->pass, $this->currentDB);

		if (mysqli_connect_error()) {
			die('bad mojo');
		}

		print "You're hooked up Ace! <br />" . $hookup->host_info;
		
		echo "<pre>";
		print_r($hookup);
		echo "</pre>";

		$hookup->close();
	}
}

$useConstant = new ConSQL();
$useConstant->testConnection();