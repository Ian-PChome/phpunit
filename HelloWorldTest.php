<?php
use PHPUnit\Framework\TestCase;
use src\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function test__construct()
    {
        $hw = new HelloWorld();
        $this->assertEquals(new HelloWorld(), $hw); // 比對Object
        $this->assertNotEquals(new HelloWorld('Hello'), $hw);
    }

    public function testSayHello()
    {
        $hw = new HelloWorld();
        $string = $hw->sayHello();
        $this->assertEquals('Hello World!', $string);
        $this->assertNotEquals('Hello', $string);
    }
}
