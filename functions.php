<?php
// Functions - Block of Code 

// camel case - myFunction()
// lower case - my_Function()
// pascal cse - MyFunction()

function simpleFunction(){
    echo 'Hello World!';
}
// simpleFunction();

// function with param 
function sayHello($name = 'World!'){
    echo "Hello $name<br>";
}

// sayHello("Ali");
// sayHello('Champ');
// sayHello();


// Return Value 
function addNumber($num1, $num2){
    return $num1 + $num2;
}

// echo addNumber(5, 5);

// by reference 

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";

?>