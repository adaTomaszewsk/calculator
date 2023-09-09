<?php

namespace App\Service;

interface CalculatorInterface
{
    public function add(float $firstNumber, float $secondNumber): float;
}