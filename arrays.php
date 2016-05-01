<?php 

$names =[
	'tom',
	'dick',
	'harry'
];

echo $names[1] .PHP_EOL;

var_dump($names[1]);

var_dump($names);

$numbers1 = array(6, 7, 8, 9, 10);

$numbers2 =[
	1,
	2,
	3,
	4,
	5
];

var_dump($numbers1);

print_r($numbers1);

echo $numbers2[3];

$associatiive = [
	'first_name' => 'John',
	'last_name' => 'Doe',
	'email' => 'doe@gmail.com',
	'phone' => 12345678
];

var_dump($associatiive); 

echo $associatiive['first_name'] .PHP_EOL;;

$test = [
	'person1' => [
		'first_name' => 'John',
		'last_name' => 'Doe',
		'email' => 'doe@gmail.com',
		'phone' => 12345678
	],
	'person2' => [
		'first_name' => 'Jane',
		'last_name' => 'Smith',
		'email' => 'jane@gmail.com',
		'phone' => 87654321
	],	
	'person3' => [
		'first_name' => 'Jess',
		'last_name' => 'Rain',
		'email' => 'Jess@gmail.com',
		'phone' => 54362781
	]
];

var_dump($test); 

echo $test['person3']['email'];



