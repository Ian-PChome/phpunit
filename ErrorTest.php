<?php

use PHPUnit\Framework\TestCase;

class ErrorTest extends TestCase
{
    public function testJsonError()
    {
        $this->expectException(JsonException::class);
        $this->expectExceptionMessage("err");
        throw new JsonException("error");
    }
}
