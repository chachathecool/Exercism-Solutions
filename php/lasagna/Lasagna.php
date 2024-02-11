<?php

declare(strict_types=1);

class Lasagna
{
    // Please define the 'expectedCookTime()' function
    function expectedCookTime() {
        $expectTimeInOven = 40;
        return $expectTimeInOven;
    }

    // Please define the 'remainingCookTime($elapsed_minutes)' function
    function remainingCookTime($elapsed_minutes){
        $timeLeftInOven = $this->expectedCookTime() - $elapsed_minutes;
        return $timeLeftInOven;
    }

    // Please define the 'totalPreparationTime($layers_to_prep)' function
    function totalPreparationTime($layers_to_prep){
        $timeToPrep = $layers_to_prep * 2; 
        return $timeToPrep;
    }

    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
    function totalElapsedTime($layers_to_prep, $elapsed_minutes){
        $timeToPrep = $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
        return $timeToPrep;
    }
    // Please define the 'alarm()' function
    function alarm(){
        return "Ding!";
    }
};
