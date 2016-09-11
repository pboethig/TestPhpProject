<?php

use TestPhpProject\Math;

class MathTest extends \PHPUnit\Framework\TestCase
{
    // test the talk method
    public function testAdd() {
        // make an instance of the user
        $math = new Math();

        // use assertEquals to ensure the greeting is what you
        $expected = 1;
        $actual = $math->add(1,2);
        $this->assertEquals($expected, $actual);
    }
}