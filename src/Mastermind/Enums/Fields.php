<?php

declare(strict_types=1);

namespace Mastermind\Enums;

enum Fields
{
    case FIELD_EMPTY;
    case FIELD_ONE;
    case FIELD_TWO;
    case FIELD_THREE;
    case FIELD_FOUR;
    case FIELD_FIVE;
    case FIELD_SIX;
    case FIELD_SEVEN;
    case FIELD_EIGHT;

    public function color()
    {
        return match($this)
        {
            self::FIELD_EMPTY => '#FFFFFF',
            self::FIELD_ONE => '#123456',
            self::FIELD_TWO => '#234562',
            self::FIELD_THREE => '#122356',
            self::FIELD_FOUR => '#537844',
            self::FIELD_FIVE => '#214567',
            self::FIELD_SIX => '#225533',
            self::FIELD_SEVEN => '#225641',
            self::FIELD_EIGHT => '#109324',
            default => '#FFFFFF'
        };
    }
}