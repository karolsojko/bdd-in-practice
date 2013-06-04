<?php

namespace OrientExpress\Suspect;

class Suspect
{
    const KEY_QUESTION = 'It was you!';

    protected $guilty = false;

    public function answer($question)
    {
        if ($this->guilty && $question == self::KEY_QUESTION) {
            return 'Mmmkay I confess';
        }

        return 'Nope, not me';
    }

    public function setGuilty($guilty)
    {
        $this->guilty = $guilty;
    }
}
