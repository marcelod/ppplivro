<?php

interface IConnectInfo
{
	const HOST   = "localhost";
	const DBNAME = "test";
	const UNAME  = "root";
	const PW     = "mysecretpassword";

	function testConnection();
}