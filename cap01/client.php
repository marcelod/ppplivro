<?php
ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);

include_once('mobileSniffer.php');

class Client
{
	
	private $mobSniff;

	function __construct()
	{
		$this->mobSniff = new MobileSniffer();
		echo "Device = " . $this->mobSniff->findDevice() . "<br />";
		echo "Browser = " . $this->mobSniff->findBrowser() . "<br />";
	}
}


$trigger = new Client();