<?php 	
error_reporting(0); # turned off for PHP Notices

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

$firstArmy=[];
$secondArmy=[];
try {

  if($argc > 3)

    throw new Exception("Error: Wrong Number of arguments".PHP_EOL."Use like `php battle.php SSTHHS SSSTTT`");
  
}
 catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
  exit;
}




for ($i=0; $i < strlen($argv[1]); $i++) { 
		array_push($firstArmy,$armyPower[$argv[1][$i]] );
}

for ($i=0; $i < strlen($argv[2]); $i++) { 
		array_push($secondArmy,$armyPower[$argv[2][$i]] );
}

$faiteration = 0;
$saiteration = 0;
while (!count($firstArmy) ==0 && !count($secondArmy) == 0) {

	if($firstArmy[$faiteration]["power"] >= $secondArmy[$saiteration]["health"]) { 
		unset($secondArmy[$saiteration]);
		print("firstArmy attacks second Army losses unit"); echo "\n"; ++$saiteration;
	} elseif ($firstArmy[$faiteration]["power"] < $secondArmy[$saiteration]["health"] ) {
		print("firstArmy attacks second Army losses unit health"); echo "\n";
		$secondArmy[$saiteration]["health"] -= $firstArmy[$faiteration]["power"];
	}
	
	if($secondArmy[$saiteration]["power"] >= $firstArmy[$faiteration]["health"]) { 
		unset($firstArmy[$faiteration]);
		print("secondArmy attacks  first Army losses unit"); echo "\n"; ++$faiteration;
	} elseif ($secondArmy[$saiteration]["power"] < $firstArmy[$faiteration]["health"] ) {
		print("secondArmy attacks  first Army losses unit health"); echo "\n";
		$firstArmy[$faiteration]["health"] -= $secondArmy[$saiteration]["power"];
	}
	
}

// var_dump($firstArmy,$secondArmy); //This can be turned on for visual array structure.

if(count($firstArmy) > 0) {
	echo " \n First Army Wins";
} else {
	echo "\n Second Army Wins";
}


 ?>