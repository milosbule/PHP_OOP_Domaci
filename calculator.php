<?php

class Calculator
{
    private float $number1;
    private float $number2;

    function __construct($num1, $num2)
    {
        $this->number1 = $num1;
        $this->number2 = $num2;
    }

    public function addition()
    {
        $result = 0;
        $result = $this->number1 + $this->number2;
        return $result;
    }

    public function subtraction()
    {
        $result = 0;
        $result = $this->number1 - $this->number2;
        return round($result, 2);
    }

    public function multiplication()
    {
        $result = 0;
        $result = $this->number1 * $this->number2;
        return round($result, 2);
    }

    public function divide()
    {
        $result = 0;
        $result = $this->number1 / $this->number2;
        return round($result, 2);
    }

    public function getResult()
    {
        echo "Result of addition: " . $this->addition() . "<br>";
        echo "Result of subtraction: " . $this->subtraction() . "<br>";
        echo "Result of multiplication: " . $this->multiplication() . "<br>";
        echo "Result of divison: " . $this->divide() . "<br>";
    }
}
