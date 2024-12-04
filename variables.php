<?php
// prefix -$ 
// echo 'Helo this is Arslan Ali'
// $output = 'Hello World!';
// echo $output;

$num1 = 29;
$num2 = 1;
$sum = $num1 + $num2;
// echo $sum;

// $str3 = 'They\'re Here';
$str3 = "They\'re Here";

$str1 = 'Hey';
$str2 = 'Ali';
$greeting = $str1 .' '. $str2;
// $greeting2 = '$str1 $str2';
$greeting2 = "$str1 $str2";

// We use define function when we know next str can't changed.
define ('GREETING', 'Hello Everyone'); 
echo GREETING;
?>
