<?php
$people = array('Kevin', 'Jeny', 'Sara');
$ids = array(23, 55, 11);
$cars = ['Honde', 'Toyota', 'Ford'];
$cars[3] = 'Corola';
$cars[] = 'BMW';
// echo count($cars);
// print_r($cars);
// var_dump($cars);
// echo $people[1];
// echo $ids[0];
// echo $cars[4];
// Associative Arrays
$people = array('Kevin' =>35, 'Jeny' => 55, 'Sara' => 12);
$ids = [22 => 'Butter', 45 => 'Jose'];
// echo $people['Kevin'];
// echo $ids [22];
$people ['jill'] = 44;
// echo $people['jill'];
// print_r($cars);
// var_dump($cars);
// Multi Dimensio Array
$cars = array(
    array('Honda', 20, 10),
    array('Ford', 23, 12),
);
echo $cars[1][0];  //23

?>