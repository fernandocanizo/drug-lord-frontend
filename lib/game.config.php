<?php
// Creation Date: 21 Oct 2013
// Author: Fernando Canizo (aka conan) - http://conan.muriandre.com/


class GameConfig {

	public static $maxDays = 50;
	public static $startingCash = 1000;

	public static $ranks = array(
		'Wannabe',
		'Small-time operator',
		'Dealer',
		'Big-time dealer',
		'Distributor',
		'Drug lord'
	);

	public static $carryCapacity = array(
		'Wannabe' => 10,
		'Small-time operator' => 25,
		'Dealer' => 100,
		'Big-time dealer' => 600,
		'Distributor' => 3500,
		'Drug lord' => 20000
	);

	public static $cities = array(
		'Austin, USA',
		'Beijing, China',
		'Boston, USA',
		'Detroit, USA',
		'London, England',
		'Los Angeles, USA',
		'Miami, USA',
		'Moscow, Russia',
		'New York, USA',
		'Paris, France',
		'San Francisco, USA',
		'St. Petersburg, Russia',
		'Sydney, Australia',
		'Toronto, Canada',
		'Vancouver, Canada'
	);


	// weights assigned using fibonacci sequence, starting at f(2)
	// basic price is w * 100
	public static $drugPriceWeight = array(
		'Cocaine' => 2584,
		'Crack' => 1597,
		'Ecstasy' => 987,
		'Hashish' => 610,
		'Heroin' => 377,
		'Ice' => 233,
		'Kat' => 144,
		'LSD' => 89,
		'MDA' => 55,
		'Morphine' => 34,
		'Mushrooms' => 21,
		'Opium' => 8,
		'PCP' => 13,
		'Peyote' => 2,
		'Pot' => 1,
		'Special K' => 3,
		'Speed' => 5,
	);

}
