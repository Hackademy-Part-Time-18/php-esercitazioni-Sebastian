<?php

include "avengersArmor.php";
include "avengersAttack.php";

class Avenger {
	public string $name;
	public Attack $attack;
	public Armor $defense;
	private $totalDamage;
	public static  $counter;

	public function __construct(string $name, Attack $attackObj, Armor $armorObj )
	{
		$this->name=$name;
		$this->attack=$attackObj;
		$this->defense=$armorObj;
		$this->totalDamage= $this->calculateDamage();
		self::$counter++;
	}

	private function calculateDamage(): int {
		return $this->attack->atkValue + $this->defense->defenseValue;
	}

	static function compareAvengers(Avenger $superhero1, Avenger $superhero2) : void {
		$difference= $superhero1->totalDamage - $superhero2->totalDamage;
		$theWinnerIs=null;
		if($difference>0){
			$theWinnerIs=$superhero1->name;
		} else{
			$theWinnerIs=$superhero2->name;
		}

		echo "è più forte $theWinnerIs per $difference punti";
	}
}

$ironMan= new Avenger("ironMan",new IronPunch(), new IronManArmor() );
$spiderMan= new Avenger("spiderMan", new SpidermanGloves(), new SpidermanSuit() );
Avenger::compareAvengers($ironMan,$spiderMan);