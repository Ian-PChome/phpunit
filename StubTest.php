<?php

use PHPUnit\Framework\TestCase;
use src\HelloWorld;

class StubTest extends TestCase
{
    public function testStub()
    {
        $stub = $this->createStub(HelloWorld::class);
        $stub->method('sayHello')
             ->willReturn('bye');

        $this->assertEquals('bye', $stub->sayHello());
    }
}
