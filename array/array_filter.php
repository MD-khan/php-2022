<?php

function even($arr)
{
    if ($arr % 2 == 0)
        return true;
}

$arr = [true, 12, 0, 0, 18, 27, 0, 46, 1, 3, false, true];
print_r(array_filter($arr, 'even'));
# single line
$even = array_filter($arr, fn ($numbers, $key) => $numbers % 2 != 0, ARRAY_FILTER_USE_BOTH);
#The result array can be reindexed using 
#the array_values() function.
$even = array_values($even);
print_r($even);

$numbers = [2, 3, 4, 89, 101, 5,200];

function evenn($numbers)
{
    if ($numbers % 2 === 0)
        return true;
}
print_r(array_filter($numbers, 'evenn'));

$even_numbers = array_filter($numbers, fn($num) => $num % 2 == 0);
print_r($even_numbers);
