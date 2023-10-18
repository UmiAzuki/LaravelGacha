<?php

declare(strict_types=1);

namespace App\Domain\Card\Ability;

use App\Domain\Card\Card;
use App\Domain\Card\Rarity;

final class CardAbility extends Card
{
    private int $strength;
    private int $intelligence;
    private int $maxHP;
    private int $maxMP;

    public function __construct(
        int $cardID,
        Rarity $rarity,
        string $cardName,
        string $fileName,
        int $strength,
        int $intelligence,
        int $maxHP,
        int $maxMP
    ) {
        parent::__construct($cardID, $cardName, $fileName, $rarity);
        $this->strength = $strength;
        $this->intelligence = $intelligence;
        $this->maxHP = $maxHP;
        $this->maxMP = $maxMP;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    public function getMaxHP(): int
    {
        return $this->maxHP;
    }

    public function getMaxMP(): int
    {
        return $this->maxMP;
    }
}
