<?php

$loggedIn = false;

// if ($loggedIn){
//     echo 'You are a logged in';
//     } else { 
//         echo 'You are not logged in';
//     }

// echo ($loggedIn) ? 'You are a logged in' : 'You are not logged in';

// $isRegistred = ($loggedIn == true) ? true : false; 

// echo $isRegistred;

$age = 7;
$score = 15;

echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average':
'Exception'): ($age > 10 ? 'Horrib;e': 'Average'));

?>
