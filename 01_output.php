<?php
// echo - Output strings/numbers/html/etc
// echo 123, hello, 10.5;

// print - works like "echo", but only prints one argument
// print 123;

// print_r() - print single values + arrays
// print_r([1, 2, 3]);

// var_dump() - output value and data type/length
// var_dump('hello');

// var_export() - output value including quotation marks
var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo "Post One"; ?></h1>
</body>

</html>