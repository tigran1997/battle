# battle
php-cli game
# Instructions
	Open command line type ```php battle.php SSTHHS SSSTTT```

## Workflow
	Firstly it gets Army units from command line and pushes it to array of each army unit. (The count of each army units are not always equal, One army can be dominant by count of army units to oponent army unit.)

## The steps of Iteration
	The battle starts the First army's first unit and then it lasts until one of the army's unites is equal to zero.

Above can be added as much units as you want.

 ```
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
 ]
 ```

Next code could be converted to partially Object oriented.
	The Army units can be not an assosiativearrays but array of obects with members and methods health,power, fire or attack which makes code more solid.

