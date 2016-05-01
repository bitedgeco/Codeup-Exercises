<?php
// TODO: Create your inspect() function here

function inspect($var)
{
 switch(gettype($var)) {
    case 'string': 
		if (strval($var) == ''){
			return gettype($var) . ": The string is empty.";
		} else {
			return gettype($var) . ": " .strval($var);
		}
		break;        
    case 'array':
		if ($var == []){
			return gettype($var) . ": The value is an empty array.";
		} else {
			return gettype($var) . ": The value is an array";
		}
		break;
	case 'boolean': 
		if ($var){
			return gettype($var) . ": True";
		} else {
			return gettype($var) . ": False";
		}
		break;        
    case 'integer':
		return gettype($var) . ": " . intval($var);
		break;
	case 'double': 
		return gettype($var) . ": " . doubleval($var); 
		break;        
    case 'NULL':
		return gettype($var) . ": The value is NULL.";
		break;
	default:
		return "Not working";
		break;
	}


// 	if (gettype($var) == 'string') {
// 		if (strval($var) == ''){
// 			return gettype($var) . ": The string is empty.";
// 		} else {
// 			return gettype($var) . ": " .strval($var);
// 		}
// 	} elseif (gettype($var) == 'array'){
// 		if ($var == []){
// 			return gettype($var) . ": The value is an empty array.";
// 		} else {
// 		return gettype($var) . ": The value is an array";
// 		}
// 	} elseif (gettype($var) == 'boolean'){
// 		if ($var){
// 			return gettype($var) . ": True";
// 		} else {
// 			return gettype($var) . ": False";
// 		}
// 	} elseif (gettype($var) == 'integer'){
// 		return gettype($var) . ": " . intval($var);
// 	} elseif (gettype($var) == 'double'){
// 		return gettype($var) . ": " . doubleval($var); 
// 	} elseif (gettype($var) == 'NULL'){
// 		return gettype($var) . ": The value is NULL.";
// 	} else {
// 		return "not working";
// 	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . inspect($num1) . PHP_EOL;

echo 'Inspecting $num2:' . inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:' . inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:' . inspect($num4) . PHP_EOL;

echo 'Inspecting $null:' . inspect($null) . PHP_EOL;

echo 'Inspecting $bool1:' . inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2:' . inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1:' . inspect($string1) . PHP_EOL;

echo 'Inspecting $string2:' . inspect($string2) . PHP_EOL;

echo 'Inspecting $array1:' . inspect($array1) . PHP_EOL;

echo 'Inspecting $array2:' . inspect($array2) . PHP_EOL;
