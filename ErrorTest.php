<?php

use PHPUnit\Framework\TestCase;

class ErrorTest extends TestCase
{
    public function testJsonError()
    {
        $this->expectException(JsonException::class);
        throw new JsonException("error");
    }
}
