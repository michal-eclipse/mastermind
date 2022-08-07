<?php

declare(strict_types=1);

namespace Mastermind;

use Mastermind\Enums\Fields;

class Field
{
    const FIELDS = [
    Fields::FIELD_EMPTY,
    Fields::FIELD_ONE,
    Fields::FIELD_TWO,
    Fields::FIELD_THREE,
    Fields::FIELD_FOUR,
    Fields::FIELD_FIVE,
    Fields::FIELD_SIX,
    Fields::FIELD_SEVEN,
    Fields::FIELD_EIGHT
    ];

    private Fields $identity;

    public function __construct(Fields $field = Fields::FIELD_EMPTY)
    {
        $this->identity = $field;
    }

    public function __toString()
    {
        return $this->identity->value();
    }

    public function getValue(): int
    {
        return $this->identity->value();
    }

    public function getColor(): string
    {
        return $this->identity->color();
    }
}