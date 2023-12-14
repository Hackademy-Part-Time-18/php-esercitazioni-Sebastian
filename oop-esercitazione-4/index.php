<?php

class Company {
	public $name;
	public $location;
	public $tot_employees;
	public $total_wage;
	public static $avg_wage=1500;
	public static $all_instances_wage;

	public function __construct($name,$location,$tot_employees)
	{
		$this->name=$name;
		$this->location=$location;
		$this->tot_employees=$tot_employees;
		$this->total_wage=$this->calculate_wage();
		self::$all_instances_wage+=$this->total_wage;
	}

	public function define_num_employees(){
		if($this->tot_employees<=0 || !isset($this->tot_employees) || !is_numeric($this->tot_employees) ){
			echo "L'ufficio $this->name con sede in $this->location non ha dipendenti";
		} else{
			echo "L'ufficio $this->name con sede in $this->location ha $this->tot_employees dipendenti";
		}
	}

	private function calculate_wage(){
		return self::$avg_wage * $this->tot_employees *12;
	}

	public function tot_wage(){
		$num=$this->calculate_wage();
		echo "La spesa totale annua per i dipendenti è di $num";
	}

	public static function all_companies_wage(){
		$tot=self::$all_instances_wage;
		echo "La spesa totale di tutte le aziende è $tot";
	}
}

$microsoft= new Company("microsoft","USA",50);
$apple= new Company("Tesla","USA",1000);
$aulab= new Company("Aulab","Italia",50);
$google= new Company("Google","USA",100000);
$tim= new Company("Tim","Italia",10156);

Company::all_companies_wage();