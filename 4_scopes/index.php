<?php
$globalVariable = "This is s a Global Variable";
function testFunction()
{
    $localVariable = "This is a Local Variable";
    global $globalVariable;
    echo $localVariable . "</br>";
    echo $globalVariable;
}
function staticVariableFunction()
{
    static $staticVariable = 0;
    echo "$staticVariable, ";
    $staticVariable++;
    if ($staticVariable > 10) return;
    staticVariableFunction();
}
testFunction();
echo "<br/>" . "Static Variable Values = ";
staticVariableFunction();
