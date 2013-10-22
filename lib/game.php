<?php
// Creation Date: 21 Oct 2013
// Author: Fernando Canizo (aka conan) - http://conan.muriandre.com/


require_once('root.path.php');
require_once('lib/game.config.php');


class Drug {
	public $price = null;
	public $boughtAt = null; // price at which it was bought
	public $quantity = null;
	public $canTrade = null;

	public function __construct($basePrice) {
		$this->price = $basePrice;
		$this->quantity = rand(0, 10);
		$this->canTrade = rand(0, 1);
	}

}


class City {
	public $drugs = null;

	public function __construct() {
		$this->drugs = array();

		foreach(GameConfig::$drugPriceWeight as $d => $w):
			$this->drugs[$d] = new Drug($w * 5);
		endforeach;
	}
}


class World {
	public $cities = null;
	public $currentDay = null;

	public function __construct() {
		$this->cities = array();

		foreach(GameConfig::$cities as $c):
			$this->cities[$c] = new City();
		endforeach;

		$this->currentDay = 1;
	}
}


class Player {
	public $name = null;
	public $currentLocation = null;
	public $rank = null;
	public $cash = null;
	public $drugs = null;
	public $carryCapacity = null;

	public function __construct($name) {
		$this->name = $name;
		$this->currentLocation = GameConfig::$cities[0];
		$this->rank = GameConfig::$ranks[0];
		$this->cash = GameConfig::$startingCash;
		$this->drugs = array();
		$this->carryCapacity = GameConfig::$carryCapacity[$this->rank];
	}
}
