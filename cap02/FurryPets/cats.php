<?php
include_once('furryPets.php');

class Cats extends FurryPets
{
	public function __construct()
	{
		echo "Cats " . $this->fourlegs() . "<br />";
		echo $this->makesSound("Meow, purr") . "<br />";
		echo $this->ownsHouse() . "<br />";
	}

	private function ownsHouse()
	{
		return "I'll just walk on this keyboard.<br />";
	}
}