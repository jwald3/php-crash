<?php
$y = 10;

// importing a global variable into a function's body
// function registerUser()
// {
//     global $y;
//     echo 'User registered';
//     echo $y;
// };

// accepting arguments for user-defined functions
function registerUser($email)
{
    echo "${email} registered.";
}

// registerUser("jordan@gmail.com");

// returning a value from a function (with default params)
function sum($n1 = 4, $n2 = 5)
{
    return $n1 + $n2;
}

$x = sum();

// echo $x;


// anonymous function
// $subtract = function ($n1, $n2) {
//     return $n1 - $n2;
// };

// echo $subtract(10, 5);

// arrow function
$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(9, 9);
