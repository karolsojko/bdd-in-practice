<?php

namespace spec\OrientExpress\Suspect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SuspectSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('OrientExpress\Suspect\Suspect');
    }

    function it_should_answer_questions()
    {
        $this->answer('Are you the killer?')->shouldReturn('Nope, not me');
    }

    function it_should_not_confess_to_wrong_questions_if_guilty()
    {
        $this->setGuilty(true);
        $this->answer('Are you the killer?')->shouldReturn('Nope, not me');
    }

    function it_should_confess_to_key_question_if_guilty()
    {
        $this->setGuilty(true);
        $this->answer('It was you!')->shouldReturn('Mmmkay I confess');
    }
}
