<?php
$list = [2,3,4,5];

$result = array_map(
    fn($item) => $item * 2,
    $list
);


print_r($result);