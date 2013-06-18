<?php
include_once('furryPets.php');

class Dogs extends FurryPets
{
	public function __construct()
	{
		echo "Dogs " . $this->fourlegs() . "<br />";
		echo $this->makesSound("Woof, woof") . "<br />";
		echo $this->guardsHouse() . "<br />";
	}

	private function guardsHouse()
	{
		return "Grrrr <br />";
	}
}