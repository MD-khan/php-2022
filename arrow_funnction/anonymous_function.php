<?php

# Assigning anonymous function to variables

$padded = function($word) {
    echo str_pad($word, $length = strlen($word)+3, $pad_string = ":-)",$pad_type = STR_PAD_RIGHT);
};
//$padded("Love you");

$str_function = [
    'country' => function($word) { echo strtoupper($word); },
    'reversed' => function($word) { echo strrev($word);},
    'rotated' => function($word)  { echo str_rot13($word); }
];

$str_function['rotated']("go");