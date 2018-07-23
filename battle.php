<?php 
error_reporting(0);
$armyPower = [
	'T' =>[
		'health' => 20,
		'power' => 10,
	],
	'H' =>[
		'health' => 5,
		'power' => 4,
	],
	'S' =>[
		'health' => 2,
		'power' => 3,
	]
];
// $armyPriorities=[1=>'T',2=>'H', 3=> 'S' ];
$firstArmy=[];
$secondArmy=[];

if($argc > 3)
	echo "Error: Wrong Number of arguments".PHP_EOL;


for ($i=0; $i < strlen($argv[1]); $i++) { 
		$firstArmyUnits[$argv[1][$i]]++;
		array_push($firstArmy,$armyPower[$argv[1][$i]] );
}

for ($i=0; $i < strlen($argv[2]); $i++) { 
		$secondArmyUnits[$argv[2][$i]]++;	
		array_push($secondArmy,$armyPower[$argv[2][$i]] );
}

$faiteration = 0;
$saiteration = 0;
while (!count($firstArmy) ==0 && !count($secondArmy) == 0) {

	if($firstArmy[$faiteration]["power"] >= $secondArmy[$saiteration]["health"]) { 
		unset($secondArmy[$saiteration]);
		print("firstArmy attacks secondArmy losses unit"); echo "\n"; ++$saiteration;
	} elseif ($firstArmy[$faiteration]["power"] < $secondArmy[$saiteration]["health"] ) {
		print("firstArmy attacks secondArmy losses unit health"); echo "\n";
		$secondArmy[$saiteration]["health"] -= $firstArmy[$faiteration]["power"];
	}
	
	if($secondArmy[$saiteration]["power"] >= $firstArmy[$faiteration]["health"]) { 
		unset($firstArmy[$faiteration]);
		print("secondArmy attacks  firstArmy losses unit"); echo "\n"; ++$faiteration;
	} elseif ($secondArmy[$saiteration]["power"] < $firstArmy[$faiteration]["health"] ) {
		print("secondArmy attacks  firstArmy losses unit health"); echo "\n";
		$firstArmy[$faiteration]["health"] -= $secondArmy[$saiteration]["power"];
	}
	
}

var_dump($firstArmy,$secondArmy);

if(count($firstArmy) > 0) {
	echo "First Army Wins";
} else {
	echo "Second Army Wins";
}


 ?>