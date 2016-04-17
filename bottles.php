<?php 

$bottles = 10;

echo "What will you have?";

$drink = fgets(STDIN);

while ($bottles > 0) {
	usleep(2000000);
	if ($bottles == 1) {
		echo "1 bottle of {$drink} on the wall, 1 bottle of {$drink}. Take one down and pass it around no more bottles of {$drink} on the wall.\n No more bottles of {$drink} on the wall, no more bottles of {$drink}. Go to the store and buy some more, 99 bottles of {$drink} on the wall.\n";
			$bottles = 0;
	} elseif ($bottles == 2) {
		echo "2 bottles of {$drink} on the wall, 2 bottles of {$drink}. Take one down and pass it around "; 
		echo --$bottles;  
		echo" bottle of {$drink} on the wall.\n";
	} else { 
		echo "{$bottles} bottles of {$drink} on the wall, {$bottles} bottles of {$drink}. Take one down and pass it around "; 
		echo --$bottles;  
		echo" bottles of {$drink} on the wall.\n";
	}
}