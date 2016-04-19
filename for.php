<?php 

$start = 'not numneric';
$end = 'not numneric';
$increment ='not numneric';

while (!is_numeric($start)){
	echo "Please enter a starting number\n";
	$start = trim(fgets(STDIN));
}

while (!is_numeric($end) || $start == $end){
	echo "Please enter an ending number\n";
	$end = trim(fgets(STDIN));
} 

while (!is_numeric($increment)) {
	echo "Please enter an increment\n";
	$increment = trim(fgets(STDIN));
}

if ($start < $end) {
	for ($a = $start; $a <= $end; $a = $a + $increment) {
		echo "\$a has a value of {$a}\n";
	}
} else { 
	for ($a = $start; $a >= $end; $a = $a - $increment){
		echo "\$a has a value of {$a}\n";
	}
}


