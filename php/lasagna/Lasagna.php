<?php

declare(strict_types=1);

class Lasagna
{
    // Please define the 'expectedCookTime()' function
    public function expectedCookTime(): int {
        return 40;
    }

    // Please define the 'remainingCookTime($elapsed_minutes)' function
    public function remainingCookTime(int $elapsed_minutes): int {
        return $this->expectedCookTime() - $elapsed_minutes;
    }
    const minutesForEachLayer = 2;
    // Please define the 'totalPreparationTime($layers_to_prep)' function
    public function totalPreparationTime(int $layers_to_prep): int {
        return $layers_to_prep * self::minutesForEachLayer; 
    }

    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
    public function totalElapsedTime(int $layers_to_prep, int $elapsed_minutes): int {
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }
    // Please define the 'alarm()' function
    public function alarm(): string {
        return "Ding!";
    }
};
