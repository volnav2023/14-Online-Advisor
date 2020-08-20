<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\ClassA;

final class ClassATest extends TestCase
{
    public function testEchoOk()
    {
        $this->expectOutputString('Ici ClassA::test() called');
        $class1 = new ClassA();
        $class1->test();
    }
    public function testEchoNok()
    {
        $this->expectOutputString('Ici ClassB::test() called\n<br>');
        $class1 = new ClassA();
        $class1->test();
    }
}
