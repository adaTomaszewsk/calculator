<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Calculator implements CalculatorInterface
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function add(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }

    public function subtract(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber - $secondNumber;
    }
}