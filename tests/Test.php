<?php
use PHPUnit\Framework\Testcase;

use Test;

Class TestTest extends Testcase
{
    function testAdd()
    {
        $test = new Test();

        $this->equalTo(2,$test->add(1+1));
    }
}
