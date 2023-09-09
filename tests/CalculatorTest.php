<?php

namespace App\Tests;

use App\Service\CalculatorInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CalculatorTest extends KernelTestCase
{
    private CalculatorInterface $calculator;

    /**
     * @throws \Exception
     */
    protected function setUp(): void
    {
        self::bootKernel();
        $this->calculator = self::getContainer()->get('calculator');
    }

    public function testAddingInt(): void
    {
        $this->assertEquals(1, $this->calculator->add(1, 0));
        $this->assertEquals(15, $this->calculator->add(4, 11));
        $this->assertEquals(105, $this->calculator->add(85, 20));
    }

    public function testAddingFloat(): void
    {
        $this->assertEquals(4.5, $this->calculator->add(1.9, 2.6));
        $this->assertEquals(11.25, $this->calculator->add(10.15, 1.1));
        $this->assertEquals(3.1415, $this->calculator->add(1.1111, 2.0304));
    }

    public function testAddingNegative(): void
    {
        $this->assertEquals(-2, $this->calculator->add(-3, 1));
        $this->assertEquals(-7, $this->calculator->add(-3, -4));
        $this->assertEquals(3, $this->calculator->add(-10, 13));
    }
}
