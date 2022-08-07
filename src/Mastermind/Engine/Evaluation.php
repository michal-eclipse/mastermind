<?php

declare(strict_types=1);

namespace Mastermind\Engine;

class Evaluation
{
    private int $exacts;
    private int $misplaces;

    public function __construct($exactGuessedFieldsCount = 0, $misplacedGuessedFieldsCount = 0)
    {
        $this->exacts = $exactGuessedFieldsCount;
        $this->misplaces = $misplacedGuessedFieldsCount;
    }
}