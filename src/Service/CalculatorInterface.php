<?php

namespace App\Service;

interface CalculatorInterface
{
    public function add(float $firstNumber, float $secondNumber): float;

    public function subtract(float $firstNumber, float $secondNumber): float;

    public function multiply(float $firstNumber, float $secondNumber): float;
}