<?php
/*--------PHP Data Types---------*/
/*
- Strings
- Integer
- Float
- Boolean
- Array
- Object (an instance of a class)
- NULL
- Resource (a variable to hold a resource)
*/

/*--------Rules--------*/
/*
-variables are prefixed by "$" and are case sensitive
-variables can only contain letters, numbers, and underscores
-variables cannot start with a number
*/

$name = 'Brad'; // string
$age = 40;  // integer
$has_kids = true;   // boolean
$cash_on_hand = 20.75; // float

// echo $name;          prints "Brad" to the screen
// echo $age;           prints "40" to the screen
// echo $has_kids;      prints "1" to the screen
//echo $cash_on_hand;   prints "20.75" to the screen

// echo $name . ' is ' . $age . ' years old.';

// echo "${name} is ${age} years old";

$x = '5' / '5';
// var_dump($x);

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
