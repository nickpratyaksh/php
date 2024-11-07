<?php

function factorial($n)
{
    $product = 1;
    for ($i = 1; $i <= $n; $i++) {
        $product = $product * $i;
    }
    echo "Factorial of $n is $product" . "<br/>";
}

factorial(5);
