<?php

function add($a, $b)
{
	if (!is_numeric($a) || !is_numeric($b)){
		throwErrorMessage($a, $b);
	} else {
    	return $a + $b;
	}
}

function subtract($a, $b)
{
	if (!is_numeric($a) || !is_numeric($b)){
		throwErrorMessage($a, $b);
	} else {
    	return $a - $b;
    }
}

function multiply($a, $b)
{
	if (!is_numeric($a) || !is_numeric($b)){
		throwErrorMessage($a, $b);
	} else {
    	return $a * $b;
    }
}

function divide($a, $b)
{
	if (!is_numeric($a) || !is_numeric($b)){
		throwErrorMessage($a, $b);
	} elseif ($a == 0 || $b == 0){
		return 'please do not divide by 0';
	} else {
	    return $a / $b;
	}
}

function modulus($a, $b)
{
	if (!is_numeric($a) || !is_numeric($b)){
		throwErrorMessage($a, $b);
	} else {
    	return $a % $b;
    }
}

$a = 2;
$b = 3;

echo add($a, $b) . PHP_EOL;

echo subtract($a, $b) . PHP_EOL;

echo multiply($a, $b) . PHP_EOL;

echo divide($a, $b) . PHP_EOL;

echo modulus($a, $b) . PHP_EOL;

// Add code after functions that calls each function with real numbers.

echo add(2, 5) . PHP_EOL;

echo subtract(2, 5) . PHP_EOL;

echo multiply(2, 5) . PHP_EOL;

echo divide(2, 5) . PHP_EOL;

echo modulus(2, 5) . PHP_EOL;

function throwErrorMessage($a, $b)
{
	echo "please use numbers not {$a} and {$b}";
}

