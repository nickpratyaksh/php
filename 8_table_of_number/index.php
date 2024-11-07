<?php

function tableOfNumber($n)
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br/>";
    }
    echo "<br/>";
}

tableOfNumber(5);
