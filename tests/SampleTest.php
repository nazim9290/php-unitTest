<?php

use PHPUnit\Framework\TestCase;

//file name and class name is same to same
class SampleTest extends TestCase {
    function testSomething() {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
}