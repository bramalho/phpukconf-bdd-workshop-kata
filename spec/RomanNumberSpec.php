<?php

namespace spec;

use RomanNumber;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumber::class);
    }

    function it_should_return_one()
    {
        $this->convert(1)->shouldReturn('I');
    }
}
