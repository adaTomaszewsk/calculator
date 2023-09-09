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

    public function testSubtractingInt(): void
    {
        $this->assertEquals(12, $this->calculator->subtract(17, 5));
        $this->assertEquals(15, $this->calculator->subtract(15, 0));
        $this->assertEquals(0, $this->calculator->subtract(7, 7));
    }

    public function testSubtractingFloat(): void
    {
        $this->assertEquals(11.6, $this->calculator->subtract(22.75, 11.15));
        $this->assertEquals(11.4, $this->calculator->subtract(14.3, 2.9));
        $this->assertEquals(111.01, $this->calculator->subtract(123.12, 12.11));
    }

    public function testSubtractingNegative(): void
    {
        $this->assertEquals(-2.5, $this->calculator->subtract(-12.5, -10));
        $this->assertEquals(8.5, $this->calculator->subtract(5.2, -3.3));
        $this->assertEquals(-11.3, $this->calculator->subtract(-6.2, 5.1));
    }
}
