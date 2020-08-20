<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\User;

final class UserTest extends TestCase
{
    public function testEchoOk()
    {
        $this->expectOutputString('Ici User::test() called');
        $class1 = new User();
        $class1->test();
    }
}
