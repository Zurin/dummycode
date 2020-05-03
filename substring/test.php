<?php

use PHPUnit\Framework\TestCase;

require_once "count.php";

class SimpleTest extends TestCase
{
    public function testCountSub()
    {
        $sub = new SubstringCount();

        $str = "charmander";
        $substr = $sub->countSubstr($str);

        $this->assertEquals(5, $substr); 
    }
}