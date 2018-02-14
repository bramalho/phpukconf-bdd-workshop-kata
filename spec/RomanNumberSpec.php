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

    function it_should_return_two()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_should_return_three()
    {
        $this->convert(3)->shouldReturn('III');
    }

    function it_should_return_four()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    function it_should_return_five()
    {
        $this->convert(5)->shouldReturn('V');
    }

    function it_should_return_seven()
    {
        $this->convert(7)->shouldReturn('VII');
    }

    function it_should_return_nine()
    {
        $this->convert(9)->shouldReturn('IX');
    }
}
