<?php

namespace Tests;

use Manoj\CapitalClass;
use PHPUnit\Framework\TestCase;

class CapitalClassTest extends TestCase
{
    public function testConvertToCapital()
    {
        $capitalConverter = new CapitalClass();
        $capitalWord = $capitalConverter->convertToCapital("hello");

        $this->assertEquals("HELLO", $capitalWord);
    }
}
