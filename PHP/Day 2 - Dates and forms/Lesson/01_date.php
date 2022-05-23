<?php 

//Set the timezone
//date_default

/*
Timestamps
Number of seconds to identify a specific date.

NUmber of seconds between a specific date and the 1st January 1970

1st January 1970 timestamp : 0
Today's date : 19/04/2022 OR 04/19/2022
TImestamp : 1650375807
*/


//Return today day's number
echo date('d'). '<br>';

//Return today month number
echo date('m'). '<br>';
echo date('M'). '<br>';

//Return today year number
echo date('Y'). '<br>';

//Return today's date
echo date('d/m/Y'). '<br>';

// By default, it's taking timestamp of today's date
// You can specify another date/timestamp
echo date('d/m/Y',1611147171). '<br>';


// Mktime : convert a date into a timestamp
//example : 19 October 2010 14:30:00

$timeStamp = mktime(14,30,00,10,19,2010);
echo $timeStamp . '<br>';

//StrTotime : will convert a date, a string, or a keyword, into a timestamp.
echo strtotime('now').'<br>';
echo strtotime('next Tuesday').'<br>';
echo strtotime('+2 days').'<br>';
echo strtotime('19 October 2010').'<br>';
