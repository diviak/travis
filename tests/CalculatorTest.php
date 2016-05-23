<?php

namespace Travis;

use PHPUnit_Framework_TestCase;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testOnePlusOne()
    {
        $this->assertEquals(1 + 1, 1);
    }
}
