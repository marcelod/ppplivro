<?php
include_once('dogs.php');
include_once('cats.php');

class Client
{
	public function __construct()
	{
		$dogs = new Dogs();
		$cats = new Cats();
	}
}

$worker = new Client();