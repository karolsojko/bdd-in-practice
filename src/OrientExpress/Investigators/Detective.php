<?php

namespace OrientExpress\Investigators;

use OrientExpress\Crime\Crime;

class Detective
{
    public function solve(Crime $crime)
    {
        foreach ($crime->getSuspects() as $suspect) {
            if (preg_match('/confess/', $suspect->answer('It was you!'))) {
                return $suspect;
            }
        }
    }
}
