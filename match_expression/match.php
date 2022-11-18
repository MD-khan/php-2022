<?php

# Example of a match expression
# php 8
$temparature = 90;

$weather = match ($temparature) {
    30, 35,45 => "Its so cold Today",
    50 => "You need to wear sweater Today",
    75 => "Enjoy yourself, Not cold, not hot",
    90 => "The perfect beach weather!",
    default => "I don't know what to do with you"
};

echo $weather;

$price = 1000;
$age = 22;

$discount = match (true) {
    $age <= 18 => $price * 0.5,
    $age > 18 && $age <= 60 => $price * 0.1,
    $age > 60 => $price * 0.7,
};

echo $discount;