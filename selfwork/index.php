<?php

class Continent {
	public $nameContinent;

	public function __construct($continent){
		$this->nameContinent=$continent;
	}
}

class Country extends Continent {
	public $nameCountry;

	public function __construct($continent,$country)
	{
		parent::__construct($continent);
		$this->nameCountry=$country;
	}
}

class Region extends Country{
	public $regionName;

	public function __construct($continent,$country,$region)
	{
		parent::__construct($continent,$country);
		$this->regionName=$region;
	}
}

class Province extends Region{
	public $provinceName;

	public function __construct($continent,$country,$region,$province)
	{
		parent::__construct($continent,$country,$region);
		$this->provinceName=$province;
	}
}

class City extends Province{
	public $cityName;

	public function __construct($continent,$country,$region,$province,$city)
	{
		parent::__construct($continent,$country,$region,$province);
		$this->cityName=$city;
	}
}

class Street extends City{
	public $streetName;
	public function __construct($continent,$country,$region,$province,$city,$street)
	{
		parent::__construct($continent,$country,$region,$province,$city);
		$this->streetName=$street;
	}

	public function define_location (){
		echo "Ti trovi in: $this->nameContinent, $this->nameCountry, $this->regionName, $this->provinceName, $this->cityName,$this->streetName";
	}
}

$location= new Street("Europa", "Italia", "Veneto", "Vi", "Vicenza","Via Roma");

$location->define_location();

echo "\n esercitazione 2\n";

class Vertebrates {
	
	protected function define_category (){
		echo "sono un vertebrato \n";
	}
}

class Warm_blooded extends Vertebrates{
	protected function define_category()
	{
		 parent::define_category();
		echo "sono un animale a sangue caldo \n";
	}
}

class Cold_Blooded extends Vertebrates{
	protected function define_category()
	{
		 parent::define_category();
		echo "sono un animale a sangue freddo \n";
	}
}

class Mammals extends Warm_blooded{
	protected function define_category()
	{
		 parent::define_category();
		echo "sono un mammifero \n";
	}

	public function __construct()
	{
		$this->define_category();
	}
}

class Birds extends Warm_blooded{
	protected function define_category()
	{
		 parent::define_category();
		echo "sono un uccello \n";
	}

	public function __construct()
	{
		$this->define_category();
	}
}

class Fish extends Cold_Blooded{
	protected function define_category()
	{
		 parent::define_category();
		echo "sono un pesce \n";
	}

	public function __construct()
	{
		$this->define_category();
	}
}

class Reptiles extends Cold_Blooded{
	protected function define_category()
	{
		 parent::define_category();
		echo "sono un rettile \n";
	}

	public function __construct()
	{
		$this->define_category();
	}
}

class Amphibians extends Cold_Blooded{
	protected function define_category()
	{
		 parent::define_category();
		echo "sono un anfibio \n";
	}

	public function __construct()
	{
		$this->define_category();
	}
}

$mammals= new Mammals();
$fish= new Fish();
