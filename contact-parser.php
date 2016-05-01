<?php 

function parseContacts($filename)
{
    $filename ='contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = trim (fread($handle, filesize($filename)));
    $tempArray = explode("\n", $contents);
    fclose($handle); 
    $contacts = [];

    foreach ($tempArray as $person) {
    	$personArray = explode("|", $person);
    	$personArray[1] = formatNumbers($personArray[1]);
    	array_push($contacts, array('name' => $personArray[0], 'number' => $personArray[1]));
    }
    return $contacts;
}

function formatNumbers($string)
{
	$phoneNUmber = substr($string, 0, 3) . '-' . substr($string, 3, 3) . '-' . substr($string, 6, 4);
	return $phoneNUmber; 
}

print_r(parseContacts('contacts.txt'));

// var_dump(parseContacts('contacts.txt'));

