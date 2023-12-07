<?php
$users = [
 ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
 ['name' => 'Katia', 'surname' => 'Perucci', 'gender' => 'F']
];

//traccia 1 //
foreach($users as ["name"=>$name,"surname"=>$surname,"gender"=>$gender]){
	$phrase= null;
	$gender === "M" ? $phrase="Buongiorno signor $name $surname \n" : $phrase="Buongiorno signora $name $surname \n";
	echo $phrase;
}

echo "\n --- traccia 2 --- \n";

 $numbers= array_filter(range(1,10),function ($el){return !($el&1);});
  $sum=array_sum($numbers);
  $average= $sum/count($numbers);
 echo "\nla somma dei numeri è $sum e la loro media è $average\n";

echo "\n traccia 3 \n";

foreach(range(1,100) as $number){
	if($number % 15 === 0){
		echo "HACKACADEMY\n";
	}elseif($number%5===0){
		echo "JAVASCRIPT\n";
	} elseif ($number%3===0) {
		echo "$number PHP\n";
	}
}