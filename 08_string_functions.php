<?php

$string = "Hello World";

// Length of string
echo strlen($string);

// find index of first instance of substring
echo strpos($string, 'o');

// find index of last instance of substring
echo strrpos($string, 'o');

// reverse a string
echo strrev($string);

// convert all characters to lowercase
echo strtolower($string);

// convert all characters to uppercase
echo strtoupper($string);

// convert string to title case
echo ucwords($string);

// replace substring
echo str_replace('World', 'Everyone', $string);

// find substring by index
echo substr($string, 0, 5);
echo substr($string, 5);

// see if string starts with a substring
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

// see if string ends with a substring
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}

// parse html as plain text
$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);

// use format strings to inject values
printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%d', 1 + 1);
