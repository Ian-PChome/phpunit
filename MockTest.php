<?php

use PHPUnit\Framework\TestCase;
use src\HelloWorld;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mock = $this->createMock(HelloWorld::class);
        
        $mock->expects($this->once())
            ->method('sayHello')
            ->willReturn('bye');

        $this->assertEquals('bye',$mock->sayHello());
        $this->assertEquals('Hello World!', $mock->message);

    }
}
