<?php
include_once('iProduct.php');

class CitrusStore implements IProduct
{
	
	public function apples()
	{
		return "CitrusStore sez--We do not sell apples. <br />";
	}

	public function oranges()
	{
		return "CitrusStore sez--We have citrus fruit. <br />";
	}
	
}