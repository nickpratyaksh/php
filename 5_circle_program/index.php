<?php

define("PI", 3.14);

function area($radius)
{
    $radius = PI * $radius * $radius;
    echo "Radius of circle = $radius" . "<br/>";
}

function circumference($radius)
{
    $circumference = 2 * PI * $radius;
    echo "Circumference of circle = $circumference" . "<br/>";
}

area(5);
circumference(5);
