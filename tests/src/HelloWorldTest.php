<?php
use PHPUnit\Framework\TestCase;
require_once __dir__."/../../src/HelloWorld.php";

class HelloWorldTest extends TestCase
{
    public function testToString()
    {
        $s = new HelloWorld();
        assertEquals('Hello World!', (string)(new HelloWorld()));
    }
}
