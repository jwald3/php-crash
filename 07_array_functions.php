<?php
$fruits = ['apple', 'orange', 'pear'];

// get length of array
// echo count($fruits);

// search array for a value
// var_dump(in_array('apple', $fruits));

// add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'raspberry');

// remove from array
array_pop($fruits);
array_shift($fruits);
//unset($fruits[2]);

// split array
// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);

// print_r($fruits);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

// combine arrays with merge
$arr3 = array_merge($arr1, $arr2);

// spread operator allows arrays to be unpacked and handled like individual values
// $arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

// combine separate arrays into an associative array
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

// turns keys into an array
// $keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

// create an array of range(start, end)
$numbers = range(1, 20);

// print_r($numbers);

// array_map performs an action on each item of the array
$new_numbers = array_map(function ($number) {
    return "Number ${number}";
}, $numbers);

// print_r($new_numbers);

// array_filter only returns values that match a condition
$less_than_10 = array_filter($numbers, fn ($number) => $number <= 10);

// print_r($less_than_10);


$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);

print_r($sum);
