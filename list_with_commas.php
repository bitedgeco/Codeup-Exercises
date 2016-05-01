<?php 

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

function humanizedList($array, $sort = false)
{
	if ($sort == true){
	sort($array);
	}

	$lastElement = array_pop($array);

	$physicistsString = implode(', ', $array);

	return "Some of the most famous fictional theoretical physicists are {$physicistsString} and {$lastElement}.\n";
}

echo humanizedList($physicistsArray) . PHP_EOL;

echo humanizedList($physicistsArray, true) . PHP_EOL;