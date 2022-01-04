<?php


class Calculator
{
    function add($a, $b): int
    {
        if ($a/2 + $b/2 >= PHP_INT_MAX/2) {
            throw new Exception('error');
        }
        return $a + $b;
    }
}