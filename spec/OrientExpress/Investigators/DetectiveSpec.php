<?php

namespace spec\OrientExpress\Investigators;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DetectiveSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('OrientExpress\Investigators\Detective');
    }

    /**
     * @param OrientExpress\Crime\Crime $crime
     * @param OrientExpress\Suspect\Suspect $suspect1
     * @param OrientExpress\Suspect\Suspect $suspect2
     */
    function it_should_be_able_to_solve_crimes($crime, $suspect1, $suspect2)
    {
        $crime->getSuspects()->willReturn(array($suspect1, $suspect2));
        $suspect1->answer('It was you!')->willReturn('Nope, not me');
        $suspect2->answer('It was you!')->willReturn('Mmmkay I confess');

        //$this->solve($crime)->shouldReturn(Argument::type('OrientExpress\Suspect\Suspect'));
        $this->solve($crime)->shouldReturn($suspect2);
    }
}
