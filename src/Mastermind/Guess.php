<?php

declare(strict_types=1);

namespace Mastermind;

use Mastermind\Field;
use Mastermind\Enums\Fields;

class Guess
{
    private $fields;

    public function __construct()
    {
        for($i=0; $i<4; $i++) {
            $this->fields[] = new Field();
        }
    }

    public function setField(int $index, Field $field)
    {
        $this->fields[$index] = $field;
    }
}