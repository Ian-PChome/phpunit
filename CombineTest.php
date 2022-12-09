<?php

use PHPUnit\Framework\TestCase;

class CombineTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testCombine($a, $b, $c)
    {
        $this->assertEquals($c, "{$a} {$b}");
    }

    public function provider()
    {
        return [
            ['Hello', 'World', 'Hello World'],
            ['Go', 'PHP', 'Go PHP'],
            ['This', 'Fail', 'This success']
        ];
    }
}
