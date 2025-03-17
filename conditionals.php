<?php
// Conditionals 
// $num = 4;
// if($num >= 5){
//     echo '5 passed';
// } else if ($num == 4){
//     echo '4 passed';
// } else {
//     echo 'did not passed';
// }

// Nested if 

// $num = 6;


// if ($num > 4){
//     if ($num < 10){
//         echo "$num Passed";
//     } else {
//         echo 'Ehatever';
//     }
// }

// Logical Operator (and &&, or ||, xor)


// if ($num > 4 AND $num < 10){
//     echo "$num passed";
// }


// Switch 

$favClolor = 'yellow';

switch($favClolor){
    case 'red':
        echo 'Your Favourite Color is Red';
        break;
    case 'blue':
        echo 'Your Favourite Color is blue';
        break;
    default:
        echo 'Your Favourite Color is something else';
}
?>