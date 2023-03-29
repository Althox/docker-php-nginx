<?php
namespace Test;

/**
 * run with `./vendor/bin/phpunit filename`
 */
class DemoUnitTest extends \PHPUnit\Framework\TestCase
{
    public function testThing(): void
    {
        $a = 'a';
        $b = 'b';

        $this->assertNotEquals($a, $b);
        $this->assertEquals('a', $a);
        $this->assertEquals('b', $b);
    }
}
