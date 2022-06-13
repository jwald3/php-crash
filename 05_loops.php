<?php

/* ----- for loop ----- */

// for ($x = 0; $x <= 10; $x++) {
//     echo 'Number ' . $x . '<br>';
// }

/* ----- while loop ----- */
// $x = 1;

// while ($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// };

// $x = 1;

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x >= 5);

$posts = ['First post', 'second post', 'third post'];

// for ($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x] . '<br>';
// }

// foreach ($posts as $index => $post) {
//     echo $index . ' - ' . $post . '<br>';
// }


$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com'
];

foreach ($person as $key => $value) {
    echo "${key} - ${value} <br>";
}
