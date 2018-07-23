<?php 
error_reporting(0);


class Battle
{
	
	function __construct()
	{
		
	}
}


/**
* 
*/
class Tank
{
	public $health = 20;
	public $power = 10;
	function __construct()
	{
		# code...
	}
}


class Heavy
{
	public $health = 5;
	public $power = 4;
	function __construct()
	{
		# code...
	}
}
class Soldier
{
	public $health = 2;
	public $power = 3;
	function __construct()
	{
		# code...
	}
}


$tank = [20=>10];
$havy = [5=>4];
$soldier = [2=>3];
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
$armyPriorities=[1=>'T',2=>'H', 3=> 'S' ];
$firstArmyUnits=[];
$secondArmyUnits=[];
$firstArmy=[];
$secondArmy=[];


// echo $argv[2][0];
// echo $argc;
// echo $argv[1]; die;
// echo  count($argv[2]); die;
for ($i=0; $i < strlen($argv[1]); $i++) { 
		$firstArmyUnits[$argv[1][$i]]++;
		array_push($firstArmy,$armyPower[$argv[1][$i]] );
}

for ($i=0; $i < strlen($argv[2]); $i++) { 
		$secondArmyUnits[$argv[2][$i]]++;	
		array_push($secondArmy,$armyPower[$argv[2][$i]] );
}
// echo min(array_keys($armyPriorities));
// echo $firstArmyUnits[$armyPriorities[min(array_keys($armyPriorities))]];

// function getHighestInArmy($army,$armyPriorities){

// }
// var_dump($firstArmyUnits);die;
// echo "\n 444444444444 \n"; //echo count($secondArmyUnits);
// var_dump (count($firstArmy) >0 , count($secondArmy) >0); die;
	$faiteration = 0;
	$saiteration = 0;
while (!count($firstArmy) ==0 && !count($secondArmy) == 0) {

	// echo $firstArmy[$faiteration]["power"];
	$iter = 0;
	if($firstArmy[$faiteration]["power"] >= $secondArmy[$saiteration]["health"]) { 
		unset($secondArmy[$saiteration]);
		print("firstArmy attacks secondArmy losses unit"); echo "\n"; ++$saiteration;
	} elseif ($firstArmy[$faiteration]["power"] < $secondArmy[$saiteration]["health"] ) {
		print("firstArmy attacks secondArmy losses unit health"); echo "\n";
		$secondArmy[$saiteration]["health"] -= $firstArmy[$faiteration]["power"];
		// if ($secondArmy[$saiteration]["health"] <=0) {
		// 	echo "1111111" ; die;
		// 	echo "during attach secondArmy looses unit"; echo "\n";
		// 	unset($secondArmy[$saiteration]);
		// 	++$saiteration;
		// }
	}
	
	if($secondArmy[$saiteration]["power"] >= $firstArmy[$faiteration]["health"]) { 
		unset($firstArmy[$faiteration]);
		print("secondArmy attacks  firstArmy losses unit"); echo "\n"; ++$faiteration;
	} elseif ($secondArmy[$saiteration]["power"] < $firstArmy[$faiteration]["health"] ) {
		print("secondArmy attacks  firstArmy losses unit health"); echo "\n";
		$firstArmy[$faiteration]["health"] -= $secondArmy[$saiteration]["power"];
		// if ($firstArmy[$faiteration]["health"] <=0) {
		// 	echo "during attach firstArmy looses unit"; echo "\n";
		// 	unset($firstArmy[$faiteration]);
		// 	++$faiteration;
		// }

	}
	var_dump($firstArmy,$secondArmy);
	
}
echo "end \n \n";

var_dump($firstArmy,$secondArmy);

if(count($firstArmy) > 0) {
	echo "First Army Wins";
} else {
	echo "Second Army Wins";
}


 ?>