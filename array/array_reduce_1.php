<?php

# array_reduce()

$invoice = [
    [
        'price' => 9.99,
        'qty' => 3,
        'desc' => 'Item 1'
    ],

    [
        'price' => 29.99,
        'qty' => 1,
        'desc' => 'Item 2'
    ],

    [
        'price' => 149,
        'qty' => 1,
        'desc' => 'Item 3'
    ],
    [
        'price' => 14.99,
        'qty' => 2,
        'desc' => 'Item 4'
    ],
    [
        'price' => 4.99,
        'qty' => 4,
        'desc' => 'Item 4'
    ],
];

# Find the total price from the invoice
$total = array_reduce($invoice, fn ($sum, $item) => $sum + $item['qty'] * $item['price']);

echo $total;
