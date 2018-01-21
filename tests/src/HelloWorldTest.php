<?php
use PHPUnit\Framework\TestCase;
require_once __dir__."/../../src/HelloWorld.php";
use \Sample1\src\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testToString()
    {
        assertEquals('Hello World!', (string)(new HelloWorld()));
    }

    public function testHello() {
        $hw = new HelloWorld();
        $hw->setStr('Hiii!');
        assertEquals('Hiii!',$hw->getStr());
    }
}
