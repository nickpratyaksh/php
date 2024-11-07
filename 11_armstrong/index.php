<?php

function calculateOrder($number)
{
    $order = 0;
    while ($number > 0) {
        $order++;
        $number = intval($number / 10);
    }
    return $order;
}

function isArmstrong($number)
{
    $originalNumber = $number;
    $order = calculateOrder($number);
    $sum = 0;
    while ($number > 0) {
        $temp = $number % 10;
        $sum = $sum + pow($temp, $order);
        $number = intval($number / 10);
    }
    if ($sum == $originalNumber) {
        echo $originalNumber . " is an Armstrong Number";
    } else {
        echo $originalNumber . " is not an Armstrong Number";
    }
}

isArmstrong(153);
