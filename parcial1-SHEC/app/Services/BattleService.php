<?php

namespace App\Services;

use App\Models\Human;

class BattleService
{
    public function determineWinnerMessage(Human $firstHuman, Human $secondHuman): string
    {
        if ($firstHuman->getAura() > $secondHuman->getAura()) {
            return $firstHuman->getName().' would win the aura farming battle!';
        }

        if ($secondHuman->getAura() > $firstHuman->getAura()) {
            return $secondHuman->getName().' would win the aura farming battle!';
        }

        return "It's a tie!";
    }
}
