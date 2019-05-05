<?php

namespace DaviAlexandre;

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    private $myClass;

    public function setUp(): void
    {
        $this->myClass = new MyClass();
    }

    public function testItCanDoSomething(): void
    {
        $this->assertTrue($this->myClass->doSomething());
    }

    public function testASlowAndFailingTest(): void
    {
        sleep(5);
        $this->assertTrue(false);
    }
}
