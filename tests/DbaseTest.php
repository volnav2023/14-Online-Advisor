<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Dbase;

final class DbaseTest extends TestCase
{
    public function testOpen()
    {
        $this->expectOutputString('Dbase connected successfully');
        $dbase1 = new Dbase();
        $dbase1->open('localhost', '14-online-advisor', 'root','');
    }

    public function testQuery()
    {
        $this->expectOutputString('Dbase connected successfully');
        $dbase1 = new Dbase();
        $dbase1->open('localhost', '14-online-advisor', 'root','');
    }
}
