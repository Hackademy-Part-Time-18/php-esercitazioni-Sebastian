<?php

trait Calculator {
public function sum($a, $b):int { 
	return $a + $b;
  }
  
  public function sub($a, $b): int { 
	return $a - $b;
  }
  
  public function mul($a, $b):int {
	return $a * $b;
  }
  
  public function div($a, $b):int {
	return $a / $b;
  }
  
  public function sqr($a):int {
	return sqrt($a);
  }
}

class Rettangolo {
	use Calculator;

	public int $base;
	public int $altezza;

	public function __construct($b,$h) 
	{
		$this->base=$b;
		$this->altezza=$h;
	}

	function area ():void{
		$calc= $this->mul($this->base,$this->altezza);
		echo "l'area è $calc\n";
	}

	function perimetro ():void{
		$calc= $this->mul(2,$this->sum($this->base,$this->altezza));
		echo "il perimetro è $calc\n";
	}

	function diagonale():void{
		$calc= $this->sqr($this->sum($this->mul($this->base,$this->base), $this->mul($this->base,$this->base)));
		echo "la diagonale è $calc\n";
	}
}

$rettangolo= new Rettangolo(5,10);
$rettangolo->area();
$rettangolo->perimetro();
$rettangolo->diagonale();