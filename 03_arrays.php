<?php
// simple array
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);   // prints only the array
// var_dump($numbers);  // prints array with debugging info

// echo $fruits[1];     // prints "orange" to the screen

// associative arrays
$colors = [
    1 => "red",
    4 => "blue",
    6 => "green",
];

// echo $colors[4];    // prints "blue" to the screen

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];   // prints "#0f0" to the screen

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

// echo $person['first_name'];  // prints "Brad" to the screen


$people = [
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ]
];

// echo $people[1]['email'];    // accesses the second person's email
// echo json_encode($people);   // converts the nested array into JSON format
