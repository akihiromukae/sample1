<?php

/**
 * Class HelloWorld
 */
class HelloWorld
{
    public $str = "Hello World!";
    /**
     * @return string
     */
    public function get(): string
    {
        return $this->str;
    }
    public function __toString()
    {
        return $this->get();
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
