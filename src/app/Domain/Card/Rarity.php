<?php

declare(strict_types=1);

namespace App\Domain\Card;

use InvalidArgumentException;

enum Rarity: int
{
    case NORMAL = 1;
    case NORMAL_PLUS = 2;
    case RARE = 3;
    case RARE_PLUS = 4;
    case SRARE = 5;

    /**
     * 値をEnumに変換する
     */
    public static function caseOf(int $value): self
    {
        return match ($value) {
            self::NORMAL->value => self::NORMAL,
            self::NORMAL_PLUS->value => self::NORMAL_PLUS,
            self::RARE->value => self::RARE,
            self::RARE_PLUS->value => self::RARE_PLUS,
            self::SRARE->value => self::SRARE,
            default => throw new InvalidArgumentException("Rarity value is invalid. value: $value"),
        };
    }
}
