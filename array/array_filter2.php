<?php

/**
 * Assume we have an array of people and 
 * want to filter out everyone who is older than 60 years old.
 */


$people = [
    [
        'name' => 'Anna',
        'age' => 78
    ],
    [
        'name' => 'Maxi',
        'age' => 40
    ],
    [
        'name' => 'Johna',
        'age' => 65
    ],
    [
        'name' => 'Donald',
        'age' => 59
    ],
    [
        'name' => 'Monir',
        'age' => 37
    ]
];

$people_over_60 = array_filter($people, fn($person)=> $person['age'] > 60, ARRAY_FILTER_USE_BOTH );
print_r($people_over_60);
 
/**
 * Get all the names whose names end is "y"
 */
$people = ["Johnny", "Timmy", "Bobby", "Sam", "Tammy", "Danny", "Joe"];
$names_end_with_y = array_filter($people, fn($person) => substr($person, -1 ) === 'y' );
print_r($names_end_with_y);
