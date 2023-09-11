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
        $this->logger->log('info', 'Adding first number: ' . $firstNumber . ' and second number: ' . $secondNumber);
        return $firstNumber + $secondNumber;
    }

    public function subtract(float $firstNumber, float $secondNumber): float
    {
        $this->logger->log('info', 'Subtract first number: ' . $firstNumber . ' from second number: ' . $secondNumber);
        return $firstNumber - $secondNumber;
    }

    public function multiply(float $firstNumber, float $secondNumber): float
    {
        $this->logger->log('info', 'Multiply first number: ' . $firstNumber . ' times second number: ' . $secondNumber);
        return $firstNumber * $secondNumber;
    }

    /**
     * @throws \Exception
     */
    public function divide(float $firstNumber, float $secondNumber): float
    {
        if ($secondNumber == 0) {
            $this->logger->error('Can not divide by 0.');
            throw new \Exception('Can not divide by 0.');
        }
        $this->logger->log('info', 'Divide first number: ' . $firstNumber . ' by second number: ' . $secondNumber);
        return $firstNumber / $secondNumber;
    }
}