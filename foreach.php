<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
    echo gettype($thing), "\n";
}

foreach ($things as $thing) {
	if (is_string($thing)) {
		echo "{$thing}\n";
	} elseif (is_float($thing)){
		echo "{$thing}\n";
	} elseif (is_null($thing)) {
		echo "{$thing}\n";
	} elseif (is_bool($thing)){
		echo "{$thing}\n";
	}
}

foreach ($things as $thing) {
	if (is_string($thing)) {
		echo "{$thing}\n";
	} elseif (is_float($thing)){
		echo "{$thing}\n";
	} elseif (is_null($thing)){
		echo "{$thing}\n";
	} elseif (is_bool($thing)){
		echo "{$thing}\n";
	} elseif (is_array($thing)){
		print_r($thing);
	}
}

foreach ($things[3] as $inerThing){
	echo "{$inerThing}\n";
}

