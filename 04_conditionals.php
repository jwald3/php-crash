<?php

$age = 17;

// if ($age >= 18) {
//     echo "You are old enough to vote.";
// } else {
//     echo "Sorry, you are not old enough to vote";
// }

// $t = 13;

// if ($t < 12) {
//     echo "Good Morning";
// } else if ($t < 17) {
//     echo "Good Afternoon";
// } else {
//     echo "Good Evening";
// }

$posts = ['Post one'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo "No posts found";
// };

// $firstPost = !empty($posts) ? $posts[0] : "No posts";

// $firstPost = $posts[1] ?? null;

// echo $firstPost;

$favColor = 'yellow';

switch ($favColor) {
    case 'red':
        echo "Your favorite color is red";
        break;
    case 'blue':
        echo "Your favorite color is blue";
        break;
    case 'green':
        echo "Your favorite color is green";
        break;
    default:
        echo "Your favorite color is not red, green or blue";
}
