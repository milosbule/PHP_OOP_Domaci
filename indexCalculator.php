<?php

include("./calculator.php");

$myCalculatorOne = new Calculator(654, -127);
echo "myCalculatorOne result is: <br>";
echo "<br>";
$myCalculatorOne->getResult();

echo "<br>";
echo "<br>";
echo "<br>";

$myCalculatorTwo = new Calculator(156.54, 256.54);
echo "myCalculatorTwo result is: <br>";
echo "<br>";
$myCalculatorTwo->getResult();
