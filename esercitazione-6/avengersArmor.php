<?php

abstract class Armor {
      public int $defenseValue;
	  public string $name;
}

class IronManArmor extends Armor{
	public int $defenseValue=80;
	public string $name= "ironManArmor";
}

class SpidermanSuit extends Armor{
	public int $defenseValue=25;
	public string $name= "spiderman";
}