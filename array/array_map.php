<?php
$arr = [1,2,3,4,5,6];
$multiplication = array_map(fn($number) => $number * 3,$arr);
print_r($multiplication);

# multiply by two associative array

$array_1 = ['a'=> 1, 'b'=>2, 'c'=>3];
$array_2 = ['d'=> 4, 'e'=>5, 'f'=>6];

$result = array_map(fn($number1, $number2)=> $number1 * $number2,$array_1,$array_2);
print_r($result);