<?php

declare(strict_types=1);

namespace Mastermind;

use Mastermind\Exception\RowOutOfBoundsException;
use Mastermind\Guess;

class MastermindGame
{
    private const NUMBER_OF_TURNS = 9;
    private array $guessRow;
    private int $turnCounter;

    public function __construct()
    {
        for($i = 0; $i < 9; $i++)
        $this->guessRow[$i] = [0, 0, 0, 0];
        $this->turnCounter = 1;
    }

    public function getGuessRow(int $i): array
    {
        if(!isset($this->guessRow[$i])) {
            throw new RowOutOfBoundsException('Row index must be between 0 and 8');
        }
        return $this->guessRow[$i];
    }

    private function setCurrentGuessRow(Guess $guess): void
    {
        $this->guessRow[$this->turnCounter-1] = $guess;
    }

    public function getTotalTurns(): int
    {
        return self::NUMBER_OF_TURNS;
    }

    public function getCurrentTurn(): int
    {
        return $this->turnCounter;
    }

    public function submitGuess(Guess $guess): void
    {
        $this->setCurrentGuessRow($guess);
        $this->turnCounter++;
    }

}