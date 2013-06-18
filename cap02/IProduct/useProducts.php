<?php
include_once('fruitStore.php');
include_once('citrusStore.php');

class UseProducts
{
	
	public function __construct()
	{
		$appleSauce  = new FruitStore();
		$orangeJuice = new CitrusStore();

		$this->doInterface($appleSauce);
		$this->doInterface($orangeJuice);
	}

	//IProduct induz o tipo em doInterface()
	public function doInterface(IProduct $product)
	{
		echo $product->apples();
		echo $product->oranges();
	}
}

$worker = new UseProducts();
