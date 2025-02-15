<?php
// echo date('d');  
// echo date('m');
// echo date('y');
// echo date('l');   day of the week
// echo date('y/m/d');
// echo date('h');  hour
// echo date('i');  min
// echo date('s');  sec
// echo date('a');  AM OR PM 
// set time zone 
date_default_timezone_set('America/New_York');
// echo date('h: i: sa');
$timestamp = mktime(14, 14, 54, 06, 21, 2002);
// echo date('m/d/y h:i:sa', $timestamp);
$timestamp2 = strtotime('7:00pm March 22 2024');
$timestamp2 = strtotime('tomorrow');
$timestamp2 = strtotime('next Sunday');
$timestamp2 = strtotime('+2 Months');
echo date('m/d/y h:i:sa', $timestamp);
?>
