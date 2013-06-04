<?php

namespace OrientExpress\Crime;

use OrientExpress\Suspect\Suspect;

class Crime
{
    protected $suspects = array();

    public function addSuspect(Suspect $suspect)
    {
        $this->suspects[] = $suspect;
    }

    public function getSuspects()
    {
        return $this->suspects;
    }
}
