<?php
//  codeup sylabus6.5.2

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function checkArray($value, $array)
{
	if (array_search($value, $array) === false){
		return false;
	} else {
		return true;
	}
}

function compareArrays($array1, $array2)
{
	$matches = 0;
	foreach ($array1 as $name){
		if (checkArray($name, $array2)){
			$matches = $matches + 1;
		}
	}
	return $matches . PHP_EOL;
}

var_dump(checkArray('Tina', $names)) ;
var_dump(checkArray('Bob', $names)) ;

echo compareArrays($names, $compare);

