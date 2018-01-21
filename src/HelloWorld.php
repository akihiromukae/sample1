<?php
namespace Sample1\src;

/**
 * Class HelloWorld
 */
class HelloWorld
{
    public $str = "Hello World!";
    public function __toString()
    {
        return $this->getStr();
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }
}
