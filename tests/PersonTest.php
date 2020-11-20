<?php

namespace Mwangaben\Basics\Tests;

use PHPUnit\Framework\TestCase;
use Mwangaben\Basics\Facades\Person;

class PersonTest extends TestCase
{
    /** @test **/
    public function it_works()
    {
        $this->assertEquals('Working', Person::work());
    }

    /** @test **/
    public function it_talks()
    {
        $this->assertEquals('Talking', Person::talk());
    }
}
