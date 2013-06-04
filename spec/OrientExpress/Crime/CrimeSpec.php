<?php

namespace spec\OrientExpress\Crime;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CrimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('OrientExpress\Crime\Crime');
    }

    /**
     * @param OrientExpress\Suspect\Suspect $suspect
     */
    function it_should_be_able_to_have_suspects($suspect)
    {
        $this->addSuspect($suspect);
        $this->getSuspects()->shouldReturn(array($suspect));
    }
}
