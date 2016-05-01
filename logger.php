<?php

function logMessage($logLevel, $message)
{
	$logName = date('Y-m-d');
	$filename ='log-' . $logName . '.log';
 	$handle = fopen($filename, 'a');
 	$append = date('Y-m-d h:i:s') . $logLevel . $message;
    fwrite($handle, $append . PHP_EOL);
    fclose($handle); 
}

function logInfo($string)
{
	logMessage(" INFO ", $string);
}

function logError($string)
{
	logMessage(" ERROR ", $string);
}

logInfo("This is an info message.");
logError("This is an error message.");


