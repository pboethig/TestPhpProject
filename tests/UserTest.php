<?php

use MyTest\Test;

class UserTest extends \PHPUnit\Framework\TestCase
{
    // test the talk method
    public function testTalk() {
        // make an instance of the user
        $user = new Test();

        // use assertEquals to ensure the greeting is what you
        $expected = "Hello world!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
    }
}