<?php
/**
 * Created by sample1.
 * Date: 2018/01/20
 * Time: 19:08
 */
$reflection = new \ReflectionClass(\PHPUnit\Framework\Assert::class); // PHPUnit 5系だと微妙に場所が違うので注意
require_once dirname($reflection->getFileName()) . '/Assert/Functions.php';