<?php

$current_time = time();
#echo $current_time ;

#convert future five days into number of seconds
$five_days = $current_time + 5 * 24 * 60 * 60;
//echo $five_days;


$yestarday = $current_time - 60 * 60 * 24;
//echo $yestarday;

echo date('m/d/Y g:i a', $yestarday);

echo date_default_timezone_get();