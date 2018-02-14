<?php

namespace spec;

use Loyalty;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LoyaltySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Loyalty::class);
    }

    public function it_should_give_100_points(\Flight $flight)
    {
        $flight->isBusiness()->willReturn(false);
        $flight->getMileage()->willReturn(100);

        $this->addPoints($flight)->shouldReturn(100);
    }

    public function it_should_give_200_points_for_business(\Flight $flight)
    {
        $flight->isBusiness()->willReturn(true);
        $flight->getMileage()->willReturn(100);

        $this->addPoints($flight)->shouldReturn(200);
    }
}
