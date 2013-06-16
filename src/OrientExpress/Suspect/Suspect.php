<?php

namespace OrientExpress\Suspect;

class Suspect
{
    protected $keyQuestion = 'It was you!';

    protected $guilty = false;

    public function answer($question)
    {
        if ($this->guilty && $question == $this->keyQuestion) {
            return 'Mmmkay I confess';
        }

        return 'Nope, not me';
    }

    public function setGuilty($guilty)
    {
        $this->guilty = $guilty;
    }
}
