<?php

declare(strict_types=1);

namespace Mastermind;

use Mastermind\Exception\RowOutOfBoundsException;

class MastermindGame
{
    private const NUMBER_OF_TURNS = 9;
    private array $row;
    private int $turnCounter;

    public function __construct()
    {
        for($i = 0; $i < 9; $i++)
        $this->row[$i] = [0, 0, 0, 0];
        $this->turnCounter = 1;
    }

    public function getRow(int $i): array
    {
        if(!isset($this->row[$i])) {
            throw new RowOutOfBoundsException('Row index must be between 0 and 8');
        }
        return $this->row[$i];
    }

    private function setCurrentRow(array $guess): void
    {
        $this->row[$this->turnCounter-1] = $guess;
    }

    public function getTotalTurns(): int
    {
        return self::NUMBER_OF_TURNS;
    }

    public function getCurrentTurn(): int
    {
        return $this->turnCounter;
    }

    public function submitGuess(array $guess = [0, 0, 0, 0]): void
    {
        $this->setCurrentRow($guess);
        $this->turnCounter++;
    }

}