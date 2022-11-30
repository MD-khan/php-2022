<?php

/**
 * How would you write a function to return an array of customer names 
 * who have ordered over $200 of product given the array structure provided below?
 * Assume there is an indeterminate amount of customers and orders per customer.*
 */

$customers = [
    1 => [
        'name' => 'Alice',
        'orders' => [
            '49.99',
            '75.32',
        ],
    ],

    2 => [
        'name' => 'Bob',
        'orders' => [
            '209.28',
            '22.92',
        ],
    ],

    3 => [
        'name' => 'Md',
        'orders' => [
            '109.28',
            '230.92',
        ],
    ],

    4 => [
        'name' => 'Khan',
        'orders' => [
            '200.09',
        ],
    ],

    5 => [
        'name' => 'Juma',
        'orders' => ['201.0']
    ],


];

# Loop through the custmoers array 
# and look for the orders value
# if order value is over $200
# add this customer name to the container
# finaly return the array

function customers_order_over_200(array $customers)
{
    // $filterd_customers = array_filter(
    //     $customers,
    //     fn ($customers) =>
    //     array_sum($customers['orders']) > 200
    // );

    foreach ($customers as $customer) {

        if (is_array($customer['orders'])) {
            # Cast to float
            (float)$customer['orders'];
            (array_sum($customer['orders']) > 200) ?  $names[] = $customer['name'] : false;
        }
    }

    return $names;
}
#customers_order_over_200($customers);
print_r(customers_order_over_200($customers));
