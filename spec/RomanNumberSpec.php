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

    function it_should_return_ten()
    {
        $this->convert(10)->shouldReturn('X');
    }

    function it_should_return_twelve()
    {
        $this->convert(12)->shouldReturn('XII');
    }

    function it_should_return_twenty()
    {
        $this->convert(20)->shouldReturn('XX');
    }

    function it_should_return_forty_nine()
    {
        $this->convert(49)->shouldReturn('XLIX');
    }

    function it_should_return_fifty()
    {
        $this->convert(50)->shouldReturn('L');
    }
}
