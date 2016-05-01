<?php 

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// code up sylabus 6.5.3
//This is the corect answer

function combine_arrays($array1, $array2)
{
	$newarray = [];
	foreach ($array1 as $key => $name) {
		if ($name == $array2[$key]){
			array_push($newarray, $name);
		} else {
			array_push($newarray, $name, $array2[$key]);
		}
	}
	print_r($newarray);
}

echo combine_arrays($names, $compare);

// atempting the bonus, not working, instructers described it as more of a thought experiment (no right answer)

// function combine_arrays($array1, $array2)
// {
// 	$newarray = [];
// 	$array1length = count($array1);
// 	$array2length = count($array2);
// 	$i=0;
// 	while ($i < $array1length || $i < $array2length) { 
// 		foreach ($array1 as $key => $name) {
// 			if ($name == $array2[$key]){
// 				array_push($newarray, $name);
// 			} else {
// 				array_push($newarray, $name, $array2[$key]);
// 			}
// 		}
// 		$i++;
// 	}
// 	while ($i < $array1length && $i < $array2length){
// 		if ($array1length > $array2length){
// 			array_push($newarray, $array1[$i]);
// 		} elseif ($array1length < $array2lenght) {
// 			array_push($newarray, $array2[$i]);
// 		}
// 	$i++;
// 	}
// 	print_r(array_unique($newarray));
// }

// echo combine_arrays($names, $compare);

// both these functions combine the 2 arrays one after, they give unexpected indexes up the indexs

// function combine_arrays1($array1, $array2)
// {
// 	$newarray = [];
// 	foreach ($array1 as $name) {
// 		array_push($newarray, $name);
// 	}
// 	foreach ($array2 as $name) {
// 		array_push($newarray, $name);
// 	}
// 	print_r(array_unique($newarray));
// }

// echo combine_arrays1($names, $compare);

// function combine_arrays2($array1, $array2)
// {
// 	foreach ($array2 as $name) {
// 	array_push($array1, $name);
// 	}
// 	print_r(array_unique($array1));
// }

// echo combine_arrays2($names, $compare);

