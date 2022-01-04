<?php
require "src/Calculator.php";

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    function testAdd() {
        $a = 4;
        $b = 5;
        $expected = 9;

        $calculator = new Calculator();
        $result = $calculator->add($a, $b);

        $this->assertEquals($expected, $result);
    }

    function testAddZeroWithNumber() {
        $a = 0;
        $b = 5;
        $expected = 5;

        $calculator = new Calculator();
        $result = $calculator->add($a, $b);

        $this->assertEquals($expected, $result);
    }

    function testAddWithINTMax() {
        $a = PHP_INT_MAX;
        $b = 1;
        $expected = "error";

        try {
            $calculator = new Calculator();
            $result = $calculator->add($a, $b);
        }catch (Exception $exception) {
            $this->assertEquals($expected, $exception->getMessage());
        }
    }
}