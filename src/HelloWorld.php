<?php
class HelloWorld
{
    public $str = "Hi!";
    public function get(): string
    {
        return "Hello World!";
    }
    public function __toString()
    {
        return $this->get();
    }
    public function set(String $str): string
    {
        $this->str = $str;
    }
}
