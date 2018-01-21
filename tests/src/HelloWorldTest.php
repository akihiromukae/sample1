<?php
use PHPUnit\Framework\TestCase;
require_once __dir__."/../../src/HelloWorld.php";

class HelloWorldTest extends TestCase
{
    public function testToString()
    {
        assertEquals('Hello World!', (string)(new \Sample1\src\HelloWorld\HelloWorld()));
    }

    public function testHello() {
        $hw = new \Sample1\src\HelloWorld\HelloWorld();
        $hw->setStr('Hiii!');
        assertEquals('Hiii!',$hw->getStr());
    }
}
