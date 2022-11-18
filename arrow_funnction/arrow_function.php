<?php

$array = [1,2,3,4];

# Array map with anonymous function
$array2 = array_map(function($number) {
    return $number * $number;
}, $array);

print_r($array2);

# Array map with arrow function

$array3 = array_map(fn($number) => $number * $number, $array);

print_r($array3);
